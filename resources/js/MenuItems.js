// Definisikan data menu untuk setiap dropdown
export const MENU_IDS = {
    TEMP: 'temp',
    HOME: 'home',
    ABOUT: 'about',
    SERVICE: 'service',
    NEWS: 'news',
    CONTACT: 'contact',
};

export const temp = [
    { label: 'Temp', route: 'temp', routeName: 'Temp' },
    { label: 'Temp 2', route: 'temp-2', routeName: 'Temp 2' },
    { label: 'Temp 3', route: 'temp-3', routeName: 'Temp 3' },
];

export const aboutUsItems = [
    {
        label: 'Informasi Umum',
        route: 'about.informasi-umum',
        routeName: 'About/InformasiUmum',
    },
    { label: 'Sejarah', route: 'about.sejarah', routeName: 'About/Sejarah' },
    {
        label: 'Visi & Misi',
        route: 'about.visi-misi',
        routeName: 'About/Visi-misi',
    },
    { label: 'Tim Kami', route: 'about.tim-kami', routeName: 'About/TimKami' },
    {
        label: 'Indikator Mutu',
        route: 'about.indikator-mutu',
        routeName: 'About/IndikatorMutu',
    },
];

export const serviceItems = [
    { label: 'Dokter', route: 'service.dokter', routeName: 'Service/Dokter' },
    {
        label: 'Poliklinik',
        route: 'service.poliklinik',
        routeName: 'Service/Poliklinik',
    },
    {
        label: 'Jadwal Dokter',
        route: 'service.jadwal-dokter',
        routeName: 'Service/JadwalDokter',
    },
    {
        label: 'Rawat Inap',
        route: 'service.rawat-inap',
        routeName: 'Service/RawatInap',
    },
    {
        label: 'Pelayanan Unit Khusus',
        route: 'service.pelayanan-unit-khusus',
        routeName: 'Service/PelayananUnitKhusus',
    },
    {
        label: 'Pelayanan Penunjang',
        route: 'service.pelayanan-penunjang',
        routeName: 'Service/PelayananPenunjang',
    },
    {
        label: 'Fasilitas Umum',
        route: 'service.fasilitas-umum',
        routeName: 'Service/FasilitasUmum',
    },
    {
        label: 'Medical Check Up',
        route: 'service.medical-check-up',
        routeName: 'Service/MedicalCheckUp',
    },
];

export const newsItems = [
    {
        label: 'Berita Terkini',
        route: 'news.berita-terkini',
        routeName: 'News/BeritaTerkini',
    },
    {
        label: 'Artikel Kesehatan',
        route: 'news.health-articles',
        routeName: 'News/ArtikelKesehatan',
    },
    {
        label: 'Galeri Kegiatan',
        route: 'news.galeri-kegiatan',
        routeName: 'News/GaleriKegiatan',
    },
];

export const contactItems = [
    {
        label: 'Kontak Kami',
        route: 'contact.kontak-kami',
        routeName: 'Contact/KontakKami',
    },
    {
        label: 'Kritik & Saran',
        route: 'contact.kritik-saran',
        routeName: 'Contact/KritikSaran',
    },
    {
        label: 'Survey Kepuasan',
        route: 'contact.survey-kepuasan',
        routeName: 'Contact/SurveyKepuasan',
    },
];
