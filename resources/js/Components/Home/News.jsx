import { motion } from 'framer-motion';
import { FiArrowRight } from 'react-icons/fi';
import { IoCalendarOutline } from 'react-icons/io5';

const posts = [
    {
        title: 'What is SaaS? Software as a Service Explained',
        desc: 'Going into this journey, I had a standard therapy regimen, based on looking at the research literature. After I saw the movie, I started to ask other people what they did for their anxiety, and some',
        img: 'https://images.unsplash.com/photo-1556155092-490a1ba16284?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        authorLogo: 'https://api.uifaces.co/our-content/donated/xZ4wg2Xj.jpg',
        authorName: 'Sidi dev',
        date: 'Jan 4 2022',
        href: '',
    },
    {
        title: 'A Quick Guide to WordPress Hosting',
        desc: "According to him, â€œI'm still surprised that this has happened. But we are surprised because we are so surprised.â€More revelations about Whittington will be featured in the film",
        img: 'https://images.unsplash.com/photo-1620287341056-49a2f1ab2fdc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        authorLogo: 'https://api.uifaces.co/our-content/donated/FJkauyEa.jpg',
        authorName: 'Micheal',
        date: 'Jan 4 2023',
        href: '',
    },
    {
        title: '7 Promising VS Code Extensions Introduced in 2022',
        desc: "I hope I remembered all the stuff that they needed to know. They're like, 'okay,' and write it in their little reading notebooks. I realized today that I have all this stuff that",
        img: 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        authorLogo: 'https://randomuser.me/api/portraits/men/46.jpg',
        authorName: 'Luis',
        date: 'Jan 4 2022',
        href: '',
    },
    {
        title: 'How to Use Root C++ Interpreter Shell to Write C++ Programs',
        desc: "The powerful gravity waves resulting from the impact of the planets' moons â€” four in total â€” were finally resolved in 2015 when gravitational microlensing was used to observe the",
        img: 'https://images.unsplash.com/photo-1617529497471-9218633199c0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
        authorLogo: 'https://api.uifaces.co/our-content/donated/KtCFjlD4.jpg',
        authorName: 'Lourin',
        date: 'Jan 4 2024',
        href: '',
    },
];

export const News = () => {
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
                        <p className="mt-3 text-sm text-gray-500 md:text-xl">
                            Blogs that are loved by the community. Updated every
                            hour.
                        </p>
                        <a
                            href="#"
                            className="inline-flex items-center gap-2 rounded-lg bg-[#07b8b2] px-4 py-2 text-white transition-all duration-300 hover:scale-105 hover:bg-cyan-600"
                        >
                            Lihat Semua Berita <FiArrowRight />
                        </a>
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
                            <a href={items.href}>
                                <div
                                    className="h-48 w-full rounded-t-md"
                                    style={{
                                        backgroundImage: `url(${items.img})`,
                                        backgroundSize: 'cover',
                                        backgroundPosition: 'center',
                                    }}
                                >
                                    <div className="flex h-full items-end justify-center">
                                        <span className="flex w-fit items-center gap-1 rounded-lg bg-[#07b8b2] px-2 py-1 text-slate-100">
                                            <IoCalendarOutline />
                                            {items.date}
                                        </span>
                                    </div>
                                </div>
                                <div className="mb-3 ml-4 mr-2 pt-3">
                                    <h3 className="text-2xl font-semibold text-gray-900">
                                        {items.title}
                                    </h3>
                                    <p className="mt-1 text-sm md:text-base">
                                        {items.desc}
                                    </p>
                                </div>
                            </a>
                        </motion.article>
                    ))}
                </div>
                <div className="mt-8 text-center"></div>
            </motion.section>
        </div>
    );
};
