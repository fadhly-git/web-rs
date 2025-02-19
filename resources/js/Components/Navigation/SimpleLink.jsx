// Komponen baru untuk link tanpa dropdown
import { useState } from 'react';

const SimpleLink = ({ children, href, isActive, isMobile }) => {
    const [open, setOpen] = useState(false);
    const showFlyout = open && !isMobile;
    return (
        <div
            onMouseEnter={() => setOpen(true)}
            className={`relative ${isMobile ? 'w-full' : 'h-fit w-fit'}`}
            onMouseLeave={() => setOpen(false)}
        >
            <button
                href={href}
                className={`relative ${isActive ? 'text-indigo-400' : ''} ${isMobile ? 'w-full py-2 text-left' : ''}`}
            >
                {children}
                {!isMobile && (
                    <span
                        style={{
                            transform:
                                isActive || showFlyout
                                    ? 'scaleX(1)'
                                    : 'scaleX(0)',
                        }}
                        className="absolute -bottom-1 -left-1 -right-1 h-1 origin-left scale-x-0 rounded-full bg-indigo-700 transition-transform duration-300 ease-out"
                    />
                )}
            </button>
        </div>
    );
};

export default SimpleLink;
