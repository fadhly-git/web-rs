import { Link, usePage } from '@inertiajs/react';
import { useEffect, useState } from 'react';
import {
    FaFacebookF,
    FaInstagram,
    FaSquareXTwitter,
    FaYoutube,
} from 'react-icons/fa6';
import ApplicationLogo from './ApplicationLogo';
import { Block } from './Home/BentoImg';

export const Footer = () => {
    const [footerNavs, setFooterNavs] = useState([]);

    const TextFoot = usePage().props.configs.footer;
    const facebook = usePage().props.configs.facebook;
    const twitter = usePage().props.configs.twitter;
    const instagram = usePage().props.configs.instagram;
    const youtube = usePage().props.configs.youtube;
    const menus = usePage().props.menu;
    useEffect(() => {
        const categorizedMenus = {
            ABOUT: [],
            SERVICE: [],
        };

        menus.forEach((menu) => {
            switch (menu.kategori) {
                case 'about':
                    categorizedMenus.ABOUT.push({
                        label: menu.nama_menu,
                        route: menu.route,
                        routeName: `About/${menu.nama_menu.replace(/\s+/g, '')}`,
                    });
                    break;
                case 'service':
                    categorizedMenus.SERVICE.push({
                        label: menu.nama_menu,
                        route: menu.route,
                        routeName: `Service/${menu.nama_menu.replace(/\s+/g, '')}`,
                    });
                    break;
                default:
                    break;
            }
        });

        const newMenuItems = [];

        // Check if there are any menu items to display

        if (categorizedMenus.ABOUT.length > 0) {
            newMenuItems.push({
                id: 'about',
                label: 'Tentang kami',
                items: categorizedMenus.ABOUT,
            });
        }
        if (categorizedMenus.SERVICE.length > 0) {
            newMenuItems.push({
                id: 'service',
                label: 'Layanan',
                items: categorizedMenus.SERVICE,
            });
        }

        if (newMenuItems.length > 0) {
            setFooterNavs(newMenuItems);
        }
    }, []);

    return (
        <footer className="mx-auto grid h-fit w-full max-w-6xl grid-flow-dense grid-cols-12 items-start py-5 text-slate-100 md:px-8">
            <Block className="col-span-12 row-span-2 h-full md:col-span-6">
                <ApplicationLogo className="block h-12 w-auto fill-current" />
                <div className="mt-2 leading-relaxed">
                    <div
                        className="prose text-wrap text-[15px] text-white"
                        dangerouslySetInnerHTML={{ __html: TextFoot }}
                    />
                </div>
            </Block>
            {footerNavs.length > 0 &&
                footerNavs.map((nav, index) => (
                    <Block key={index} className="col-span-4 md:col-span-2">
                        <span className="text-[14px] font-semibold text-slate-100 sm:text-base">
                            {nav.label}
                        </span>
                        <ul className="mt-2">
                            {nav.items &&
                                nav.items.map((item, index) => (
                                    <li key={index} className="">
                                        <Link
                                            href={item.route}
                                            className="text-[13px] hover:text-indigo-600 hover:underline sm:text-base"
                                        >
                                            {item.label}
                                        </Link>
                                    </li>
                                ))}
                        </ul>
                    </Block>
                ))}
            <Block className="col-span-4 h-full items-start md:col-span-2">
                <span className="text-[11px] font-bold md:text-base">
                    Hubungi kami
                </span>
                <ul className="">
                    <li>
                        <div className="mt-6 sm:mt-0">
                            <ul className="flex items-center space-x-1">
                                <li className="flex h-fit w-fit items-center justify-center rounded-full border hover:border-2 hover:border-cyan-500 hover:p-1">
                                    <button
                                        onClick={() => {
                                            window.open(
                                                facebook,
                                                '_blank',
                                                'noopener,noreferrer',
                                            );
                                        }}
                                        className="p-1 text-base text-blue-500 md:text-2xl"
                                    >
                                        <FaFacebookF />
                                    </button>
                                </li>

                                <li className="md:p1 flex h-fit w-fit items-center justify-center rounded-full border hover:border-2 hover:border-cyan-500 hover:p-1">
                                    <button
                                        onClick={() => {
                                            window.open(
                                                twitter,
                                                '_blank',
                                                'noopener,noreferrer',
                                            );
                                        }}
                                        className="p-1 text-base text-white md:text-2xl"
                                    >
                                        <FaSquareXTwitter />
                                    </button>
                                </li>

                                <li className="md:p1 flex h-fit w-fit items-center justify-center rounded-full border hover:border-2 hover:border-cyan-500 hover:p-1">
                                    <button
                                        onClick={() => {
                                            window.open(
                                                instagram,
                                                '_blank',
                                                'noopener,noreferrer',
                                            );
                                        }}
                                        className="p-1 text-base text-red-500 md:text-2xl"
                                    >
                                        <FaInstagram />
                                    </button>
                                </li>

                                <li className="md:p1 flex h-fit w-fit items-center justify-center rounded-full border hover:border-2 hover:border-cyan-500 hover:p-1">
                                    <button
                                        onClick={() => {
                                            window.open(
                                                youtube,
                                                '_blank',
                                                'noopener,noreferrer',
                                            );
                                        }}
                                        className="p-1 text-base text-red-500 md:text-2xl"
                                    >
                                        <FaYoutube />
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div className="mt-4 flex flex-col text-[12px] font-bold md:text-base">
                    <span>Alamat</span>
                    <button
                        onClick={() => {
                            window.open(
                                `https://maps.app.goo.gl/1DziDbC6jaBvo4XU9`,
                                '_blank',
                                'noopener,noreferrer',
                            );
                        }}
                        className="mt-2 w-fit transform rounded-lg bg-[#07b8b2] px-4 py-2 text-[12px] text-white transition-all duration-300 hover:scale-110 hover:bg-cyan-600 hover:font-extrabold md:mt-4"
                    >
                        Maps
                    </button>
                </div>
            </Block>

            <div className="col-span-full mt-8 place-items-center justify-center border-t py-6 sm:flex">
                <div className="mt-4 text-sm sm:mt-0">
                    &copy; {new Date().getFullYear()} RS PKU BOJA All rights
                    reserved.
                </div>
            </div>
        </footer>
    );
};
