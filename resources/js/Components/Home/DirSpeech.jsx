import { usePage } from '@inertiajs/react';
import { motion } from 'framer-motion';

export const DirSpeech = () => {
    const { configs } = usePage().props;
    return (
        <motion.section className="w-full justify-center bg-white p-10 text-zinc-700 lg:text-lg">
            <h3 className="text-center text-2xl font-semibold md:text-4xl">
                {configs.heading_sambutan_2}
            </h3>
            <div className="mx-auto w-full max-w-6xl justify-center">
                <div className="grid grid-cols-1 items-center md:grid-cols-3">
                    <div className="md:col-span-2">
                        <div
                            className="prose lg:text-lg"
                            dangerouslySetInnerHTML={{
                                __html: configs.sambutan_2,
                            }}
                        />
                    </div>
                    {configs.gambar_dir && (
                        <div className="h-lg grid grid-cols-4 grid-rows-4 gap-1 md:col-span-1">
                            <div className="col-span-2 col-start-2 row-span-2 row-start-2 flex cursor-pointer justify-center rounded-lg bg-indigo-500/10 transition-all duration-300 hover:scale-105 hover:bg-indigo-500/20">
                                <img
                                    src={`/storage/${configs.gambar_dir}`}
                                    alt="logo"
                                />
                            </div>
                        </div>
                    )}
                </div>
            </div>
        </motion.section>
    );
};

export default DirSpeech;
