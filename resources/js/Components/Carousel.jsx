import { Link, usePage } from '@inertiajs/react';
import { motion, useMotionValue } from 'framer-motion';
import { useEffect, useState } from 'react';
import { BsFileEarmarkMedicalFill } from 'react-icons/bs';
import { FaPhone, FaUserDoctor } from 'react-icons/fa6';

const ONE_SECOND = 1000;
const AUTO_DELAY = ONE_SECOND * 10;
const DRAG_BUFFER = 50;

const SPRING_OPTIONS = {
    type: 'spring',
    mass: 3,
    stiffness: 400,
    damping: 50,
};

export const SwipeCarousel = ({ images }) => {
    const [imgIndex, setImgIndex] = useState(0);

    const dragX = useMotionValue(0);

    useEffect(() => {
        const intervalRef = setInterval(() => {
            const x = dragX.get();

            if (x === 0) {
                setImgIndex((pv) => {
                    if (pv === images.length - 1) {
                        return 0;
                    }
                    return pv + 1;
                });
            }
        }, AUTO_DELAY);

        return () => clearInterval(intervalRef);
    }, [images.length]);

    const onDragEnd = () => {
        const x = dragX.get();

        if (x <= -DRAG_BUFFER && imgIndex < images.length - 1) {
            setImgIndex((pv) => pv + 1);
        } else if (x >= DRAG_BUFFER && imgIndex > 0) {
            setImgIndex((pv) => pv - 1);
        }
    };

    return (
        <div className="relative mt-32 w-screen overflow-hidden pb-2">
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
                    translateX: `-${imgIndex * (window.innerWidth > 768 ? 100 : 100)}%`,
                }}
                transition={SPRING_OPTIONS}
                onDragEnd={onDragEnd}
                className="flex cursor-grab items-center active:cursor-grabbing"
            >
                <Images imgIndex={imgIndex} images={images} />
            </motion.div>
            <ResponsiveComponent />
        </div>
    );
};

const Images = ({ imgIndex, images }) => {
    const [height, setHeight] = useState('');

    useEffect(() => {
        const isMobile = window.innerWidth <= 768;
        if (isMobile) {
            setHeight('16rem');
        } else {
            setHeight('35vw');
        }
    }, []);

    return (
        <>
            {images.map((imgSrc, idx) => {
                return (
                    <motion.div
                        key={idx}
                        style={{
                            backgroundImage: `url(/storage/${imgSrc})`,
                            backgroundSize: 'cover',
                            backgroundPosition: 'center',
                            height: `${height}`,
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

const ResponsiveComponent = () => {
    const { props } = usePage();
    const { configs } = props;
    const main_link1 = configs.main_link1;
    const main_link2 = configs.main_link2;
    const main_link3 = configs.main_link3;
    return (
        <div className="pointer-events-auto absolute inset-0 z-40 flex items-end justify-center">
            <div className="flex w-fit max-w-xl items-center justify-evenly gap-1 rounded-lg bg-[#07b8b2] p-2 sm:flex-col md:flex-row md:gap-2 md:p-4 lg:gap-4">
                <Link
                    href={main_link1}
                    className="transfrom flex items-center rounded-sm text-cyan-500 transition-all hover:scale-110 hover:text-indigo-700 sm:mb-0"
                >
                    <div className="w-fit rounded-full bg-white p-1 md:p-3">
                        <div className="text-xs sm:text-sm md:text-2xl">
                            <FaUserDoctor />
                        </div>
                    </div>
                    <div className="ml-1 flex flex-col sm:ml-1 md:ml-2">
                        <p className="text-xs font-bold text-white sm:text-sm md:text-lg">
                            Dokter
                        </p>
                    </div>
                </Link>
                <button
                    onClick={() => {
                        window.open(
                            main_link2,
                            '_blank',
                            'noopener,noreferrer',
                        );
                    }}
                    className="transfrom flex items-center rounded-sm text-cyan-500 transition-all hover:scale-110 hover:text-indigo-700 sm:mb-0"
                >
                    <div className="w-fit rounded-full bg-white p-1 md:p-3">
                        <div className="text-xs sm:text-sm md:text-2xl">
                            <BsFileEarmarkMedicalFill />
                        </div>
                    </div>
                    <div className="ml-1 flex flex-col sm:ml-1 md:ml-2">
                        <p className="text-xs font-bold text-white sm:text-sm md:text-lg">
                            Pendaftaran & Antrian
                        </p>
                    </div>
                </button>
                <Link
                    href={main_link3}
                    className="transfrom flex items-center rounded-sm text-cyan-500 transition-all hover:scale-110 hover:text-indigo-700 sm:mb-0"
                >
                    <div className="w-fit rounded-full bg-white p-1 md:p-3">
                        <div className="text-xs sm:text-sm md:text-2xl">
                            <FaPhone />
                        </div>
                    </div>
                    <div className="ml-1 flex flex-col sm:ml-1 md:ml-2">
                        <p className="text-xs font-bold text-white sm:text-sm md:text-lg">
                            Kontak
                        </p>
                    </div>
                </Link>
            </div>
        </div>
    );
};
