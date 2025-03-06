import { usePage } from '@inertiajs/react';
import { motion } from 'framer-motion';
import { twMerge } from 'tailwind-merge';

export const Bento = () => {
    const { configs } = usePage().props;
    return (
        <div className="bg-slate-100 px-4 py-12">
            <motion.div
                initial="initial"
                animate="animate"
                transition={{
                    staggerChildren: 0.05,
                }}
                className="mx-auto grid max-w-6xl grid-flow-dense grid-cols-12 gap-4"
            >
                <HeaderBlock text={configs.sambutan} />
                <SocialsBlock
                    pesan1={configs.pesan_1}
                    icon1={configs.icon_1}
                    pesan2={configs.pesan_2}
                    icon2={configs.icon_2}
                    pesan3={configs.pesan_3}
                    icon3={configs.icon_3}
                    pesan4={configs.pesan_4}
                    icon4={configs.icon_4}
                />
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
                'col-span-4 rounded-lg border border-slate-300 bg-slate-200 p-6',
                className,
            )}
            {...rest}
        />
    );
};

const HeaderBlock = ({ text }) => (
    <Block className="col-span-12 row-span-2 text-zinc-800 md:col-span-4">
        <div
            className="custom-prose prose sm:text-lg"
            dangerouslySetInnerHTML={{ __html: text }}
        />
    </Block>
);

const SocialsBlock = ({
    pesan1,
    icon1,
    pesan2,
    icon2,
    pesan3,
    icon3,
    pesan4,
    icon4,
}) => (
    <>
        <Block
            whileHover={{
                scale: 1.1,
            }}
            className="col-span-12 md:col-span-4"
        >
            <div className="flex flex-col items-center gap-2 md:flex-row md:justify-between">
                <span className="grid h-full place-content-center rounded-full bg-white p-2 text-3xl text-[#07b8b2] md:mb-0">
                    <div
                        className="custom-prose prose"
                        dangerouslySetInnerHTML={{ __html: icon1 }}
                    />
                </span>
                <div className="text-left md:text-left">
                    <div
                        className="custom-prose prose sm:text-lg"
                        dangerouslySetInnerHTML={{ __html: pesan1 }}
                    />
                </div>
            </div>
        </Block>
        <Block
            whileHover={{
                scale: 1.1,
            }}
            className="col-span-12 md:col-span-4"
        >
            <div className="flex flex-col items-center gap-2 md:flex-row md:justify-between">
                <span className="grid h-full place-content-center rounded-full bg-white p-2 text-3xl text-[#07b8b2] md:mb-0">
                    <div
                        className="custom-prose prose"
                        dangerouslySetInnerHTML={{ __html: icon2 }}
                    />
                </span>
                <div className="text-left md:text-left">
                    <div
                        className="custom-prose prose sm:text-lg"
                        dangerouslySetInnerHTML={{ __html: pesan2 }}
                    />
                </div>
            </div>
        </Block>
        <Block
            whileHover={{
                scale: 1.1,
            }}
            className="col-span-12 md:col-span-4"
        >
            <div className="flex flex-col items-center gap-2 md:flex-row md:justify-between">
                <span className="grid h-full place-content-center rounded-full bg-white p-2 text-3xl text-[#07b8b2] md:mb-0">
                    <div
                        className="custom-prose prose"
                        dangerouslySetInnerHTML={{ __html: icon3 }}
                    />
                </span>
                <div className="text-left md:text-left">
                    <div
                        className="custom-prose prose sm:text-lg"
                        dangerouslySetInnerHTML={{ __html: pesan3 }}
                    />
                </div>
            </div>
        </Block>
        <Block
            whileHover={{
                scale: 1.1,
            }}
            className="col-span-12 md:col-span-4"
        >
            <div className="flex flex-col items-center gap-2 md:flex-row md:justify-between">
                <span className="grid h-full place-content-center rounded-full bg-white p-2 text-3xl text-[#07b8b2] md:mb-0">
                    <div
                        className="custom-prose prose"
                        dangerouslySetInnerHTML={{ __html: icon4 }}
                    />
                </span>
                <div className="text-left sm:text-lg md:text-left">
                    <div
                        className="custom-prose prose"
                        dangerouslySetInnerHTML={{ __html: pesan4 }}
                    />
                </div>
            </div>
        </Block>
    </>
);
