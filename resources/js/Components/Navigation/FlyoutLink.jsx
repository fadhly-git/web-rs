import { AnimatePresence, motion } from 'framer-motion';
import { useState } from 'react'; // Tambahkan kembali useState

const FlyoutLink = ({
    children,
    href,
    FlyoutContent,
    isActive,
    isMobile,
    isOpen: parentIsOpen,
    onOpenChange,
}) => {
    // Tambahkan local state untuk hover di desktop
    const [localOpen, setLocalOpen] = useState(false);

    // Gunakan parentIsOpen untuk mobile dan localOpen untuk desktop
    const showFlyout = FlyoutContent && !isMobile && localOpen;
    const showMobileDropdown = FlyoutContent && isMobile && parentIsOpen;

    const handleClick = () => {
        if (isMobile && onOpenChange) {
            onOpenChange();
        }
    };

    return (
        <div
            onMouseEnter={() => !isMobile && setLocalOpen(true)}
            onMouseLeave={() => !isMobile && setLocalOpen(false)}
            className={`relative ${isMobile ? 'w-full' : 'h-fit w-fit'}`}
        >
            <button
                onClick={handleClick}
                href={href}
                className={`relative ${isMobile ? 'w-full py-2 text-left text-black' : 'text-black'} ${isActive ? 'text-indigo-400' : ''}`}
            >
                <div className="flex items-center justify-between">
                    <span>{children}</span>
                    {isMobile && FlyoutContent && (
                        <svg
                            className={`h-4 w-4 transition-transform duration-200 ${parentIsOpen ? 'rotate-180' : ''}`}
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                strokeLinecap="round"
                                strokeLinejoin="round"
                                strokeWidth={2}
                                d="M19 9l-7 7-7-7"
                            />
                        </svg>
                    )}
                </div>
                {!isMobile && (
                    <span
                        style={{
                            transform:
                                showFlyout || isActive
                                    ? 'scaleX(1)'
                                    : 'scaleX(0)',
                        }}
                        className="absolute -bottom-1 -left-1 -right-1 h-1 origin-left scale-x-0 rounded-full bg-indigo-700 transition-transform duration-300 ease-out"
                    />
                )}
            </button>
            <AnimatePresence>
                {showMobileDropdown && (
                    <motion.div
                        initial={{ opacity: 0, height: 0 }}
                        animate={{ opacity: 1, height: 'auto' }}
                        exit={{ opacity: 0, height: 0 }}
                        transition={{ duration: 0.2 }}
                        className="overflow-hidden"
                    >
                        <FlyoutContent isMobile={true} />
                    </motion.div>
                )}
                {showFlyout && (
                    <motion.div
                        initial={{ opacity: 0, y: 15 }}
                        animate={{ opacity: 1, y: 0 }}
                        exit={{ opacity: 0, y: 15 }}
                        style={{ translateX: '-50%' }}
                        transition={{ duration: 0.3, ease: 'easeOut' }}
                        className="absolute left-1/2 top-12 rounded-lg bg-white text-black"
                    >
                        <div className="absolute -top-6 left-0 right-0 h-6 bg-transparent" />
                        <div className="absolute left-1/2 top-0 h-4 w-4 -translate-x-1/2 -translate-y-1/2 rotate-45 bg-white" />
                        <FlyoutContent isMobile={false} />
                    </motion.div>
                )}
            </AnimatePresence>
        </div>
    );
};

export default FlyoutLink;
