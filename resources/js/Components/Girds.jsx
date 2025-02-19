import { motion } from 'framer-motion';
import { HiOutlineChatAlt2 } from 'react-icons/hi';
import { PiStethoscopeBold } from 'react-icons/pi';
import { SiTiktok, SiTwitch } from 'react-icons/si';
import { twMerge } from 'tailwind-merge';

export const RevealBento = () => {
    return (
        <div className="z-20 min-h-screen px-4 text-zinc-50">
            <motion.div
                initial="initial"
                animate="animate"
                transition={{
                    staggerChildren: 0.05,
                }}
                className="mx-auto grid max-w-4xl grid-flow-dense grid-cols-12"
            >
                <SocialsBlock />
            </motion.div>
            <Footer />
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
                rotate: '2.5deg',
                scale: 1.1,
            }}
            className="col-span-6 bg-[#07b8b2] md:col-span-3"
        >
            <a
                href="#"
                className="grid h-full place-content-center text-3xl text-white"
            >
                <PiStethoscopeBold />
            </a>
        </Block>
        <Block
            whileHover={{
                rotate: '-2.5deg',
                scale: 1.1,
            }}
            className="col-span-6 bg-[#07b8b2] md:col-span-3"
        >
            <a
                href="#"
                className="grid h-full place-content-center text-3xl text-white"
            >
                <HiOutlineChatAlt2 />
            </a>
        </Block>
        <Block
            whileHover={{
                rotate: '-2.5deg',
                scale: 1.1,
            }}
            className="col-span-6 bg-[#07b8b2] md:col-span-3"
        >
            <a
                href="#"
                className="grid h-full place-content-center text-3xl text-black"
            >
                <SiTiktok />
            </a>
        </Block>
        <Block
            whileHover={{
                rotate: '-2.5deg',
                scale: 1.1,
            }}
            className="col-span-6 bg-[#07b8b2] md:col-span-3"
        >
            <a
                href="#"
                className="grid h-full place-content-center text-3xl text-black"
            >
                <SiTwitch />
            </a>
        </Block>
    </>
);

const Footer = () => {
    return (
        <footer className="mt-12">
            <p className="text-center text-zinc-400">
                Made with ❤️ by{' '}
                <a href="#" className="text-red-300 hover:underline">
                    @tomisloading
                </a>
            </p>
        </footer>
    );
};
