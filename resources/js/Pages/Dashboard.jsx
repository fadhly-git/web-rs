import { SwipeCarousel } from '@/Components/Home/Carousel';
import GuestLayout from '@/Layouts/GuestLayout';
import { Head } from '@inertiajs/react';
import { useEffect, useState } from 'react';

export default function Dashboard() {
    const [currentTime, setCurrentTime] = useState(
        new Date().toLocaleTimeString(),
    );

    useEffect(() => {
        const timer = setInterval(() => {
            setCurrentTime(new Date().toLocaleTimeString());
        }, 1000);

        return () => clearInterval(timer);
    }, []);
    return (
        <>
            <Head title="Beranda" />
            <GuestLayout>
                <div className="mt-32">
                    <SwipeCarousel />
                </div>
                <div className="w-full bg-white">
                    <div className="mx-auto max-w-7xl pr-6 sm:px-6 lg:px-8">
                        <div className="w-scren overflow-hidden">
                            <div className="pt-6 text-gray-900">
                                You're logged in!
                            </div>
                        </div>
                    </div>
                </div>
            </GuestLayout>
            <footer className="py-16 text-center text-sm text-black dark:text-black">
                Jam : {currentTime}
            </footer>
        </>
    );
}
