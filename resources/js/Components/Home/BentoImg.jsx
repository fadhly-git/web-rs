import { motion } from 'framer-motion';
import { twMerge } from 'tailwind-merge';

export const BentoImg = () => {
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
                <ImgBlock />
                <TextBlock />
                <TextBlock />
                <ImgBlock />
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
            className={twMerge(
                'col-span-4 rounded-lg border border-slate-300 bg-slate-200 p-6',
                className,
            )}
            {...rest}
        />
    );
};

const TextBlock = () => (
    <Block className="col-span-12 row-span-2 md:col-span-7">
        <span className="text-md text-zinc-700">Layanan medis</span>
        <h1 className="mb-6 text-xl font-medium leading-tight text-zinc-700">
            Profesionalitas dan religiusitas dalampelayanan kesehatan
        </h1>
        <p className="mb-6 text-base text-zinc-700">
            Assalamu’alaikum, dengan penuh komitmen dan layanan prima, dengan
            dilandasi Amanah, Lengkap, Mutu, Antusias, Universal dan Nyaman,
            kami selalu siap menjaga kesehatan anda. Dengan posisi rumah sakit
            yang strategis, maka kecepatan akses semakin terjangkau.
        </p>
        <button className="transfrom w-fit rounded-lg bg-indigo-500 px-4 py-2 text-white transition-all duration-300 hover:scale-110 hover:bg-indigo-600">
            Baca Selengkapnya
        </button>
    </Block>
);

const ImgBlock = () => (
    <>
        <Block
            whileHover={{
                scale: 1.05,
            }}
            className="col-span-12 row-span-2 h-64 bg-cover bg-center md:col-span-5 md:h-full"
            style={{
                backgroundImage: 'url("/imgs/nature/1.jpg")',
            }}
        ></Block>
    </>
);
