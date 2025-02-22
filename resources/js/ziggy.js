const Ziggy = {
    url: 'http:\/\/100.66.48.65:8000',
    port: 8000,
    defaults: {},
    routes: {
        'sanctum.csrf-cookie': {
            uri: 'sanctum\/csrf-cookie',
            methods: ['GET', 'HEAD'],
        },
        home: { uri: '\/', methods: ['GET', 'HEAD'] },
        temp: { uri: 'temp', methods: ['GET', 'HEAD'] },
        'about.informasi-umum': {
            uri: 'about\/informasi-umum',
            methods: ['GET', 'HEAD'],
        },
        'about.sejarah': { uri: 'about\/sejarah', methods: ['GET', 'HEAD'] },
        'about.visi-misi': {
            uri: 'about\/visi-misi',
            methods: ['GET', 'HEAD'],
        },
        'about.tim-kami': { uri: 'about\/tim-kami', methods: ['GET', 'HEAD'] },
        'about.indikator-mutu': {
            uri: 'about\/indikator-mutu',
            methods: ['GET', 'HEAD'],
        },
        'service.dokter': { uri: 'service\/dokter', methods: ['GET', 'HEAD'] },
        'service.poliklinik': {
            uri: 'service\/poliklinik',
            methods: ['GET', 'HEAD'],
        },
        'service.jadwal-dokter': {
            uri: 'service\/jadwal-dokter',
            methods: ['GET', 'HEAD'],
        },
        'service.rawat-inap': {
            uri: 'service\/rawat-inap',
            methods: ['GET', 'HEAD'],
        },
        'service.pelayanan-unit-khusus': {
            uri: 'service\/pelayanan-unit-khusus',
            methods: ['GET', 'HEAD'],
        },
        'service.pelayanan-penunjang': {
            uri: 'service\/pelayanan-penunjang',
            methods: ['GET', 'HEAD'],
        },
        'service.fasilitas-umum': {
            uri: 'service\/fasilitas-umum',
            methods: ['GET', 'HEAD'],
        },
        'service.medical-check-up': {
            uri: 'service\/medical-check-up',
            methods: ['GET', 'HEAD'],
        },
        'news.berita-terkini': {
            uri: 'news\/berita-terkini',
            methods: ['GET', 'HEAD'],
        },
        'news.health-articles': {
            uri: 'news\/health-articles',
            methods: ['GET', 'HEAD'],
        },
        'news.galeri-kegiatan': {
            uri: 'news\/galeri-kegiatan',
            methods: ['GET', 'HEAD'],
        },
        'contact.kontak-kami': {
            uri: 'contact\/kontak-kami',
            methods: ['GET', 'HEAD'],
        },
        'contact.kritik-saran': {
            uri: 'contact\/kritik-saran',
            methods: ['GET', 'HEAD'],
        },
        'contact.survey-kepuasan': {
            uri: 'contact\/survey-kepuasan',
            methods: ['GET', 'HEAD'],
        },
        'storage.local': {
            uri: 'storage\/{path}',
            methods: ['GET', 'HEAD'],
            wheres: { path: '.*' },
            parameters: ['path'],
        },
    },
};
if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}
export { Ziggy };
