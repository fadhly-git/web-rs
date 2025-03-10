import GuestLayout from '@/Layouts/GuestLayout';
import { Head, usePage } from '@inertiajs/react';
import { AnimatePresence, motion } from 'framer-motion';
import { useEffect, useState } from 'react';

const SPRING_OPTIONS = {
    type: 'spring',
    stiffness: 300,
    damping: 30,
    mass: 1,
};

const DRAG_BUFFER = 100; // Minimum drag distance to trigger navigation

export default function JadwalDoc() {
    const { jadwal_dokter, dokter_jaga } = usePage().props;
    const [currentDoctorIndex, setCurrentDoctorIndex] = useState(0);

    // Validasi data
    if (!jadwal_dokter.length || !dokter_jaga.length) {
        return <div>Loading...</div>;
    }

    const handleDragEnd = (info) => {
        if (info.offset.x > DRAG_BUFFER && currentDoctorIndex > 0) {
            setCurrentDoctorIndex(currentDoctorIndex - 1);
        } else if (
            info.offset.x < -DRAG_BUFFER &&
            currentDoctorIndex < jadwal_dokter.length - 1
        ) {
            setCurrentDoctorIndex(currentDoctorIndex + 1);
        }
    };

    useEffect(() => {
        const interval = setInterval(() => {
            setCurrentDoctorIndex((prev) =>
                prev === jadwal_dokter.length - 1 ? 0 : prev + 1,
            );
        }, 5000);

        return () => clearInterval(interval);
    }, [jadwal_dokter.length]);

    console.log(dokter_jaga);

    return (
        <>
            <Head title="Jadwal Dokter" />
            <GuestLayout>
                <div className="mt-32 flex items-center justify-center">
                    <div className="flex w-full max-w-7xl flex-col rounded-[1vw] bg-gray-100 p-6 shadow-xl">
                        <AnimatePresence mode="wait">
                            <motion.div
                                key={currentDoctorIndex}
                                className="flex w-full max-w-7xl flex-col lg:flex-row"
                            >
                                {/* Left Section - Doctor List */}
                                <div className="lg:w-1/4">
                                    <div className="mb-2 flex justify-between">
                                        <h4 className="text-xl font-bold text-blue-800">
                                            Dokter Jaga
                                        </h4>
                                    </div>
                                    <div className="text-md flex items-center text-gray-600">
                                        <span>
                                            Hari ini,{' '}
                                            {new Date().toLocaleDateString(
                                                'id-ID',
                                            )}
                                        </span>
                                    </div>

                                    <div className="mt-2 space-y-1">
                                        {dokter_jaga.map((dokter, index) => (
                                            <div
                                                key={index}
                                                className="flex justify-between border-b border-gray-200"
                                            >
                                                <div>
                                                    <p className="text-lg font-semibold">
                                                        {dokter.nama_dokter}
                                                    </p>
                                                    <p className="text-lg font-semibold text-gray-500">
                                                        {dokter.jam_mulai.substring(
                                                            0,
                                                            5,
                                                        )}{' '}
                                                        -{' '}
                                                        {dokter.jam_selesai.substring(
                                                            0,
                                                            5,
                                                        )}
                                                    </p>
                                                </div>
                                            </div>
                                        ))}
                                    </div>
                                </div>

                                {/* Divider */}
                                <div className="mx-4 hidden w-px bg-blue-500 lg:block"></div>

                                {/* Right Section - Doctor Details */}
                                <motion.div
                                    className="mt-6 flex w-full flex-col lg:mt-0 lg:w-2/4"
                                    initial={{ opacity: 0, x: 100 }}
                                    animate={{ opacity: 1, x: 0 }}
                                    exit={{ opacity: 0, x: -100 }}
                                    transition={SPRING_OPTIONS}
                                    drag="x"
                                    dragConstraints={{ left: 0, right: 0 }}
                                    onDragEnd={handleDragEnd}
                                >
                                    <div className="mb-4 flex items-center justify-between">
                                        <h3 className="text-xl font-bold text-blue-800">
                                            Jadwal Dokter
                                        </h3>
                                    </div>

                                    <div className="flex flex-col lg:flex-row">
                                        {/* Doctor Information */}
                                        <div className="flex-1">
                                            <h2 className="text-3xl font-bold text-gray-800">
                                                {
                                                    jadwal_dokter[
                                                        currentDoctorIndex
                                                    ].nama_dokter
                                                }
                                            </h2>
                                            <p className="mt-2 text-lg font-semibold text-gray-600">
                                                Spesialis{' '}
                                                {
                                                    jadwal_dokter[
                                                        currentDoctorIndex
                                                    ].spesialis
                                                }
                                            </p>

                                            <div className="mt-2">
                                                <div>
                                                    <span className="text-lg font-semibold text-gray-500">
                                                        Hari Praktek
                                                    </span>
                                                    <p className="text-lg font-semibold">
                                                        {
                                                            jadwal_dokter[
                                                                currentDoctorIndex
                                                            ].hari
                                                        }
                                                    </p>
                                                </div>
                                                <div>
                                                    <span className="text-lg font-semibold text-gray-500">
                                                        Jam Praktek
                                                    </span>
                                                    <p className="text-lg font-semibold">
                                                        {jadwal_dokter[
                                                            currentDoctorIndex
                                                        ].jam_mulai.substring(
                                                            0,
                                                            5,
                                                        )}{' '}
                                                        -
                                                        {jadwal_dokter[
                                                            currentDoctorIndex
                                                        ].jam_selesai.substring(
                                                            0,
                                                            5,
                                                        )}
                                                    </p>
                                                </div>
                                                <div>
                                                    <span
                                                        className={`rounded-lg px-3 py-1 text-lg font-semibold ${
                                                            jadwal_dokter[
                                                                currentDoctorIndex
                                                            ].status === 1
                                                                ? 'bg-green-500 text-white'
                                                                : 'bg-gray-300 text-gray-700'
                                                        } `}
                                                    >
                                                        {jadwal_dokter[
                                                            currentDoctorIndex
                                                        ].status === 1
                                                            ? 'Aktif'
                                                            : 'Cuti'}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </motion.div>
                                {/* Doctor Image */}
                                <motion.div
                                    initial={{ opacity: 0, x: 100 }}
                                    animate={{ opacity: 1, x: 0 }}
                                    exit={{ opacity: 0, x: -100 }}
                                    transition={SPRING_OPTIONS}
                                    drag="x"
                                    dragConstraints={{ left: 0, right: 0 }}
                                    onDragEnd={handleDragEnd}
                                    className="mt-6 flex items-center justify-center lg:ml-8 lg:mt-0 lg:w-1/4"
                                >
                                    <div className="relative h-64 w-full overflow-hidden rounded-lg lg:h-80">
                                        <img
                                            src={`/storage/${jadwal_dokter[currentDoctorIndex].photo}`}
                                            alt={
                                                jadwal_dokter[
                                                    currentDoctorIndex
                                                ].nama_dokter
                                            }
                                            className="absolute inset-0 h-full w-full object-cover"
                                            style={{
                                                objectPosition: 'center',
                                            }}
                                        />
                                    </div>
                                </motion.div>
                            </motion.div>
                        </AnimatePresence>
                    </div>
                </div>
            </GuestLayout>
        </>
    );
}
