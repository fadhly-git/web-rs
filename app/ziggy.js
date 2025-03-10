const Ziggy = {
    defaults: {},
    routes: {
        'filament.exports.download': {
            uri: 'filament/exports/{export}/download',
            methods: ['GET', 'HEAD'],
            parameters: ['export'],
            bindings: { export: 'id' },
        },
        'filament.imports.failed-rows.download': {
            uri: 'filament/imports/{import}/failed-rows/download',
            methods: ['GET', 'HEAD'],
            parameters: ['import'],
            bindings: { import: 'id' },
        },
        'filament.admin.auth.login': {
            uri: 'admin/login',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.auth.logout': {
            uri: 'admin/logout',
            methods: ['POST'],
        },
        'filament.admin.pages.dashboard': {
            uri: 'admin',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.agendas.index': {
            uri: 'admin/agendas',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.agendas.create': {
            uri: 'admin/agendas/create',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.agendas.edit': {
            uri: 'admin/agendas/{record}/edit',
            methods: ['GET', 'HEAD'],
            parameters: ['record'],
        },
        'filament.admin.resources.banners.index': {
            uri: 'admin/banners',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.banners.create': {
            uri: 'admin/banners/create',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.banners.edit': {
            uri: 'admin/banners/{record}/edit',
            methods: ['GET', 'HEAD'],
            parameters: ['record'],
        },
        'filament.admin.resources.beritas.index': {
            uri: 'admin/beritas',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.beritas.create': {
            uri: 'admin/beritas/create',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.beritas.edit': {
            uri: 'admin/beritas/{record}/edit',
            methods: ['GET', 'HEAD'],
            parameters: ['record'],
        },
        'filament.admin.resources.configs.index': {
            uri: 'admin/configs',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.configs.create': {
            uri: 'admin/configs/create',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.configs.edit': {
            uri: 'admin/configs/{record}/edit',
            methods: ['GET', 'HEAD'],
            parameters: ['record'],
        },
        'filament.admin.resources.downloads.index': {
            uri: 'admin/downloads',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.downloads.create': {
            uri: 'admin/downloads/create',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.downloads.edit': {
            uri: 'admin/downloads/{record}/edit',
            methods: ['GET', 'HEAD'],
            parameters: ['record'],
        },
        'filament.admin.resources.galeris.index': {
            uri: 'admin/galeris',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.galeris.create': {
            uri: 'admin/galeris/create',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.galeris.edit': {
            uri: 'admin/galeris/{record}/edit',
            methods: ['GET', 'HEAD'],
            parameters: ['record'],
        },
        'filament.admin.resources.headings.index': {
            uri: 'admin/headings',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.headings.create': {
            uri: 'admin/headings/create',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.headings.edit': {
            uri: 'admin/headings/{record}/edit',
            methods: ['GET', 'HEAD'],
            parameters: ['record'],
        },
        'filament.admin.resources.kategori-agendas.index': {
            uri: 'admin/kategori-agendas',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.kategori-agendas.create': {
            uri: 'admin/kategori-agendas/create',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.kategori-agendas.edit': {
            uri: 'admin/kategori-agendas/{record}/edit',
            methods: ['GET', 'HEAD'],
            parameters: ['record'],
        },
        'filament.admin.resources.kategori-downloads.index': {
            uri: 'admin/kategori-downloads',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.kategori-downloads.create': {
            uri: 'admin/kategori-downloads/create',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.kategori-downloads.edit': {
            uri: 'admin/kategori-downloads/{record}/edit',
            methods: ['GET', 'HEAD'],
            parameters: ['record'],
        },
        'filament.admin.resources.kategori-galeris.index': {
            uri: 'admin/kategori-galeris',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.kategori-galeris.create': {
            uri: 'admin/kategori-galeris/create',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.kategori-galeris.edit': {
            uri: 'admin/kategori-galeris/{record}/edit',
            methods: ['GET', 'HEAD'],
            parameters: ['record'],
        },
        'filament.admin.resources.kategoris.index': {
            uri: 'admin/kategoris',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.kategoris.create': {
            uri: 'admin/kategoris/create',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.kategoris.edit': {
            uri: 'admin/kategoris/{record}/edit',
            methods: ['GET', 'HEAD'],
            parameters: ['record'],
        },
        'filament.admin.resources.kategori-staffs.index': {
            uri: 'admin/kategori-staffs',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.kategori-staffs.create': {
            uri: 'admin/kategori-staffs/create',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.kategori-staffs.edit': {
            uri: 'admin/kategori-staffs/{record}/edit',
            methods: ['GET', 'HEAD'],
            parameters: ['record'],
        },
        'filament.admin.resources.konfigurasis.index': {
            uri: 'admin/konfigurasis',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.konfigurasis.create': {
            uri: 'admin/konfigurasis/create',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.konfigurasis.edit': {
            uri: 'admin/konfigurasis/{record}/edit',
            methods: ['GET', 'HEAD'],
            parameters: ['record'],
        },
        'filament.admin.resources.menus.index': {
            uri: 'admin/menus',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.menus.create': {
            uri: 'admin/menus/create',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.menus.edit': {
            uri: 'admin/menus/{record}/edit',
            methods: ['GET', 'HEAD'],
            parameters: ['record'],
        },
        'filament.admin.resources.rekenings.index': {
            uri: 'admin/rekenings',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.rekenings.create': {
            uri: 'admin/rekenings/create',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.rekenings.edit': {
            uri: 'admin/rekenings/{record}/edit',
            methods: ['GET', 'HEAD'],
            parameters: ['record'],
        },
        'filament.admin.resources.staff.index': {
            uri: 'admin/staff',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.staff.create': {
            uri: 'admin/staff/create',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.staff.edit': {
            uri: 'admin/staff/{record}/edit',
            methods: ['GET', 'HEAD'],
            parameters: ['record'],
        },
        'filament.admin.resources.users.index': {
            uri: 'admin/users',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.users.create': {
            uri: 'admin/users/create',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.users.edit': {
            uri: 'admin/users/{record}/edit',
            methods: ['GET', 'HEAD'],
            parameters: ['record'],
        },
        'filament.admin.resources.videos.index': {
            uri: 'admin/videos',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.videos.create': {
            uri: 'admin/videos/create',
            methods: ['GET', 'HEAD'],
        },
        'filament.admin.resources.videos.edit': {
            uri: 'admin/videos/{record}/edit',
            methods: ['GET', 'HEAD'],
            parameters: ['record'],
        },
        'filament.dashboard.auth.logout': {
            uri: 'dashboard/logout',
            methods: ['POST'],
        },
        'filament.dashboard.pages.dashboard': {
            uri: 'dashboard',
            methods: ['GET', 'HEAD'],
        },
        'sanctum.csrf-cookie': {
            uri: 'sanctum/csrf-cookie',
            methods: ['GET', 'HEAD'],
        },
        telescope: {
            uri: 'telescope/{view?}',
            methods: ['GET', 'HEAD'],
            wheres: { view: '(.*)' },
            parameters: ['view'],
        },
        'livewire.update': { uri: 'livewire/update', methods: ['POST'] },
        'livewire.upload-file': {
            uri: 'livewire/upload-file',
            methods: ['POST'],
        },
        'livewire.preview-file': {
            uri: 'livewire/preview-file/{filename}',
            methods: ['GET', 'HEAD'],
            parameters: ['filename'],
        },
        home: { uri: '/', methods: ['GET', 'HEAD'] },
        temp: { uri: 'temp', methods: ['GET', 'HEAD'] },
        'about.sejarah': { uri: 'about/sejarah', methods: ['GET', 'HEAD'] },
        'about.visi-misi': {
            uri: 'about/visi-misi',
            methods: ['GET', 'HEAD'],
        },
        'about.tim-kami': { uri: 'about/tim-kami', methods: ['GET', 'HEAD'] },
        'about.indikator-mutu': {
            uri: 'about/indikator-mutu',
            methods: ['GET', 'HEAD'],
        },
        'service.dokter': { uri: 'service/dokter', methods: ['GET', 'HEAD'] },
        'service.poliklinik': {
            uri: 'service/poliklinik',
            methods: ['GET', 'HEAD'],
        },
        'service.jadwal-dokter': {
            uri: 'service/jadwal-dokter',
            methods: ['GET', 'HEAD'],
        },
        'service.rawat-inap': {
            uri: 'service/rawat-inap',
            methods: ['GET', 'HEAD'],
        },
        'service.pelayanan-unit-khusus': {
            uri: 'service/pelayanan-unit-khusus',
            methods: ['GET', 'HEAD'],
        },
        'service.pelayanan-penunjang': {
            uri: 'service/pelayanan-penunjang',
            methods: ['GET', 'HEAD'],
        },
        'service.fasilitas-umum': {
            uri: 'service/fasilitas-umum',
            methods: ['GET', 'HEAD'],
        },
        'service.medical-check-up': {
            uri: 'service/medical-check-up',
            methods: ['GET', 'HEAD'],
        },
        'news.berita-terkini': {
            uri: 'news/berita-terkini',
            methods: ['GET', 'HEAD'],
        },
        'news.health-articles': {
            uri: 'news/health-articles',
            methods: ['GET', 'HEAD'],
        },
        'news.galeri-kegiatan': {
            uri: 'news/galeri-kegiatan',
            methods: ['GET', 'HEAD'],
        },
        'contact.kontak-kami': {
            uri: 'contact/kontak-kami',
            methods: ['GET', 'HEAD'],
        },
        'contact.kritik-saran': {
            uri: 'contact/kritik-saran',
            methods: ['GET', 'HEAD'],
        },
        'contact.survey-kepuasan': {
            uri: 'contact/survey-kepuasan',
            methods: ['GET', 'HEAD'],
        },
        'storage.local': {
            uri: 'storage/{path}',
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
