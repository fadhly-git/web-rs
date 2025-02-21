import { motion } from 'framer-motion';
import { useEffect, useState } from 'react';

export const Cards = () => {
    const posts = [
        {
            title: 'What is SaaS? Software as a Service Explained',
            desc: 'Going into this journey, I had a standard therapy regimen, based on looking at the research literature. After I saw the movie, I started to ask other people what they did for their anxiety, and some',
            img: 'https://images.unsplash.com/photo-1556155092-490a1ba16284?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            authorLogo:
                'https://api.uifaces.co/our-content/donated/xZ4wg2Xj.jpg',
            authorName: 'Sidi dev',
            date: 'Jan 4 2022',
            href: 'javascript:void(0)',
        },
        {
            title: 'A Quick Guide to WordPress Hosting',
            desc: "According to him, â€œI'm still surprised that this has happened. But we are surprised because we are so surprised.â€More revelations about Whittington will be featured in the film",
            img: 'https://images.unsplash.com/photo-1620287341056-49a2f1ab2fdc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            authorLogo:
                'https://api.uifaces.co/our-content/donated/FJkauyEa.jpg',
            authorName: 'Micheal',
            date: 'Jan 4 2022',
            href: 'javascript:void(0)',
        },
        {
            title: '7 Promising VS Code Extensions Introduced in 2022',
            desc: "I hope I remembered all the stuff that they needed to know. They're like, 'okay,' and write it in their little reading notebooks. I realized today that I have all this stuff that",
            img: 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            authorLogo: 'https://randomuser.me/api/portraits/men/46.jpg',
            authorName: 'Luis',
            date: 'Jan 4 2022',
            href: 'javascript:void(0)',
        },
        {
            title: 'How to Use Root C++ Interpreter Shell to Write C++ Programs',
            desc: "The powerful gravity waves resulting from the impact of the planets' moons â€” four in total â€” were finally resolved in 2015 when gravitational microlensing was used to observe the",
            img: 'https://images.unsplash.com/photo-1617529497471-9218633199c0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            authorLogo:
                'https://api.uifaces.co/our-content/donated/KtCFjlD4.jpg',
            authorName: 'Lourin',
            date: 'Jan 4 2022',
            href: 'javascript:void(0)',
        },
        {
            title: 'Another Post Title',
            desc: 'This is a description for another post. It provides more content for the slider.',
            img: 'https://images.unsplash.com/photo-1506765515384-028b60a970df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            authorLogo: 'https://randomuser.me/api/portraits/women/50.jpg',
            authorName: 'Alice',
            date: 'Jan 5 2022',
            href: 'javascript:void(0)',
        },
        {
            title: 'Yet Another Post',
            desc: 'This is a description for yet another post. It provides more content for the slider.',
            img: 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80',
            authorLogo: 'https://randomuser.me/api/portraits/men/51.jpg',
            authorName: 'John',
            date: 'Jan 6 2022',
            href: 'javascript:void(0)',
        },
    ];

    const [currentIndex, setCurrentIndex] = useState(0);
    const [direction, setDirection] = useState(1); // 1 for forward, -1 for backward

    useEffect(() => {
        const interval = setInterval(() => {
            setCurrentIndex((prevIndex) => {
                if (
                    prevIndex + direction >= posts.length ||
                    prevIndex + direction < 0
                ) {
                    setDirection(-direction);
                    return prevIndex + direction;
                }
                return prevIndex + direction;
            });
        }, 3000);
        return () => clearInterval(interval);
    }, [posts.length, direction]);

    const renderedPosts = [...posts, ...posts.slice(0, 3)];

    return (
        <section className="mx-auto mt-12 max-w-screen-xl overflow-hidden px-4 md:px-8">
            <div className="text-center">
                <h1 className="text-3xl font-semibold text-gray-800">Blog</h1>
                <p className="mt-3 text-gray-500">
                    Blogs that are loved by the community. Updated every hour.
                </p>
            </div>
            <motion.div
                className="mt-12 flex"
                initial={{ x: 0 }}
                animate={{ x: `-${(currentIndex * 100) / 4}%` }}
                transition={{ ease: 'linear', duration: 1 }}
                style={{ width: `${(renderedPosts.length * 100) / 5}%` }}
            >
                {renderedPosts.map((item, index) => (
                    <article
                        className="min-w-[25%] flex-shrink-0 border transition-transform duration-500 ease-in-out"
                        key={index}
                    >
                        <div className="mx-auto mt-4 max-w-md rounded-md border shadow-lg duration-300 hover:shadow-sm">
                            <a href={item.href}>
                                <img
                                    src={item.img}
                                    loading="lazy"
                                    alt={item.title}
                                    className="h-48 w-full rounded-t-md object-cover"
                                />
                                <div className="ml-4 mr-2 mt-2 flex items-center pt-3">
                                    <div className="h-10 w-10 flex-none rounded-full">
                                        <img
                                            src={item.authorLogo}
                                            className="h-full w-full rounded-full object-cover"
                                            alt={item.authorName}
                                        />
                                    </div>
                                    <div className="ml-3">
                                        <span className="block text-gray-900">
                                            {item.authorName}
                                        </span>
                                        <span className="block text-sm text-gray-400">
                                            {item.date}
                                        </span>
                                    </div>
                                </div>
                                <div className="mb-3 ml-4 mr-2 pt-3">
                                    <h3 className="text-xl text-gray-900">
                                        {item.title}
                                    </h3>
                                    <p className="mt-1 text-sm text-gray-400">
                                        {item.desc}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </article>
                ))}
            </motion.div>
        </section>
    );
};
