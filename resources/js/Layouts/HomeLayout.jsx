import ApplicationLogo from '@/Components/ApplicationLogo';
import { Footer } from '@/Components/Footer';
import Navbar from '@/Components/Navigation/Navbar';
import { Link } from '@inertiajs/react';
import { LuClock7 } from 'react-icons/lu';
import {
    MdOutlineLocationOn,
    MdOutlineMailOutline,
    MdOutlinePhone,
} from 'react-icons/md';

export default function GuestLayout({ children }) {
    return (
        <>
            <div className="flex w-full flex-col items-center justify-between bg-white">
                <nav className="fixed left-0 right-0 top-0 z-50 border-b border-gray-100 bg-white">
                    <div className="bg-[#07b8b2]">
                        <div className="mx-auto flex h-10 w-full max-w-6xl justify-center gap-2 p-1 text-[10px] text-white sm:justify-between sm:gap-3 sm:text-base">
                            <Link
                                href="https://maps.app.goo.gl/1DziDbC6jaBvo4XU9"
                                className="flex items-center justify-center"
                            >
                                <MdOutlineLocationOn />
                                <span className="ml-2 hidden sm:inline">
                                    Jalan Raya Boja Limbangan, Kab. Kendal
                                </span>
                            </Link>
                            <div className="flex w-full sm:w-fit">
                                <div className="flex h-8 items-center gap-1 sm:mr-4">
                                    <MdOutlinePhone />
                                    <span className="mx-1">(123) 456-7890</span>
                                </div>
                                <div className="flex h-8 items-center sm:mr-4">
                                    <LuClock7 />
                                    <span className="mx-1">Buka 24 Jam</span>
                                </div>
                                <div className="flex h-8 items-center">
                                    <MdOutlineMailOutline />
                                    <span className="mx-1">
                                        <Link
                                            href="mailto: rspku"
                                            className="hover:underline"
                                        >
                                            rspkumuhboja@mailto
                                        </Link>
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
                {children}
            </div>
            <div className="flex w-full bg-zinc-800">
                <Footer />
            </div>
        </>
    );
}
