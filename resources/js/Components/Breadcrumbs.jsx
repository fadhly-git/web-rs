import {
    aboutUsItems,
    contactItems,
    newsItems,
    serviceItems,
    temp,
} from '@/MenuItems';
import { Link, usePage } from '@inertiajs/react';
import { useEffect, useState } from 'react';
import { HiChevronRight, HiHome } from 'react-icons/hi';

export const Breadcrumbs = () => {
    const { url } = usePage();
    const currentUrl = window.location.pathname;
    const { props } = usePage();
    const [not, setNot] = useState(true);
    const haeding =
        props.news && props.news.length > 0 ? props.news[0].slug_berita : '';

    // Menggabungkan semua items menu untuk pencarian
    const allMenuItems = [
        ...aboutUsItems,
        ...serviceItems,
        ...newsItems,
        ...contactItems,
        ...temp,
    ];
    const currentRoute = currentUrl.split('/').pop();

    useEffect(() => {
        if (currentRoute === 'berita-terkini') {
            setNot(false);
        }
    }, [currentRoute]);

    if (currentUrl === '/') {
        return null;
    }

    // Fungsi untuk mendapatkan breadcrumb items
    const getBreadcrumbItems = () => {
        // Jika url adalah '/', return empty array
        if (currentUrl === '/') return [];

        const menuItem = allMenuItems.find(
            (item) =>
                item.route.split('.').at(1) == currentRoute ||
                item.routeName == currentRoute,
        );

        if (!menuItem) return [];

        // Tentukan parent berdasarkan array mana item tersebut berada
        let parent = '';
        if (aboutUsItems.includes(menuItem)) parent = 'Tentang Kami';
        else if (serviceItems.includes(menuItem)) parent = 'Layanan';
        else if (newsItems.includes(menuItem)) parent = 'Berita';
        else if (contactItems.includes(menuItem)) parent = 'Hubungi Kami';
        else if (temp.includes(menuItem)) parent = 'Temporary';

        return parent
            ? [
                  { text: parent, url: '#' },
                  { text: menuItem.label, url: url },
              ]
            : [{ text: menuItem.label, url: url }];
    };

    const breadcrumbItems = getBreadcrumbItems();

    return (
        <div className="flex w-screen justify-center bg-slate-100 px-4 py-3 pt-32 text-sm text-gray-500">
            <div className="flex h-full w-full max-w-6xl items-center">
                <Link
                    href="/"
                    className="flex items-center transition-colors hover:text-indigo-600"
                >
                    <HiHome className="h-4 w-4" />
                </Link>

                {breadcrumbItems.map((item, index) => (
                    <div key={index} className="flex items-center">
                        <HiChevronRight className="mx-1 h-4 w-4" />
                        <Link
                            href={item.url}
                            className={`transition-colors hover:text-indigo-600 ${
                                index === breadcrumbItems.length - 1
                                    ? 'font-medium text-indigo-600'
                                    : ''
                            }`}
                        >
                            {item.text}
                        </Link>
                    </div>
                ))}
                {haeding && not && (
                    <div className="ml-auto flex">
                        <h2 className="text-lg font-bold text-zinc-700">
                            {haeding}
                        </h2>
                    </div>
                )}
            </div>
        </div>
    );
};
