// About/Sejarah page
import { ImgBanners } from '@/Components/ImgBanners';
import HomeLayout from '@/Layouts/HomeLayout';
import { Head, usePage } from '@inertiajs/react';

export default function Index() {
    const { news } = usePage().props;
    const newsOut = news[0];

    return (
        <>
            {newsOut.slug_berita ? (
                <Head title={`${newsOut.slug_berita}`} />
            ) : null}
            <HomeLayout>
                {newsOut.gambar ? (
                    <ImgBanners img={newsOut.gambar} className="mt-32" />
                ) : null}
                <div className="mb-12 flex w-full items-center">
                    <div className="mx-auto flex w-full max-w-7xl items-center justify-center">
                        <div
                            className="prose mt-10 w-full p-4 text-justify text-gray-900 lg:prose-2xl prose-p:text-lg"
                            dangerouslySetInnerHTML={{ __html: newsOut.isi }}
                        />
                    </div>
                </div>
            </HomeLayout>
        </>
    );
}
