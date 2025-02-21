import { Bento } from '@/Components/Bento';
import { Breadcrumbs } from '@/Components/Breadcrumbs';
import { BentoImg } from '@/Components/Home/BentoImg';
import { SwipeCarousel } from '@/Components/Home/Carousel';
import { Footer } from '@/Components/Home/Footer';
import { ImgBlock } from '@/Components/Home/ImgPdftrn';
import { News } from '@/Components/Home/News';
import { motion } from 'framer-motion';
import { FaUser } from 'react-icons/fa';
import { useInView } from 'react-intersection-observer';

const Example = () => {
    const { ref: sectionRef, inView: sectionInView } = useInView({
        triggerOnce: true,
        threshold: 0.1,
    });

    return (
        <>
            <div className="container mx-auto">
                <Breadcrumbs />
            </div>
            <SwipeCarousel />
            <Bento />
            <motion.section
                ref={sectionRef}
                initial={{ opacity: 0, y: 50 }}
                animate={sectionInView ? { opacity: 1, y: 0 } : {}}
                transition={{ duration: 0.5 }}
                className="w-full justify-center bg-white p-10 text-zinc-700"
            >
                <h3 className="text-center text-3xl font-semibold uppercase md:text-4xl">
                    Sambutan Direktur
                </h3>
                <div className="mx-auto w-full max-w-6xl justify-center">
                    <div className="grid grid-cols-1 items-center md:grid-cols-3">
                        <div className="md:col-span-2">
                            <p className="mb-4 block text-base md:text-lg">
                                Assalamu’alaikum Wr. Wb.
                            </p>
                            <p className="my-4 text-base md:my-6 md:text-lg">
                                Puji Syukur kita panjatkan ke hadirat Allah SWT,
                                atas rahmat dan karunia-Nya, sholawat dan salam
                                senantiasa tercurah kepada Rasulullah SAW. Saya
                                sebagai Direktur RS Islam Kendal mengharapkan
                                Website ini dapat menjadi jembatan penghubung
                                antar stakeholder. Dan dapat memberikan
                                informasi yang diperlukan oleh masyarakat.
                            </p>
                            <p className="mb-4 block text-base md:text-lg">
                                Terima Kasih
                            </p>
                        </div>
                        <div className="h-lg grid grid-cols-4 grid-rows-4 gap-1 md:col-span-1">
                            <div className="col-span-2 col-start-2 row-span-2 row-start-2 flex cursor-pointer justify-center rounded-lg bg-indigo-500/10 transition-all duration-300 hover:scale-105 hover:bg-indigo-500/20">
                                <FaUser
                                    className="text-indigo-500 transition-transform duration-300 hover:rotate-12"
                                    style={{
                                        width: '100%',
                                        height: '100%',
                                        padding: '20%',
                                    }}
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </motion.section>
            <BentoImg />
            <ImgBlock />
            <News />
            <Footer />
        </>
    );
};

export default Example;
