import { AnimatePresence, motion } from 'framer-motion';

const MobileMenu = ({ isOpen, children }) => {
    return (
        <AnimatePresence>
            {isOpen && (
                <motion.div
                    initial={{ opacity: 0, height: 0 }}
                    animate={{ opacity: 1, height: 'auto' }}
                    exit={{ opacity: 0, height: 0 }}
                    transition={{ duration: 0.3 }}
                    className="md:hidden" // Hapus absolute dan tambahkan md:hidden
                >
                    <div className="h-full bg-white px-4 py-2">
                        <div className="flex flex-col">{children}</div>
                    </div>
                </motion.div>
            )}
        </AnimatePresence>
    );
};

export default MobileMenu;
