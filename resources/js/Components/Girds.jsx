import { motion } from 'framer-motion';
import { FaUserDoctor } from 'react-icons/fa6';
import { GiAmbulance } from 'react-icons/gi';
import { HiOutlineChatAlt2 } from 'react-icons/hi';
import { PiStethoscopeBold } from 'react-icons/pi';
import { twMerge } from 'tailwind-merge';

export const RevealBento = () => {
    return (
        <div className="grid place-content-center px-4 pl-4 text-zinc-50">
            <motion.div
                initial="initial"
                animate="animate"
                transition={{
                    staggerChildren: 0.05,
                }}
                className="mx-auto grid max-w-4xl grid-cols-12"
            >
                <SocialsBlock />
            </motion.div>
        </div>
    );
};

const Block = ({ className, ...rest }) => {
    return (
        <motion.div
            variants={{
                initial: {
                    scale: 0.5,
                    y: 50,
                    opacity: 0,
                },
                animate: {
                    scale: 1,
                    y: 0,
                    opacity: 1,
                },
            }}
            transition={{
                type: 'spring',
                mass: 3,
                stiffness: 400,
                damping: 50,
            }}
            className={twMerge(
                'col-span-4 rounded-lg border border-zinc-700 bg-zinc-800 p-6',
                className,
            )}
            {...rest}
        />
    );
};

const SocialsBlock = () => (
    <>
        <Block
            whileHover={{
                rotate: '-2.5deg',
                scale: 1.1,
            }}
            className="text-md col-span-6 bg-[#07b8b2] md:col-span-3 md:text-base lg:text-3xl"
        >
            <a
                href="#"
                className="grid h-full place-content-center text-xl text-white"
            >
                <HiOutlineChatAlt2 />
            </a>
            <p className="text-justify"></p>
        </Block>
        <Block
            whileHover={{
                rotate: '-2.5deg',
                scale: 1.1,
            }}
            className="col-span-6 bg-[#07b8b2] text-sm md:col-span-3 md:text-base lg:text-3xl"
        >
            <div className="flex h-full flex-col items-center justify-center">
                <a href="#" className="grid place-content-center text-white">
                    <FaUserDoctor />
                </a>
                <span className="font-bold">Dokter</span>
            </div>
        </Block>
        <Block
            whileHover={{
                rotate: '2.5deg',
                scale: 1.1,
            }}
            className="col-span-6 bg-[#07b8b2] md:col-span-3"
        >
            <div className="flex h-full flex-col items-center justify-center text-base md:text-xl lg:text-3xl">
                <a
                    href="#"
                    className="text-md grid place-content-center text-white md:text-xl lg:text-3xl"
                >
                    <PiStethoscopeBold />
                </a>
                <span className="text-sm font-bold md:text-base lg:text-base">
                    Buka 24 Jam
                </span>
            </div>
        </Block>
        <Block
            whileHover={{
                rotate: '-2.5deg',
                scale: 1.1,
            }}
            className="col-span-6 bg-[#07b8b2] md:col-span-3"
        >
            <div className="flex h-full flex-col items-center justify-center text-base md:text-xl lg:text-3xl">
                <a href="#" className="grid place-content-center text-white">
                    <GiAmbulance />
                </a>
                <p className="text-sm font-bold md:text-base lg:text-base">
                    IGD
                </p>
            </div>
        </Block>
    </>
);
