import { motion } from 'framer-motion';
import { BsFileEarmarkMedicalFill } from 'react-icons/bs';
import { FiArrowRight } from 'react-icons/fi';
import { LuRibbon } from 'react-icons/lu';
import { twMerge } from 'tailwind-merge';

export const Bento = () => {
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
                <HeaderBlock />
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
                'col-span-4 rounded-lg border border-slate-300 bg-slate-200 p-6',
                className,
            )}
            {...rest}
        />
    );
};

const HeaderBlock = () => (
    <Block className="col-span-12 row-span-2 md:col-span-4">
        <h1 className="mb-6 text-xl font-medium leading-tight text-zinc-700">
            Selamat Datang di RS PKU
        </h1>
        <p className="mb-6 text-base text-zinc-700">
            Assalamu’alaikum, dengan penuh komitmen dan layanan prima, dengan
            dilandasi Amanah, Lengkap, Mutu, Antusias, Universal dan Nyaman,
            kami selalu siap menjaga kesehatan anda. Dengan posisi rumah sakit
            yang strategis, maka kecepatan akses semakin terjangkau.
        </p>
        <a
            href="#"
            className="flex items-center gap-1 text-red-500 hover:underline"
        >
            Contact us <FiArrowRight />
        </a>
    </Block>
);

const SocialsBlock = () => (
    <>
        <Block
            whileHover={{
                scale: 1.1,
            }}
            className="col-span-12 md:col-span-4"
        >
            <div className="flex flex-col items-center gap-2 md:flex-row md:justify-between">
                <span className="grid h-full place-content-center rounded-full bg-white p-2 text-3xl text-indigo-500 md:mb-0">
                    <LuRibbon />
                </span>
                <div className="text-left md:text-left">
                    <h1 className="text-lg font-bold text-zinc-700">
                        Perawatan nyaman
                    </h1>
                    <p className="text-sm text-zinc-700">
                        Didukung dengan berbagai kelas bangsal inap, akan
                        menjadikan anda nyaman.
                    </p>
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
                <span className="grid h-full place-content-center rounded-full bg-white p-2 text-3xl text-indigo-500 md:mb-0">
                    <BsFileEarmarkMedicalFill />
                </span>
                <div className="text-left md:text-left">
                    <h1 className="text-lg font-bold text-zinc-700">
                        Kualitas tinggi{' '}
                    </h1>
                    <p className="text-sm text-zinc-700">
                        Diagnosa yang cermat dan tetap , akan mempercepat
                        kesembuhan dan kebugaran.
                    </p>
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
                <span className="grid h-full place-content-center rounded-full bg-white p-2 text-3xl text-indigo-500 md:mb-0">
                    <LuRibbon />
                </span>
                <div className="text-left md:text-left">
                    <h1 className="text-lg font-bold text-zinc-700">
                        Perawatan nyaman
                    </h1>
                    <p className="text-sm text-zinc-700">
                        Didukung dengan berbagai kelas bangsal inap, akan
                        menjadikan anda nyaman.
                    </p>
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
                <span className="grid h-full place-content-center rounded-full bg-white p-2 text-3xl text-indigo-500 md:mb-0">
                    <BsFileEarmarkMedicalFill />
                </span>
                <div className="text-left md:text-left">
                    <h1 className="text-lg font-bold text-zinc-700">
                        Kualitas tinggi{' '}
                    </h1>
                    <p className="text-sm text-zinc-700">
                        Diagnosa yang cermat dan tetap , akan mempercepat
                        kesembuhan dan kebugaran.
                    </p>
                </div>
            </div>
        </Block>
    </>
);
