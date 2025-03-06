import { usePage } from '@inertiajs/react';
import { motion } from 'framer-motion';
import { twMerge } from 'tailwind-merge';

export const BentoImg = () => {
    const { configs } = usePage().props;
    return (
        <div className="bg-slate-100 px-4 py-12 text-zinc-50">
            <motion.div
                initial="initial"
                animate="animate"
                transition={{
                    staggerChildren: 0.05,
                }}
                className="mx-auto grid max-w-6xl grid-flow-dense grid-cols-12 gap-4"
            >
                <ImgBlock img={configs.gambar_layanan_medis} />
                <TextBlock
                    text={configs.layanan_medis}
                    link={configs.link_medis}
                />
                <TextBlock
                    text={configs.layanan_penunjang}
                    link={configs.link_penunjang}
                />
                <ImgBlock img={configs.gambar_layanan_penunjang} />
            </motion.div>
        </div>
    );
};

export const Block = ({ className, ...rest }) => {
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
            className={twMerge('col-span-4 rounded-lg p-6', className)}
            {...rest}
        />
    );
};

const TextBlock = ({ text, link }) => (
    <Block className="col-span-12 row-span-2 border border-slate-300 bg-slate-200 md:col-span-7">
        <div
            className="custom-prose prose lg:text-lg"
            dangerouslySetInnerHTML={{ __html: text }}
        />
        {link && (
            <button
                onClick={() => {
                    window.open(link, '_blank', 'noopener,noreferrer');
                }}
                className="transfrom mt-2 w-fit rounded-lg bg-[#07b8b2] px-4 py-2 text-white transition-all duration-300 hover:scale-110 hover:bg-cyan-600"
            >
                Baca Selengkapnya
            </button>
        )}
    </Block>
);

const ImgBlock = ({ img }) => (
    <>
        <Block
            whileHover={{
                scale: 1.05,
            }}
            className="col-span-12 row-span-2 h-64 bg-cover bg-center md:col-span-5 md:h-full"
            style={{
                backgroundImage: `url("/storage/${img}")`,
            }}
        ></Block>
    </>
);
