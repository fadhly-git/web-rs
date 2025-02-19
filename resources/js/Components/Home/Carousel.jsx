import { motion, useMotionValue } from 'framer-motion';
import { useEffect, useState } from 'react';

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
        <div className="relative overflow-hidden bg-white py-8">
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
                    translateX: `-${imgIndex * 100}%`,
                }}
                transition={SPRING_OPTIONS}
                onDragEnd={onDragEnd}
                className="flex cursor-grab items-center active:cursor-grabbing"
            >
                <Images imgIndex={imgIndex} />
            </motion.div>

            <Dots imgIndex={imgIndex} setImgIndex={setImgIndex} />
            <GradientEdges />
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
                        className="aspect-video w-screen shrink-0 rounded-xl object-cover"
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
            <div className="absolute inset-0 flex items-center justify-between p-4">
                {/* Previous Button */}
                <button
                    onClick={handlePrevious}
                    className="rounded-full bg-black p-2 text-white transition-all hover:bg-black/40"
                    aria-label="Previous image"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        strokeWidth={2}
                        stroke="currentColor"
                        className="h-6 w-6"
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
                    className="rounded-full bg-black p-2 text-white transition-all hover:bg-black/40"
                    aria-label="Next image"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        strokeWidth={2}
                        stroke="currentColor"
                        className="h-6 w-6"
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

const GradientEdges = () => {
    return (
        <>
            <div className="pointer-events-none absolute bottom-0 left-0 top-0 w-[10vw] max-w-[100px]" />
            <div className="pointer-events-none absolute bottom-0 right-0 top-0 w-[10vw] max-w-[100px]" />
        </>
    );
};
