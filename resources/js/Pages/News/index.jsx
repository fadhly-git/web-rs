// all news page
import GuestLayout from '@/Layouts/GuestLayout';
import { Head, usePage } from '@inertiajs/react';
import { motion } from 'framer-motion';
import { IoCalendarOutline } from 'react-icons/io5';

export default function Index() {
    const { news } = usePage().props;
    return (
        <>
            <Head title="Berita" />
            <GuestLayout>
                <div className="mb-12 flex w-full justify-center">
                    <div className="w-full max-w-6xl">
                        <div className="mt-6 grid gap-2 sm:grid-cols-2 lg:grid-cols-3">
                            {news.map((items, key) => (
                                <motion.article
                                    className="mx-auto mt-4 max-w-md rounded-md border leading-tight shadow-lg duration-300 hover:shadow-sm"
                                    key={key}
                                    initial={{ opacity: 0, y: 50 }}
                                    animate={{ opacity: 1, y: 0 }}
                                    transition={{
                                        duration: 0.5,
                                        delay: key * 0.2,
                                    }}
                                >
                                    <button
                                        onClick={() => {
                                            window.location.href = `/article/${items.judul_berita}`;
                                        }}
                                    >
                                        <div
                                            className="h-48 w-full rounded-t-md"
                                            style={{
                                                backgroundImage: `url("/storage/${items.gambar}")`,
                                                backgroundSize: 'cover',
                                                backgroundPosition: 'center',
                                            }}
                                        >
                                            <div className="flex h-full items-end justify-center">
                                                <span className="flex w-fit items-center gap-1 rounded-lg bg-[#07b8b2] px-2 py-1 text-slate-100">
                                                    <IoCalendarOutline />
                                                    {
                                                        items.tanggal_publish.split(
                                                            ' ',
                                                        )[0]
                                                    }
                                                </span>
                                            </div>
                                        </div>
                                        <div className="mb-3 ml-4 mr-2 pt-3">
                                            <h3 className="text-center text-xl font-semibold text-gray-900">
                                                {items.judul_berita}
                                            </h3>
                                            <div
                                                className="custom-prose prose text-pretty text-justify"
                                                dangerouslySetInnerHTML={{
                                                    __html:
                                                        items.isi
                                                            .split(' ')
                                                            .slice(0, 20)
                                                            .join(' ') + '...',
                                                }}
                                            />
                                        </div>
                                    </button>
                                </motion.article>
                            ))}
                        </div>
                    </div>
                </div>
            </GuestLayout>
        </>
    );
}
