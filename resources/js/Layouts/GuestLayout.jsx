import ApplicationLogo from '@/Components/ApplicationLogo';
import Navbar from '@/Components/Navigation/Navbar';
import { Link } from '@inertiajs/react';
import { LuClock7 } from 'react-icons/lu';
import { MdOutlineMailOutline, MdOutlinePhone } from 'react-icons/md';

export default function GuestLayout({ children }) {
    return (
        <div className="min-h-screen bg-gray-100">
            <nav className="fixed left-0 right-0 top-0 z-50 border-b border-gray-100 bg-white">
                <div className="flex h-10 justify-center gap-2 bg-[#07b8b2] p-1 text-white sm:justify-end sm:gap-3">
                    <div className="flex h-8 items-center sm:mr-4">
                        <MdOutlinePhone className="h-5 w-5" />
                        <span className="ml-2 text-sm sm:text-base">
                            (123) 456-7890
                        </span>
                    </div>
                    <div className="flex h-8 items-center sm:mr-4">
                        <LuClock7 className="h-5 w-5" />
                        <span className="ml-2 text-sm sm:text-base">
                            Buka 24 Jam
                        </span>
                    </div>
                    <div className="flex h-8 items-center sm:mr-4">
                        <MdOutlineMailOutline className="h-5 w-5" />
                        <span className="ml-2 text-sm sm:text-base">
                            <a
                                href="mailto: rspku
                                "
                            >
                                rspkumuhboja@mailto
                            </a>
                        </span>
                    </div>
                </div>
                <div className="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
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

            <main>{children}</main>
        </div>
    );
}
