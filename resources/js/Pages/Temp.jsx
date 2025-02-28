// Temp page
import { SwipeCarousel } from '@/Components/Carousel';
import { Head, usePage } from '@inertiajs/react';

export default function Temp() {
    const { banners } = usePage().props;

    console.log(banners);

    const gambar = banners.map((banner) => {
        return banner.gambar;
    });

    return (
        <>
            <Head title="Informasi Umum" />
            <SwipeCarousel images={gambar} />

            {/* <GuestLayout>
                <div className="flex w-full">{JSON.stringify(gambar)}</div>
            </GuestLayout> */}
        </>
    );
}
