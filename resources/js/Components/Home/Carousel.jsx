import { motion, useMotionValue } from 'framer-motion';
import { useEffect, useState } from 'react';
import { BsFileEarmarkMedicalFill } from 'react-icons/bs';
import { FaPhone, FaUserDoctor } from 'react-icons/fa6';

const imgs = [
    '/imgs/nature/1.jpg',
    '/imgs/nature/2.jpg',
    '/imgs/nature/3.jpg',
    '/imgs/nature/4.jpg',
    '/imgs/nature/5.jpg',
    '/imgs/nature/6.jpg',
    '/imgs/nature/7.jpg',
];

const ONE_SECOND = 1000;
const AUTO_DELAY = ONE_SECOND * 10;
const DRAG_BUFFER = 50;

const SPRING_OPTIONS = {
    type: 'spring',
    mass: 3,
    stiffness: 400,
    damping: 50,
};

export const SwipeCarousel = () => {
    const [imgIndex, setImgIndex] = useState(0);

    const dragX = useMotionValue(0);

    useEffect(() => {
        const intervalRef = setInterval(() => {
            const x = dragX.get();

            if (x === 0) {
                setImgIndex((pv) => {
                    if (pv === imgs.length - 1) {
                        return 0;
                    }
                    return pv + 1;
                });
            }
        }, AUTO_DELAY);

        return () => clearInterval(intervalRef);
    }, []);

    const onDragEnd = () => {
        const x = dragX.get();

        if (x <= -DRAG_BUFFER && imgIndex < imgs.length - 1) {
            setImgIndex((pv) => pv + 1);
        } else if (x >= DRAG_BUFFER && imgIndex > 0) {
            setImgIndex((pv) => pv - 1);
        }
    };

    return (
        <div className="relative mx-auto overflow-hidden pb-2">
            <motion.div
                drag="x"
                dragConstraints={{
                    left: 0,
                    right: 0,
                }}
                style={{
                    x: dragX,
                }}
                animate={{
                    translateX: `-${imgIndex * (window.innerWidth > 768 ? 101 : 100)}%`,
                }}
                transition={SPRING_OPTIONS}
                onDragEnd={onDragEnd}
                className="flex cursor-grab items-center active:cursor-grabbing"
            >
                <Images imgIndex={imgIndex} />
            </motion.div>
            <ResponsiveComponent />
            <Dots imgIndex={imgIndex} setImgIndex={setImgIndex} />
        </div>
    );
};

const Images = ({ imgIndex }) => {
    return (
        <>
            {imgs.map((imgSrc, idx) => {
                return (
                    <motion.div
                        key={idx}
                        style={{
                            backgroundImage: `url(${imgSrc})`,
                            backgroundSize: 'cover',
                            backgroundPosition: 'center',
                            height: '35vw',
                        }}
                        animate={{
                            scale: imgIndex === idx ? 0.95 : 0.85,
                        }}
                        transition={SPRING_OPTIONS}
                        className="aspect-video w-screen shrink-0 rounded-xl bg-neutral-800 object-cover"
                    />
                );
            })}
        </>
    );
};

const Dots = ({ setImgIndex }) => {
    const handlePrevious = () => {
        setImgIndex((prev) => (prev > 0 ? prev - 1 : imgs.length - 1));
    };

    const handleNext = () => {
        setImgIndex((prev) => (prev < imgs.length - 1 ? prev + 1 : 0));
    };

    return (
        <div className="container items-center">
            <div className="absolute inset-0 z-40 flex items-center justify-between p-1 sm:p-4">
                {/* Previous Button */}
                <button
                    onClick={handlePrevious}
                    className="rounded-full bg-black/20 p-1.5 text-white transition-all hover:bg-black sm:p-2 md:p-3"
                    aria-label="Previous image"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        strokeWidth={2}
                        stroke="currentColor"
                        className="h-4 w-4 sm:h-6 sm:w-6 md:h-8 md:w-8"
                    >
                        <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            d="M15.75 19.5L8.25 12l7.5-7.5"
                        />
                    </svg>
                </button>

                {/* Next Button */}
                <button
                    onClick={handleNext}
                    className="rounded-full bg-black/20 p-1.5 text-white transition-all hover:bg-black sm:p-2 md:p-3"
                    aria-label="Next image"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        strokeWidth={2}
                        stroke="currentColor"
                        className="h-4 w-4 sm:h-6 sm:w-6 md:h-8 md:w-8"
                    >
                        <path
                            strokeLinecap="round"
                            strokeLinejoin="round"
                            d="M8.25 4.5l7.5 7.5-7.5 7.5"
                        />
                    </svg>
                </button>
            </div>
        </div>
    );
};

const ResponsiveComponent = () => {
    return (
        <div className="absolute inset-0 z-30 flex items-end justify-center">
            <div className="flex w-fit max-w-xl items-center justify-evenly gap-1 rounded-lg bg-slate-600 p-2 sm:flex-col md:flex-row md:gap-2 md:p-4 lg:gap-3">
                <div className="flex items-center sm:mb-0">
                    <div className="w-fit rounded-full bg-white p-1 md:p-3">
                        <div className="text-xs text-indigo-500 sm:text-sm md:text-2xl">
                            <FaUserDoctor />
                        </div>
                    </div>
                    <div className="ml-2 flex flex-col sm:ml-3 md:ml-4">
                        <p className="text-xs font-bold text-white sm:text-sm md:text-lg">
                            Dokter
                        </p>
                    </div>
                </div>
                <div className="flex items-center sm:mb-0">
                    <div className="w-fit rounded-full bg-white p-1 md:p-3">
                        <div className="text-xs text-indigo-500 sm:text-sm md:text-2xl">
                            <BsFileEarmarkMedicalFill />
                        </div>
                    </div>
                    <div className="ml-2 flex flex-col sm:ml-3 md:ml-4">
                        <p className="text-xs font-bold text-white sm:text-sm md:text-lg">
                            Pendaftaran & Antrian
                        </p>
                    </div>
                </div>
                <div className="flex items-center">
                    <div className="w-fit rounded-full bg-white p-1 md:p-3">
                        <div className="text-xs text-indigo-500 sm:text-sm md:text-2xl">
                            <FaPhone />
                        </div>
                    </div>
                    <div className="ml-2 flex flex-col sm:ml-3 md:ml-4">
                        <p className="text-xs font-bold text-white sm:text-sm md:text-lg">
                            Kontak
                        </p>
                    </div>
                </div>
            </div>
        </div>
    );
};
