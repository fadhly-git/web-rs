import NavLink from '@/Components/Junk/NavLink';

const DropdownContent = ({ items, isMobile }) => {
    return (
        <div
            className={`${isMobile ? 'w-full bg-white' : 'w-64 rounded-lg p-6 text-lg shadow-xl'} lg:text-lg`}
        >
            <ul
                className={` ${isMobile ? 'ml-2 w-full border-l-2 border-neutral-600' : 'dropdown-content absolute right-0 w-full rounded-lg bg-white py-2 text-lg shadow-xl'} `}
            >
                {items.map((item, index) => (
                    <li
                        key={index}
                        className={`flex w-full items-center px-3 py-2 text-sm ${
                            isMobile
                                ? 'text-white hover:text-indigo-400'
                                : 'hover:bg-gray-100 hover:text-blue-500'
                        }`}
                    >
                        <NavLink
                            href={route(item.route)}
                            active={route().current(item.routeName)}
                            className="w-full lg:text-lg"
                        >
                            {item.label}
                        </NavLink>
                    </li>
                ))}
            </ul>
        </div>
    );
};

export default DropdownContent;
