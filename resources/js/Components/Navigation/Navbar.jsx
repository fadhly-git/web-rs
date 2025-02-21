import { useEffect, useState } from 'react';
import DropdownContent from './DropdownContent';
import FlyoutLink from './FlyoutLink';
import HamburgerButton from './HamburgerButton';
import {
    aboutUsItems,
    contactItems,
    MENU_IDS,
    newsItems,
    serviceItems,
} from './MenuItems';
import MobileMenu from './MobileMenu';
import SimpleLink from './SimpleLink';

const Example = () => {
    const [openDropdownId, setOpenDropdownId] = useState(null);
    const [activeMenu, setActiveMenu] = useState(null);
    const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);

    // Tambahkan useEffect untuk reset dropdown saat menu mobile ditutup
    useEffect(() => {
        if (!isMobileMenuOpen) {
            setOpenDropdownId(null);
        }
    }, [isMobileMenuOpen]);

    // Tambahkan fungsi handler
    const handleDropdownToggle = (menuId) => {
        setOpenDropdownId(openDropdownId === menuId ? null : menuId);
    };

    useEffect(() => {
        const currentPath = window.location.pathname;

        // Tambahkan kondisi untuk Beranda
        if (currentPath === '/' || currentPath === '') {
            setActiveMenu(MENU_IDS.HOME);
        } else if (
            currentPath.includes('/about') ||
            currentPath.includes('/history') ||
            currentPath.includes('/visi-misi') ||
            currentPath.includes('/our-team') ||
            currentPath.includes('/quality-indicators')
        ) {
            setActiveMenu(MENU_IDS.ABOUT);
        } else if (
            currentPath.includes('/services') ||
            currentPath.includes('/doctor-schedule') ||
            currentPath.includes('/facilities')
        ) {
            setActiveMenu(MENU_IDS.SERVICE);
        } else if (
            currentPath.includes('/news') ||
            currentPath.includes('/articles') ||
            currentPath.includes('/events')
        ) {
            setActiveMenu(MENU_IDS.NEWS);
        } else if (
            currentPath.includes('/contact') ||
            currentPath.includes('/location') ||
            currentPath.includes('/emergency')
        ) {
            setActiveMenu(MENU_IDS.CONTACT);
        }
    }, []);

    const menuItems = [
        {
            id: MENU_IDS.HOME,
            label: 'Beranda',
            href: '/',
            isSimple: true,
        },
        {
            id: MENU_IDS.ABOUT,
            label: 'Tentang kami',
            items: aboutUsItems,
        },
        {
            id: MENU_IDS.SERVICE,
            label: 'Layanan',
            items: serviceItems,
        },
        {
            id: MENU_IDS.NEWS,
            label: 'Berita',
            items: newsItems,
        },
        {
            id: MENU_IDS.CONTACT,
            label: 'Hubungi Kami',
            items: contactItems,
        },
    ];

    const renderMenuItems = (isMobile = false) =>
        menuItems.map((menu) => {
            if (menu.isSimple) {
                return (
                    <SimpleLink
                        key={menu.id}
                        href={menu.href}
                        isActive={activeMenu === menu.id}
                        isMobile={isMobile}
                    >
                        {menu.label}
                    </SimpleLink>
                );
            }

            return (
                <FlyoutLink
                    key={menu.id}
                    href="#"
                    FlyoutContent={() => (
                        <DropdownContent
                            items={menu.items}
                            isMobile={isMobile}
                        />
                    )}
                    isActive={activeMenu === menu.id}
                    isMobile={isMobile}
                    isOpen={isMobile ? openDropdownId === menu.id : false}
                    onOpenChange={
                        isMobile
                            ? () => handleDropdownToggle(menu.id)
                            : (isOpen) =>
                                  setOpenDropdownId(isOpen ? menu.id : null)
                    }
                >
                    {menu.label}
                </FlyoutLink>
            );
        });

    return (
        <nav className="relative">
            <div className="mx-auto max-w-7xl">
                <div className="flex h-16 items-center justify-between">
                    {/* Desktop Menu */}
                    <div className="hidden md:flex md:space-x-8">
                        {renderMenuItems()}
                    </div>

                    {/* Mobile Menu Button */}
                    <HamburgerButton
                        isOpen={isMobileMenuOpen}
                        onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
                    />
                </div>
            </div>

            {/* Mobile Menu */}
            <MobileMenu isOpen={isMobileMenuOpen}>
                {renderMenuItems(true)}
            </MobileMenu>
        </nav>
    );
};

export default Example;
