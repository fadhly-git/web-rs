const HamburgerButton = ({ isOpen, onClick }) => {
    return (
        <button
            onClick={onClick}
            className="block p-2 focus:outline-none md:hidden"
        >
            <div className="space-y-1.5">
                <span
                    className={`block h-0.5 w-6 transform bg-black transition duration-300 ease-in-out ${isOpen ? 'translate-y-2 rotate-45' : ''}`}
                />
                <span
                    className={`block h-0.5 w-6 bg-black transition duration-300 ease-in-out ${isOpen ? 'opacity-0' : ''}`}
                />
                <span
                    className={`block h-0.5 w-6 transform bg-black transition duration-300 ease-in-out ${isOpen ? '-translate-y-2 -rotate-45' : ''}`}
                />
            </div>
        </button>
    );
};

export default HamburgerButton;
