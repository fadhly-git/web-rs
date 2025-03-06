import { usePage } from '@inertiajs/react';
import { motion } from 'framer-motion';
import { Block } from './BentoImg';

export const ImgBlock = () => {
    const { configs } = usePage().props;
    const img = configs.gambar;
    const text = configs.iklan;
    let link = null;
    if (configs.link_janji_temu) {
        link = configs.link_janji_temu;
    }
    return (
        <div className="leanding-tight min-h-full bg-white px-4 py-12 text-zinc-100">
            <motion.div
                initial="initial"
                animate="animate"
                transition={{
                    staggerChildren: 0.05,
                }}
                className="mx-auto grid max-w-6xl grid-flow-dense grid-cols-12"
            >
                <Block
                    whileHover={{
                        scale: 1.05,
                    }}
                    className="col-span-12 row-span-2 h-64 items-center justify-center bg-cover bg-center md:col-span-12 md:h-[30vw] md:w-full"
                    style={{
                        with: '100%',
                        backgroundImage: `url("/storage/${img}")`,
                    }}
                >
                    <div className="flex h-full flex-col items-center justify-center rounded-lg bg-white/30">
                        <div
                            className="prose w-full text-center text-sm font-semibold lg:text-lg"
                            dangerouslySetInnerHTML={{ __html: text }}
                        />
                        {link && (
                            <button
                                onClick={() => {
                                    window.open(
                                        link,
                                        '_blank',
                                        'noopener,noreferrer',
                                    );
                                }}
                                className="transfrom mt-5 w-fit rounded-lg bg-[#07b8b2] px-4 py-2 text-xs text-white transition-all duration-300 hover:scale-110 hover:bg-cyan-600 hover:font-extrabold md:mt-12 md:text-xl"
                            >
                                Buat Janji Temu
                            </button>
                        )}
                    </div>
                </Block>
            </motion.div>
        </div>
    );
};
