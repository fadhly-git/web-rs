import os

# Definisikan data menu untuk setiap dropdown
MENU_IDS = {
    'TEMP': 'temp',
    'HOME': 'home',
    'ABOUT': 'about',
    'SERVICE': 'service',
    'NEWS': 'news',
    'CONTACT': 'contact',
}

temp = [
    { 'label': 'Temp', 'route': 'temp', 'routeName': 'Temp' },
    { 'label': 'Temp 2', 'route': 'temp-2', 'routeName': 'Temp 2' },
    { 'label': 'Temp 3', 'route': 'temp-3', 'routeName': 'Temp 3' },
]

aboutUsItems = [
    { 'label': 'Informasi Umum', 'route': 'about.informasi-umum', 'routeName': 'About/InformasiUmum' },
    { 'label': 'Sejarah', 'route': 'about.sejarah', 'routeName': 'About/Sejarah' },
    { 'label': 'Visi & Misi', 'route': 'about.visi-misi', 'routeName': 'About/VisiMisi' },
    { 'label': 'Tim Kami', 'route': 'about.tim-kami', 'routeName': 'Tim Kami' },
    { 'label': 'Indikator Mutu', 'route': 'about.indikator-mutu', 'routeName': 'About/IndikatorMutu' },
]

serviceItems = [
    { 'label': 'Dokter', 'route': 'service.dokter', 'routeName': 'Service/Dokter' },
    { 'label': 'Poliklinik', 'route': 'service.poliklinik', 'routeName': 'Service/Poliklinik' },
    { 'label': 'Jadwal Dokter', 'route': 'service.jadwal-dokter', 'routeName': 'Service/JadwalDokter' },
    { 'label': 'Rawat Inap', 'route': 'service.rawat-inap', 'routeName': 'Service/RawatInap' },
    { 'label': 'Pelayanan Unit Khusus', 'route': 'service.pelayanan-unit-khusus', 'routeName': 'Service/PelayananUnitKhusus' },
    { 'label': 'Pelayanan Penunjang', 'route': 'service.pelayanan-penunjang', 'routeName': 'Service/PelayananPenunjang' },
    { 'label': 'Fasilitas Umum', 'route': 'service.fasilitas-umum', 'routeName': 'Service/FasilitasUmum' },
    { 'label': 'Medical Check Up', 'route': 'service.medical-check-up', 'routeName': 'Service/MedicalCheckUp' },
]

newsItems = [
    { 'label': 'Berita Terkini', 'route': 'news.berita-terkini', 'routeName': 'News/BeritaTerkini' },
    { 'label': 'Artikel Kesehatan', 'route': 'news.health-articles', 'routeName': 'News/ArtikelKesehatan' },
    { 'label': 'Galeri Kegiatan', 'route': 'news.galeri-kegiatan', 'routeName': 'News/GaleriKegiatan' },
]

contactItems = [
    { 'label': 'Kontak Kami', 'route': 'contact.kontak-kami', 'routeName': 'Contact/KontakKami' },
    { 'label': 'Kritik & Saran', 'route': 'contact.kritik-saran', 'routeName': 'Contact/KritikSaran' },
    { 'label': 'Survey Kepuasan', 'route': 'contact.survey-kepuasan', 'routeName': 'Contact/SurveyKepuasan' },
]

all_routes = aboutUsItems + serviceItems + newsItems + contactItems

def create_file(route_name):
    # Ganti '/' dengan os.sep agar kompatibel dengan berbagai OS
    file_path = os.path.join('resources', 'js', 'Pages', *route_name.split('/')) + '.jsx'
    os.makedirs(os.path.dirname(file_path), exist_ok=True)
    print(f'Creating file: {file_path}')
    with open(file_path, 'w') as f:
        f.write(f'// {route_name} page\n')
        f.write("import GuestLayout from '@/Layouts/GuestLayout';\n")
        f.write("import { Head } from '@inertiajs/react';\n \n")
        f.write(f'export default function {route_name.split("/")[-1]}() {{\n')
        f.write('    return (\n <> \n')
        f.write(f'        <Head title="{route_name.split("/")[-1]}" />\n')
        f.write('        <GuestLayout>\n')
        f.write(f'            <div className="flex w-full">{route_name}</div>\n')
        f.write('        </GuestLayout>\n')
        f.write('    </>\n')
        f.write('    );\n')
        f.write('};\n\n')
        f.write(f'')

for item in all_routes:
    create_file(item['routeName'])

print('All files have been created successfully.')

''''
import GuestLayout from '@/Layouts/GuestLayout';
import { Head } from '@inertiajs/react';

export default function InformasiUmum() {
    return (
        <>
            <Head title="Informasi Umum" />
            <GuestLayout>
                <div className="flex w-full">About/InfomasiUmum</div>
            </GuestLayout>
        </>
    );
}
'''