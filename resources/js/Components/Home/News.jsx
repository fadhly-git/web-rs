import { Link, usePage } from '@inertiajs/react';
import axios from 'axios';
import { motion } from 'framer-motion';
import { useEffect, useState } from 'react';
import { FiArrowRight } from 'react-icons/fi';
import { IoCalendarOutline } from 'react-icons/io5';

export const News = () => {
    const { configs } = usePage().props;
    const [posts, setPosts] = useState([]);
    useEffect(() => {
        const fetchData = async () => {
            try {
                const response = await axios.get('/api/news');
                setPosts(response.data);
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        };

        fetchData();
    }, []);
    return (
        <div className="bg-slate-100 px-4 pb-12 pt-1">
            <motion.section
                className="mx-auto mt-12 max-w-6xl"
                initial={{ opacity: 0, y: 50 }}
                animate={{ opacity: 1, y: 0 }}
                transition={{ duration: 0.5 }}
            >
                <div className="text-left">
                    <h1 className="text-lg font-semibold text-zinc-700 md:text-3xl">
                        Berita
                    </h1>
                    <div className="flex justify-between">
                        <div
                            className="custom-prose prose"
                            dangerouslySetInnerHTML={{
                                __html: configs.news,
                            }}
                        />
                        <Link
                            href="/news/berita-terkini"
                            className="inline-flex items-center gap-2 rounded-lg bg-[#07b8b2] px-4 py-2 text-white transition-all duration-300 hover:scale-105 hover:bg-cyan-600"
                        >
                            Lihat Semua Berita <FiArrowRight />
                        </Link>
                    </div>
                </div>
                <div className="mt-6 grid gap-2 sm:grid-cols-2 lg:grid-cols-3">
                    {posts.slice(0, 3).map((items, key) => (
                        <motion.article
                            className="mx-auto mt-4 max-w-md rounded-md border leading-tight shadow-lg duration-300 hover:shadow-sm"
                            key={key}
                            initial={{ opacity: 0, y: 50 }}
                            animate={{ opacity: 1, y: 0 }}
                            transition={{ duration: 0.5, delay: key * 0.2 }}
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
                                        className="custom-prose prose"
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
                <div className="mt-8 text-center"></div>
            </motion.section>
        </div>
    );
};
