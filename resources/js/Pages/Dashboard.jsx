// Dashboard page
import { Bento } from '@/Components/Bento';
import { SwipeCarousel } from '@/Components/Carousel';
import { BentoImg } from '@/Components/Home/BentoImg';
import { DirSpeech } from '@/Components/Home/DirSpeech';
import { ImgBlock } from '@/Components/Home/ImgPdftrn';
import { News } from '@/Components/Home/News';
import HomeLayout from '@/Layouts/HomeLayout';
import { Head, usePage } from '@inertiajs/react';
import { motion } from 'framer-motion';
import { useInView } from 'react-intersection-observer';

export default function Dashboard() {
    const { banners } = usePage().props;

    const gambar = banners.map((banner) => {
        return banner.gambar;
    });
    const { ref: sectionRef1, inView: sectionInView1 } = useInView({
        triggerOnce: true,
        threshold: 0.1,
    });
    const { ref: sectionRef2, inView: sectionInView2 } = useInView({
        triggerOnce: true,
        threshold: 0.1,
    });
    const { ref: sectionRef3, inView: sectionInView3 } = useInView({
        triggerOnce: true,
        threshold: 0.1,
    });
    const { ref: sectionRef4, inView: sectionInView4 } = useInView({
        triggerOnce: true,
        threshold: 0.1,
    });
    const { ref: sectionRef5, inView: sectionInView5 } = useInView({
        triggerOnce: true,
        threshold: 0.1,
    });
    const { ref: sectionRef6, inView: sectionInView6 } = useInView({
        triggerOnce: true,
        threshold: 0.1,
    });
    return (
        <>
            <Head>
                <title>Beranda</title>
                <meta name="description" content="home" />
            </Head>
            <HomeLayout>
                <motion.div
                    ref={sectionRef1}
                    initial="hidden"
                    animate={sectionInView1 ? 'visible' : 'hidden'}
                    variants={sectionVariants}
                    transition={{ duration: 0.5 }}
                >
                    <SwipeCarousel images={gambar} />
                </motion.div>
                <motion.div
                    className="w-full"
                    ref={sectionRef2}
                    initial="hidden"
                    animate={sectionInView2 ? 'visible' : 'hidden'}
                    variants={sectionVariants}
                    transition={{ duration: 0.5 }}
                >
                    <Bento />
                </motion.div>
                <motion.div
                    ref={sectionRef3}
                    initial="hidden"
                    animate={sectionInView3 ? 'visible' : 'hidden'}
                    variants={sectionVariants}
                    transition={{ duration: 0.5 }}
                >
                    <DirSpeech />
                </motion.div>
                <motion.div
                    className="w-full"
                    ref={sectionRef4}
                    initial="hidden"
                    animate={sectionInView4 ? 'visible' : 'hidden'}
                    variants={sectionVariants}
                    transition={{ duration: 0.5 }}
                >
                    <BentoImg />
                </motion.div>
                <motion.div
                    className="w-full"
                    ref={sectionRef5}
                    initial="hidden"
                    animate={sectionInView5 ? 'visible' : 'hidden'}
                    variants={sectionVariants}
                    transition={{ duration: 0.5 }}
                >
                    <ImgBlock />
                </motion.div>
                <motion.div
                    ref={sectionRef6}
                    initial="hidden"
                    animate={sectionInView6 ? 'visible' : 'hidden'}
                    variants={sectionVariants}
                    transition={{ duration: 0.5 }}
                    className="w-full"
                >
                    <News />
                </motion.div>
            </HomeLayout>
        </>
    );
}

const sectionVariants = {
    hidden: { opacity: 0, y: 20 },
    visible: { opacity: 1, y: 0 },
};
