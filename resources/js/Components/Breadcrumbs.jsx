import {
    aboutUsItems,
    contactItems,
    newsItems,
    serviceItems,
    temp,
} from '@/MenuItems';
import { Link, usePage } from '@inertiajs/react';
import { HiChevronRight, HiHome } from 'react-icons/hi';

export const Breadcrumbs = () => {
    const { url, component } = usePage();

    if (component === 'Home') {
        return null;
    }

    // Menggabungkan semua items menu untuk pencarian
    const allMenuItems = [
        ...aboutUsItems,
        ...serviceItems,
        ...newsItems,
        ...contactItems,
        ...temp,
    ];

    // Fungsi untuk mendapatkan breadcrumb items
    const getBreadcrumbItems = () => {
        // Jika component name adalah 'Home', return empty array
        if (component === 'Home') return [];

        const currentRoute = component;
        const menuItem = allMenuItems.find(
            (item) =>
                item.route === currentRoute || item.routeName === currentRoute,
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
        <div className="flex w-full justify-center bg-slate-100 px-4 py-3 pt-32 text-sm text-gray-500">
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
            </div>
        </div>
    );
};
