import { usePage } from '@inertiajs/react';
import { useEffect, useState } from 'react';
import DropdownContent from './DropdownContent';
import FlyoutLink from './FlyoutLink';
import HamburgerButton from './HamburgerButton';
import MobileMenu from './MobileMenu';
import SimpleLink from './SimpleLink';

const Navbar = () => {
    const [openDropdownId, setOpenDropdownId] = useState(null);
    const [activeMenu, setActiveMenu] = useState(null);
    const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);
    const [menuItems, setMenuItems] = useState([]);

    const menus = usePage().props.menu;

    // Fetch menu items from the API
    useEffect(() => {
        const categorizedMenus = {
            TEMP: [],
            HOME: [],
            ABOUT: [],
            SERVICE: [],
            NEWS: [],
            CONTACT: [],
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
                case 'news':
                    categorizedMenus.NEWS.push({
                        label: menu.nama_menu,
                        route: menu.route,
                        routeName: `News/${menu.nama_menu.replace(/\s+/g, '')}`,
                    });
                    break;
                case 'contact':
                    categorizedMenus.CONTACT.push({
                        label: menu.nama_menu,
                        route: menu.route,
                        routeName: `Contact/${menu.nama_menu.replace(/\s+/g, '')}`,
                    });
                    break;
                default:
                    categorizedMenus.TEMP.push({
                        label: menu.nama_menu,
                        route: menu.route,
                        routeName: `Temp/${menu.nama_menu.replace(/\s+/g, '')}`,
                    });
                    break;
            }
        });

        const newMenuItems = [];

        // Check if there are any menu items to display

        newMenuItems.push({
            id: 'home',
            label: 'Beranda',
            href: '/',
            isSimple: true,
        });

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
        if (categorizedMenus.NEWS.length > 0) {
            newMenuItems.push({
                id: 'news',
                label: 'Berita',
                items: categorizedMenus.NEWS,
            });
        }
        if (categorizedMenus.CONTACT.length > 0) {
            newMenuItems.push({
                id: 'contact',
                label: 'Hubungi Kami',
                items: categorizedMenus.CONTACT,
            });
        }

        if (newMenuItems.length > 0) {
            setMenuItems(newMenuItems);
        }
    }, []);

    // Reset dropdown when mobile menu is closed
    useEffect(() => {
        if (!isMobileMenuOpen) {
            setOpenDropdownId(null);
        }
    }, [isMobileMenuOpen]);

    // Handle dropdown toggle
    const handleDropdownToggle = (menuId) => {
        setOpenDropdownId(openDropdownId === menuId ? null : menuId);
    };

    useEffect(() => {
        const currentPath = window.location.pathname;

        // Set active menu based on current path
        if (currentPath === '/' || currentPath === '') {
            setActiveMenu('home');
        } else if (
            currentPath.includes('/about') ||
            currentPath.includes('/history') ||
            currentPath.includes('/visi-misi') ||
            currentPath.includes('/our-team') ||
            currentPath.includes('/quality-indicators')
        ) {
            setActiveMenu('about');
        } else if (
            currentPath.includes('/services') ||
            currentPath.includes('/doctor-schedule') ||
            currentPath.includes('/facilities')
        ) {
            setActiveMenu('service');
        } else if (
            currentPath.includes('/news') ||
            currentPath.includes('/articles') ||
            currentPath.includes('/events')
        ) {
            setActiveMenu('news');
        } else if (
            currentPath.includes('/contact') ||
            currentPath.includes('/location') ||
            currentPath.includes('/emergency')
        ) {
            setActiveMenu('contact');
        }
    }, []);

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
                <div className="flex h-16 items-center justify-between lg:text-lg">
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

export default Navbar;
