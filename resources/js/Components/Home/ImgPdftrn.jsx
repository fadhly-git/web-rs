import { motion } from 'framer-motion';
import { Block } from './BentoImg';

export const ImgBlock = () => {
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
                        backgroundImage: 'url("/imgs/nature/1.jpg")',
                    }}
                >
                    <div className="flex h-full flex-col items-center justify-center rounded-lg bg-black/30">
                        <h1 className="text-center text-lg font-bold md:text-3xl">
                            Temukan Perawatan Terbaik untuk Kesehatan Anda
                        </h1>
                        <div className="max-w-xl">
                            <p className="text-center text-sm md:text-center md:text-xl">
                                Di Rumah Sakit Kami, kami memahami bahwa setiap
                                pasien memiliki kebutuhan yang unik. Dengan
                                beragam layanan unggulan kami, kami berkomitmen
                                untuk memberikan perawatan berkualitas tinggi
                                yang disesuaikan dengan kebutuhan Anda.
                            </p>
                        </div>
                        <button className="transfrom mt-5 w-fit rounded-lg bg-[#07b8b2] px-4 py-2 text-xs text-white transition-all duration-300 hover:scale-110 hover:bg-cyan-600 hover:font-extrabold md:mt-12 md:text-xl">
                            Buat Janji Temu
                        </button>
                    </div>
                </Block>
            </motion.div>
        </div>
    );
};
