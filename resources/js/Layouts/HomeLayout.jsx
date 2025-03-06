import ApplicationLogo from '@/Components/ApplicationLogo';
import { Footer } from '@/Components/Footer';
import Navbar from '@/Components/Navigation/Navbar';
import { Link, usePage } from '@inertiajs/react';
import { LuClock7 } from 'react-icons/lu';
import {
    MdOutlineLocationOn,
    MdOutlineMailOutline,
    MdOutlinePhone,
} from 'react-icons/md';

export default function HomeLayout({ children }) {
    const { configs } = usePage().props;
    return (
        <>
            <div className="flex w-screen flex-col items-center justify-between">
                <nav className="fixed left-0 right-0 top-0 z-50 border-b border-gray-100 bg-white">
                    <div className="bg-[#07b8b2]">
                        <div className="mx-auto flex h-10 w-full max-w-6xl justify-center gap-2 p-1 text-[12px] text-white sm:justify-between sm:gap-3 sm:text-base lg:text-xl">
                            <button
                                onClick={() =>
                                    window.open(
                                        'https://maps.app.goo.gl/1DziDbC6jaBvo4XU9',
                                    )
                                }
                                className="flex items-center justify-center"
                            >
                                <MdOutlineLocationOn />
                                <span className="ml-2 hidden sm:inline">
                                    {configs.address}
                                </span>
                            </button>
                            <div className="flex w-full sm:w-fit">
                                <div className="flex h-8 items-center gap-1 sm:mr-4">
                                    <MdOutlinePhone />
                                    <span className="mx-1">
                                        {configs.phone}
                                    </span>
                                </div>
                                <div className="flex h-8 items-center sm:mr-4">
                                    <LuClock7 />
                                    <span className="mx-1">Buka 24 Jam</span>
                                </div>
                                <div className="flex h-8 items-center">
                                    <MdOutlineMailOutline />
                                    <span className="mx-1">
                                        <button
                                            onClick={() =>
                                                window.open(
                                                    `mailto:${configs.email}`,
                                                )
                                            }
                                            className="hover:underline"
                                        >
                                            {configs.email}
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="mx-auto max-w-6xl px-4">
                        <div className="flex h-16 justify-between">
                            <div className="flex">
                                <div className="flex shrink-0 items-center">
                                    <Link href="/">
                                        <ApplicationLogo className="block h-9 w-auto fill-current text-gray-800" />
                                    </Link>
                                </div>
                            </div>

                            <div className="gap-6 sm:flex sm:items-center">
                                <Navbar></Navbar>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <main className="mx-auto flex min-h-[35vw] w-full">
                <div className="h-full min-h-full w-full">{children}</div>
            </main>
            <div className="flex w-screen items-center bg-zinc-800">
                <Footer />
            </div>
        </>
    );
}
