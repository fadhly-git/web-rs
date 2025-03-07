-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2025 at 08:10 AM
-- Server version: 8.0.41-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_rspku_boja`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id_agenda` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `id_kategori_agenda` bigint UNSIGNED NOT NULL,
  `bahasa` enum('ID','EN') COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_agenda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_agenda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_agenda` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_agenda` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hits` int DEFAULT '0',
  `urutan` int DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `tempat` text COLLATE utf8mb4_unicode_ci,
  `google_map` text COLLATE utf8mb4_unicode_ci,
  `tanggal_post` datetime NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agendas`
--

INSERT INTO `agendas` (`id_agenda`, `id_user`, `id_kategori_agenda`, `bahasa`, `slug_agenda`, `judul_agenda`, `isi`, `status_agenda`, `jenis_agenda`, `keywords`, `gambar`, `icon`, `hits`, `urutan`, `tanggal_mulai`, `tanggal_selesai`, `jam_mulai`, `jam_selesai`, `tempat`, `google_map`, `tanggal_post`, `tanggal_publish`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'ID', 'about', 'mengenalkan kami', '<h2>kami</h2>', 'DRAFT', 'AGENDA', 'qwerty', '01JMYERF51Q6SG7GJ69YQD2KJE.jpg', '01JMYERF55Z33CPBP6J93KQJTH.jpg', NULL, NULL, '2025-02-25', '2025-02-27', '10:15:00', '22:15:06', 'depan mas', 'maps.com', '2025-02-28 00:00:00', '2025-03-07 00:00:00', '2025-02-24 20:15:32', '2025-02-25 04:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id_banner` bigint UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id_banner`, `gambar`, `created_at`, `updated_at`) VALUES
(1, '01JN2FXP9PC43ZJHZG3EFBERR1.jpg', '2025-02-26 18:21:47', '2025-02-26 18:21:47'),
(2, '01JN2KS3VAR0V4WNH0YPX9NN7T.jpg', '2025-02-26 19:29:11', '2025-02-26 19:29:11'),
(3, '01JND99Y6SWRGJ6X8VAEQHZC33.jpg', '2025-03-02 22:57:47', '2025-03-02 22:57:47');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id_berita` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `id_kategori` bigint UNSIGNED NOT NULL DEFAULT '0',
  `bahasa` enum('ID','EN') COLLATE utf8mb4_unicode_ci NOT NULL,
  `updater` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `slug_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_berita` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_berita` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Berita',
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hits` int DEFAULT NULL,
  `urutan` int DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_publish` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id_berita`, `id_user`, `id_kategori`, `bahasa`, `updater`, `slug_berita`, `judul_berita`, `isi`, `status_berita`, `jenis_berita`, `keywords`, `gambar`, `icon`, `hits`, `urutan`, `tanggal_mulai`, `tanggal_selesai`, `tanggal_post`, `tanggal_publish`, `created_at`, `updated_at`) VALUES
(2, 3, 1, 'ID', 'fadhly', 'Sejarah Kami', 'Sejarah', '<h2>Sejarah RS PKU Muhammadiyah Yogyakarta</h2><p>RS PKU Muhammadiyah Yogyakarta milik Pimpinan Pusat Muhammadiyah didirikan oleh K.H. Ahmad Dahlan sebagai Ketua Persyarikatan Muhammadiyah atas inisiatif muridnya, K.H. Sudjak, yang pada awalnya berupa klinik dan poliklinik pada tanggal 15 Februari 1923 dengan lokasi pertama di kampung Jagang Notoprajan No.72 Yogyakarta. Awalnya bernama PKO (Penolong Kesengsaraan Oemoem) dengan maksud menyediakan pelayanan kesehatan bagi kaum dhuafa’. Pendirian pertama atas inisiatif H.M. Sudjak yang didukung sepenuhnya oleh K.H. Ahmad Dahlan. Seiring dengan waktu, nama PKO berubah menjadi PKU (Pembina Kesejahteraan Umat).</p><p>Pada tahun 1928 klinik dan poliklinik PKO Muhammadiyah pindah lokasi ke Jalan Ngabean No.12 B Yogyakarta (sekarang Jalan K.H. Ahmad Dahlan). Pada tahun 1936 klinik dan poliklinik PKO Muhammadiyah pindah lokasi lagi ke Jalan K.H. Dahlan No. 20 Yogyakarta hingga saat ini. Pada tahun 1970-an status klinik dan poliklinik berubah  menjadi RS PKU Muhammadiyah Yogyakarta.</p><p>Bersamaan dengan berkembangnya berbagai amal usaha di bidang kesehatan, termasuk di dalamnya adalah RS PKU Muhammadiyah Yogyakarta maka Pimpinan Pusat perlu mengatur gerak kerja dari amal usaha Muhammadiyah bidang kesehatan melalui Surat Keputusan Pimpinan Pusat Muhammadiyah No 86/SK-PP/IV-B/1.c/1998 tentang Qaidah Amal Usaha Muhammadiyah Bidang Kesehatan. Dalam Surat Keputusan tersebut diatur tentang misi utamanya untuk meningkatkan kemampuan masyarakatagar dapat mencapai derajat kesehatan yang lebih baik, sebagai bagian dari upaya menuju terwujudnya kehidupan yang sejahtera dan sakinah sebagaimana dicita-citakan Muhammadiyah. Qaidah inilah yang menjadi dasar utama dalam menjalankan organisasi RS PKU Muhammadiyah Yogyakarta.</p><p>Berbagai perubahanyang berkembang di luar lingkungan maupun yang terjadi secara internal di dalam organisasi RS PKU Muhammadiyah. tentang keselamatan pasien, keterbatasan akses pelayanan kesehatan pada sebagian masyarakat tertentu, perkembangan ilmu dan teknologi, huge burden disease, hingga semakin terbukanya batas-batas informasi yang berimbas terhadap makin kritisnya pelanggan terhadap pelayanan kesehatan serta perubahan regulasi pemerintah, diantisipasi dengan berbagai langkah dari perbaikan saran prasarana dan Sumber Daya Insani, sehingga menjadikan RS PKU Muhammadiyah Yogyakarta selain mampu bersaing dengan sarana pelayanan kesehatan yang lain juga patuh terhadap regulasi pemerintah.</p><h2>Visi dan Misi</h2><p>FALSAFAH RS PKU Muhammadiyah Yogyakarta</p><p>Falsafah dasar</p><p>Misi dakwah Islam amar ma’ruf nahi munkar :</p><p>وَلۡتَكُن مِّنكُمۡ أُمَّةٞ يَدۡعُونَ إِلَى ٱلۡخَيۡرِ وَيَأۡمُرُونَ بِٱلۡمَعۡرُوفِ وَيَنۡهَوۡنَ عَنِ ٱلۡمُنكَرِۚ وَأُوْلَٰٓئِكَ هُمُ ٱلۡمُفۡلِحُونَ ١٠٤</p><p>Dan hendaklah di antara kamu ada segolongan orang yang menyeru kepada kebajikan, menyuruh (berbuat) yang makruf, dan mencegah dari yang mungkar. Dan mereka itulah orang-orang yang beruntung (QS Ali Imran 104)</p><p>Keyakinan dasar dalam pelayanan kesehatan</p><p>وَإِذَا مَرِضۡتُ فَهُوَ يَشۡفِينِ ٨٠</p><p>Dan apabila aku sakit, Dia-lah yang menyembuhkan aku (QS. Asy-Syuara:80)</p><p>Peningkatan mutu pelayanan yang berkelanjutan dengan mengutamakan keselamatan pasien.</p><p>وَلِكُلّٖ وِجۡهَةٌ هُوَ مُوَلِّيهَاۖ فَٱسۡتَبِقُواْ ٱلۡخَيۡرَٰتِۚ أَيۡنَ مَا تَكُونُواْ يَأۡتِ بِكُمُ ٱللَّهُ جَمِيعًاۚ إِنَّ ٱللَّهَ عَلَىٰ كُلِّ شَيۡءٖ قَدِيرٞ ١٤٨</p><p>Dan setiap umat mempunyai kiblat yang dia menghadap kepadanya. Maka berlomba-lombalah kamu dalam kebaikan. Di mana saja kamu berada, pasti Allah akan mengumpulkan kamu semuanya. Sungguh, Allah Mahakuasa atas segala sesuatu. (QS Al Baqarah 148)</p><p>مِنۡ أَجۡلِ ذَٰلِكَ كَتَبۡنَا عَلَىٰ بَنِيٓ إِسۡرَٰٓءِيلَ أَنَّهُۥ مَن قَتَلَ نَفۡسَۢا بِغَيۡرِ نَفۡسٍ أَوۡ فَسَادٖ فِي ٱلۡأَرۡضِ فَكَأَنَّمَا قَتَلَ ٱلنَّاسَ جَمِيعٗا وَمَنۡ أَحۡيَاهَا فَكَأَنَّمَآ أَحۡيَا ٱلنَّاسَ جَمِيعٗاۚ وَلَقَدۡ جَآءَتۡهُمۡ رُسُلُنَا بِٱلۡبَيِّنَٰتِ ثُمَّ إِنَّ كَثِيرٗا مِّنۡهُم بَعۡدَ ذَٰلِكَ فِي ٱلۡأَرۡضِ لَمُسۡرِفُونَ ٣٢</p><p>Oleh karena itu Kami tetapkan (suatu hukum) bagi Bani Israil, bahwa barangsiapa membunuh seseorang, bukan karena orang itu membunuh orang lain, atau bukan karena berbuat kerusakan di bumi, maka seakan-akan dia telah membunuh semua manusia. Barangsiapa memelihara kehidupan seorang manusia, maka seakan-akan dia telah memelihara kehidupan semua manusia. Sesungguhnya Rasul Kami telah datang kepada mereka dengan (membawa) keterangan-keterangan yang jelas. Tetapi kemudian banyak di antara mereka setelah itu melampaui batas di bumi.(QS Al Maidah : 32)</p><p>Perwujudan Iman dan amal shaleh</p><p>إِنَّ ٱلَّذِينَ ءَامَنُواْ وَعَمِلُواْ ٱلصَّٰلِحَٰتِ سَيَجۡعَلُ لَهُمُ ٱلرَّحۡمَٰنُ وُدّٗا ٩٦</p><p>Sungguh, orang-orang yang beriman dan mengerjakan kebajikan, kelak (Allah) Yang Maha Pengasih akan menanamkan rasa kasih sayang (dalam hati mereka) (QS Maryam:96)</p><p>Sebagai tugas sosial</p><p>يَٰٓأَيُّهَا ٱلَّذِينَ ءَامَنُواْ لَا تُحِلُّواْ شَعَٰٓئِرَ ٱللَّهِ وَلَا ٱلشَّهۡرَ ٱلۡحَرَامَ وَلَا ٱلۡهَدۡيَ وَلَا ٱلۡقَلَٰٓئِدَ وَلَآ ءَآمِّينَ ٱلۡبَيۡتَ ٱلۡحَرَامَ يَبۡتَغُونَ فَضۡلٗا مِّن رَّبِّهِمۡ وَرِضۡوَٰنٗاۚ وَإِذَا حَلَلۡتُمۡ فَٱصۡطَادُواْۚ وَلَا يَجۡرِمَنَّكُمۡ شَنَ‍َٔانُ قَوۡمٍ أَن صَدُّوكُمۡ عَنِ ٱلۡمَسۡجِدِ ٱلۡحَرَامِ أَن تَعۡتَدُواْۘ وَتَعَاوَنُواْ عَلَى ٱلۡبِرِّ وَٱلتَّقۡوَىٰۖ وَلَا تَعَاوَنُواْ عَلَى ٱلۡإِثۡمِ وَٱلۡعُدۡوَٰنِۚ وَٱتَّقُواْ ٱللَّهَۖ إِنَّ ٱللَّهَ شَدِيدُ ٱلۡعِقَابِ ٢</p><p>Wahai orang-orang yang beriman! Janganlah kamu melanggar syiar-syiar kesucian Allah, dan jangan (melanggar kehormatan) bulan-bulan haram, jangan (mengganggu) hadyu (hewan-hewan kurban) dan qala’id (hewan-hewan kurban yang diberi tanda), dan jangan (pula) mengganggu orang-orang yang mengunjungi Baitulharam; mereka mencari karunia dan keridaan Tuhannya. Tetapi apabila kamu telah menyelesaikan ihram, maka bolehlah kamu berburu. Jangan sampai kebencian(mu) kepada suatu kaum karena mereka menghalang-halangimu dari Masjidilharam, mendorongmu berbuat melampaui batas (kepada mereka). Dan tolong-menolonglah kamu dalam (mengerjakan) kebajikan dan takwa, dan jangan tolong-menolong dalam berbuat dosa dan permusuhan. Bertakwalah kepada Allah, sungguh, Allah sangat berat siksaan-Nya.(QS Al Maidah :2)</p><p>Tahukah kamu (orang) yang mendustakan agama? أَرَءَيۡتَ ٱلَّذِي يُكَذِّبُ بِٱلدِّينِ ١</p><p>Maka itulah orang yang menghardik anak yatim,   فَذَٰلِكَ ٱلَّذِي يَدُعُّ ٱلۡيَتِيمَ ٢</p><p>dan tidak mendorong memberi makan orang miskin. وَلَا يَحُضُّ عَلَىٰ طَعَامِ ٱلۡمِسۡكِينِ ٣</p><p>Maka celakalah orang yang salat, فَوَيۡلٞ لِّلۡمُصَلِّينَ ٤</p><p>(yaitu) orang-orang yang lalai terhadap salatnya, ٱلَّذِينَ هُمۡ عَن صَلَاتِهِمۡ سَاهُونَ ٥</p><p>yang berbuat ria,   ٱلَّذِينَ هُمۡ يُرَآءُونَ ٦</p><p>dan enggan (memberikan) bantuan. (QS. Al Maun 1-7)   وَيَمۡنَعُونَ ٱلۡمَاعُونَ ٧</p><p>Visi</p><p>PKU REBORN menghadirkan semangat dan gerakan baru yang mendorong terjadinya perubahan pada VISI rumah sakit agar sesuai dengan harapan persyarikatan, kebutuhan seluruh stake holder, keinginan civitas hospitalia RS PKU Muhammadiyah Yogyakarta, serta perkembangan kondisi saat ini dan masa depan, yaitu:</p><p>“Menjadi rumah sakit yang Islami dan unggul dalam pelayanan, pendidikan, penelitian dan dakwah di bidang kesehatan”</p><p>Misi</p><p>Serangkaian upaya akan terus dioptimalkan agar VISI RS PKU Muhammadiyah bisa tercapai, yang dirumuskan dalam misi-misi berikut:</p><p>Menyelenggarakan pelayanan kesehatan sesuai standar terkini, berbasis bukti ilmiah serta mengembangkan pelayanan berbasis digital</p><p>Meningkatkan mutu Sumber Daya Insani melalui pendidikan, pelatihan, penelitian, dan pengembangan ilmu pengetahuan dan teknologi bidang kesehatan secara profesional, inovatif, efektif, dan efisien sesuai ajaran Islam</p><p>Melaksanakan dakwah islam amar ma’ruf nahi mungkar sebagai sarana ibadah kepada Allah SWT yang bersinergi dengan persyarikatan, pemerintah, dan stakeholder lainnya untuk menciptakan masyarakat sehat dan sejahtera</p><p>Nilai-nilai utama</p><p>Seiring dengan perubahan VISI dan MISI rumah sakit, nilai-nilai utama juga mengalami perubahan agar dapat menggambarkan filosofi pelayanan yang lebih luas dibandingkan tahun-tahun sebelumnya. Nilai-nilai utama yang dianut oleh seluruh civitas hospitalia RS PKU Muhammadiyah di masa mendatang dituangkan dalam akronim ALMAUN untuk mengingatkan kembali falsafah dasar yang menjadi pondasi berdirinya persyarikatan Muhammadiyah dan Rumah Sakit PKU Muhammadiyah satu abad yang lalu. Kata ALMAUN merupakan akronim dari nilai-nilai Amanah, Lengkap, Mutu, Antusias, Universal dan Nyaman, yang dideskripsikan sebagai berikut:</p><p>A = Amanah, berarti jujur, bertanggung jawab dan dapat dipercaya, yang menunjukkan seluruh proses pelayanan, pendidikan dan dakwah yang dilakukan secara bertanggung jawab oleh sumber daya insani yang jujur dan dapat dipercaya.</p><p>L =   Lengkap, menunjukkan RS PKU Muhammadiyah yang lahir kembali ini akan berusaha memberikan pelayanan, pendidikan dan dakwah yang bersifat komprehensif untuk memenuhi kebutuhan seluruh stake holder.</p><p>M = Mutu, menunjukkan proses pelayanan kesehatan, pendidikan dan dakwah yang diselenggarakan selalu berdasarkan standar pelayanan terkini, sesuai dengan regulasi yang ada serta memenuhi nilai syari’ah Islamiyah.</p><p>A = Antusias, menggambarkan semangat seluruh sumber daya insani yang berada di lingkungan rumah sakit untuk berlomba-lomba dalam kebaikan (fastabikhul khairat) memberikan pelayanan, pendidikan dan dakwah dengan sepenuh hati, cepat dan akurat.</p><p>U = Universal, merupakan nilai yang sudah ditanamkan oleh KH Ahmad Dahlan kepada persyarikatan Muhammadiyah, agar seluruh sumber daya insani RS PKU Muhammadiyah Yogyakarta memberikan pelayanan, pendidikan dan dakwah yang bersifat setara, tanpa membeda-bedakan agama, suku hingga status sosial seseorang</p><p>N = Nyaman, adalah kondisi rumah sakit yang didambakan oleh semua orang yang berada di dalam rumah sakit maupun di sekitar rumah sakit. Kenyamanan yang berarti luas, meliputi perasaan aman, tenang, senang, tentram, sejuk, yang diharapkan dapat mendukung proses penyembuhan pasien.</p><p>RS PKU Muhammadiyah Yogyakarta juga dikelola berdasarkan manajemen entrepreneural yang bertumpu pada nilai-nilai yang bersumber dari Al Qur’an sebagai share value yaitu:</p><ul><li><p>Amanah</p></li><li><p>Sidiq</p></li><li><p>Fathonah</p></li><li><p>Tabligh</p></li><li><p>Inovatif</p></li><li><p>Silaturrahim</p></li></ul>', 'PUBLISH', 'BERITA', '<p>Sejarah, rspkuboja</p>', '01JNDAYSJ4FKSGD0KS8282MAJW.jpg', NULL, NULL, NULL, '2025-03-03', '2025-03-03', '2025-03-03 00:00:00', '2025-03-03 00:00:00', '2025-03-02 23:26:39', '2025-03-02 23:26:39'),
(3, 3, 1, 'ID', 'fadhly', 'Informasi Umum', 'informasi umum', '<h3>Gambaran Umum</h3><p>Rumah Sakit PKU Muhammadiyah Sukoharjo berada pada 110.815 0 BT,-7.69788450 LU, dengan kondisi topografi dataran yang landau ± 3060 M2.</p><p>Rumah Sakit PKU Muhammadiyah Sukoharjo yang terletak di daerah pemukiman padat penduduk tidak terlepas dari salah satu fungsinya yaitu menyelenggarakan pelayanan pengobatan dan pemulihan kesehatan sesuai dengan standar pelayanan Rumah Sakit.</p><p>Rumah Sakit PKU Muhammadiyah Sukoharjo adalah salah satu Rumah Sakit swasta milik Persyarikatan Muhammadiyah yang ikut berperan dalam pelayanan kesehatan di Sukoharjo dan berada di bawah naungan Pimpinan Daerah Muhammadiyah Kabupaten Sukoharjo. Berdasarkan klasifikasi Rumah Sakit, Rumah Sakit PKU Muhammadiyah Sukoharjo merupakan rumah sakit tipe C</p><p>Rumah sakit ini memiliki berbagai dokter spesialis yang siap melayani pasien. Untuk informasi jadwal praktik dokter, Anda dapat mengunjungi situs resmi rumah sakit atau menghubungi langsung melalui kontak yang tersedia.</p>', 'PUBLISH', 'BERITA', '<p>informasi umum,&nbsp; rspkuboja, pku</p>', NULL, NULL, NULL, NULL, '2025-03-04', '2025-03-04', '2025-03-04 00:00:00', '2025-03-04 00:00:00', '2025-03-03 18:57:01', '2025-03-04 18:20:59'),
(4, 3, 7, 'ID', 'fadhly', 'berita umum', 'berita umum', '<h4>Rumah Sakit Sehat Bersama Luncurkan Layanan Kesehatan Digital Terbaru</h4><p>[Kota, Tanggal] – Dalam rangka meningkatkan aksesibilitas layanan kesehatan kepada masyarakat, <strong>Rumah Sakit Sehat Bersama</strong> secara resmi meluncurkan layanan kesehatan digital terbarunya. Layanan ini dirancang untuk mempermudah pasien dalam melakukan konsultasi medis, pendaftaran rawat jalan, hingga pengiriman obat secara online.</p><p>“Kami memahami bahwa di era modern ini, masyarakat membutuhkan layanan kesehatan yang lebih cepat, efisien, dan mudah diakses. Oleh karena itu, kami menghadirkan platform digital ini sebagai solusi untuk menjawab kebutuhan tersebut,” ujar <strong>Dr. Jhon Doe</strong> , Direktur Utama Rumah Sakit Sehat Bersama, dalam sambutannya saat peluncuran layanan.</p><p><strong>Fitur Unggulan Layanan Digital RS Sehat Bersama</strong></p><ul><li><p>Konsultasi Dokter Online : Pasien dapat berkonsultasi langsung dengan dokter spesialis melalui aplikasi mobile atau website tanpa perlu datang ke rumah sakit.</p></li><li><p>Pendaftaran Rawat Jalan Online : Proses pendaftaran rawat jalan kini dapat dilakukan hanya dalam beberapa klik, menghemat waktu pasien.</p></li><li><p>Pengiriman Obat ke Rumah : Setelah konsultasi, resep obat dapat dikirim langsung ke alamat pasien melalui mitra logistik yang terpercaya.</p></li><li><p>Reminder Jadwal Medis : Aplikasi akan mengirimkan notifikasi kepada pasien untuk mengingatkan jadwal kontrol atau pengambilan obat.</p></li></ul><p><strong>Tanggapan Positif dari Masyarakat</strong></p><p>Sejak diluncurkan, layanan ini telah mendapatkan respons positif dari masyarakat. Salah satu pasien, <strong>Ibu Siti Rahmawati</strong> , mengungkapkan kepuasannya: “Saya sangat terbantu dengan adanya layanan ini. Anak saya bisa konsultasi dengan dokter anak tanpa harus keluar rumah, apalagi di masa pandemi seperti sekarang.”</p><p><strong>Komitmen untuk Pelayanan Kesehatan Berkualitas</strong></p><p>Layanan digital ini merupakan bagian dari komitmen Rumah Sakit Sehat Bersama untuk terus memberikan pelayanan kesehatan yang berkualitas dan inovatif. Selain itu, RS Sehat Bersama juga terus meningkatkan kapasitas tenaga medisnya melalui pelatihan dan seminar nasional.</p><p>“Kami berharap layanan ini dapat menjadi solusi bagi masyarakat yang ingin mendapatkan pelayanan kesehatan tanpa batas. Ke depannya, kami juga akan terus mengembangkan fitur-fitur baru untuk memenuhi kebutuhan pasien,” tambah Dr. Andi.</p><p>Untuk informasi lebih lanjut mengenai layanan digital RS Sehat Bersama, kunjungi situs resmi kami di <a href=\"http://www.rspkuboja.com\">www.rspkuboja.com</a> atau hubungi layanan pelanggan kami di nomor 0812-3456-7890.</p>', 'PUBLISH', 'BERITA', '<p>berita,&nbsp; rspku, boja</p>', '01JNJ0H0FZXDH2T5NHC4QX8R9D.jpg', NULL, NULL, NULL, '2025-03-05', '2025-03-05', '2025-03-05 00:00:00', '2025-03-05 00:00:00', '2025-03-04 18:54:29', '2025-03-04 19:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1741235101),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1741235101;', 1741235101);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id_conf` bigint UNSIGNED NOT NULL,
  `name_web` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_link1` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_link2` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_link3` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sambutan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `pesan_1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `icon_1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `pesan_2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `icon_2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `pesan_3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `icon_3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `pesan_4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `icon_4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sambutan_2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `heading_sambutan_2` text COLLATE utf8mb4_unicode_ci,
  `gambar_dir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layanan_medis` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `gambar_layanan_medis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `layanan_penunjang` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `gambar_layanan_penunjang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_medis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_penunjang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iklan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_janji_temu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `news` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `copy_right` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id_conf`, `name_web`, `logo`, `favicon`, `main_link1`, `main_link2`, `main_link3`, `email`, `phone`, `address`, `facebook`, `twitter`, `instagram`, `youtube`, `sambutan`, `pesan_1`, `icon_1`, `pesan_2`, `icon_2`, `pesan_3`, `icon_3`, `pesan_4`, `icon_4`, `sambutan_2`, `heading_sambutan_2`, `gambar_dir`, `layanan_medis`, `gambar_layanan_medis`, `layanan_penunjang`, `gambar_layanan_penunjang`, `link_medis`, `link_penunjang`, `iklan`, `gambar`, `link_janji_temu`, `news`, `footer`, `copy_right`, `created_at`, `updated_at`) VALUES
(1, 'RS PKU BOJA', '01JN8N7TQR172HE0695E57DBCB.png', '01JN8N7TQVB4Q8TZQM21Z2T84P.png', 'http://localhost:8000/', 'http://localhost:8000/', 'http://localhost:8000/', 'rspkuboja@gmail.com', '0829228228390', 'Salamsari, Kabupaten Kendal', 'https://www.facebook.com/', 'https://x.com/', 'instagram.com', 'https://www.youtube.com/', '<h2>Selamat Datang di RS PKU</h2><p>Assalamu’alaikum, dengan penuh komitmen dan layanan prima, dengan dilandasi Amanah, Lengkap, Mutu, Antusias, Universal dan Nyaman, kami selalu siap menjaga kesehatan anda. Dengan posisi rumah sakit yang strategis, maka kecepatan akses semakin terjangkau.</p>', '<h3>Perawatan nyaman</h3><p>Didukung dengan berbagai kelas bangsal inap, akanmenjadikan anda nyaman.</p>', '<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewBox=\"0 -960 960 960\" width=\"24px\" fill=\"#07b8b2\"><path d=\"M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z\"/></svg>', '<h3>Perawatan nyaman</h3><p>Didukung dengan berbagai kelas bangsal inap, akan menjadikan anda nyaman.</p>', '<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewBox=\"0 -960 960 960\" width=\"24px\" fill=\"#07b8b2\"><path d=\"M280-400q-33 0-56.5-23.5T200-480q0-33 23.5-56.5T280-560q33 0 56.5 23.5T360-480q0 33-23.5 56.5T280-400Zm0 160q-100 0-170-70T40-480q0-100 70-170t170-70q67 0 121.5 33t86.5 87h352l120 120-180 180-80-60-80 60-85-60h-47q-32 54-86.5 87T280-240Zm0-80q56 0 98.5-34t56.5-86h125l58 41 82-61 71 55 75-75-40-40H435q-14-52-56.5-86T280-640q-66 0-113 47t-47 113q0 66 47 113t113 47Z\"/></svg>', '<h3>Perawatan nyaman</h3><p>Didukung dengan berbagai kelas bangsal inap, akan menjadikan anda nyaman.</p>', '<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewBox=\"0 -960 960 960\" width=\"24px\" fill=\"#07b8b2\"><path d=\"M280-80v-366q-51-14-85.5-56T160-600v-280h80v280h40v-280h80v280h40v-280h80v280q0 56-34.5 98T360-446v366h-80Zm400 0v-320H560v-280q0-83 58.5-141.5T760-880v800h-80Z\"/></svg>', '<h3>Perawatan nyaman</h3><p>Didukung dengan berbagai kelas bangsal inap, akan menjadikan anda nyaman.</p>', '<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"24px\" viewBox=\"0 -960 960 960\" width=\"24px\" fill=\"#07b8b2\"><path d=\"M280-80v-366q-51-14-85.5-56T160-600v-280h80v280h40v-280h80v280h40v-280h80v280q0 56-34.5 98T360-446v366h-80Zm400 0v-320H560v-280q0-83 58.5-141.5T760-880v800h-80Z\"/></svg>', '<p>Assalamu’alaikum Wr. Wb.</p><p>Puji Syukur kita panjatkan ke hadirat Allah SWT, atas rahmat dan karunia-Nya, sholawat dan salam senantiasa tercurah kepada Rasulullah SAW. Saya sebagai Direktur RS Islam Kendal mengharapkan Website ini dapat menjadi jembatan penghubung antar stakeholder. Dan dapat memberikan informasi yang diperlukan oleh masyarakat.</p><p>Terima Kasih</p>', 'Sambutan Fajar', '01JNBG2EHFN8C2GSH329KXRRTT.png', '<p><small>Layanan medis</small></p><div class=\"lead\"><h4>Profesionalitas dan religiusitas dalampelayanan kesehatan</h4></div><p>Assalamu’alaikum, dengan penuh komitmen dan layanan prima, dengan dilandasi Amanah, Lengkap, Mutu, Antusias, Universal dan Nyaman, kami selalu siap menjaga kesehatan anda. Dengan posisi rumah sakit yang strategis, maka kecepatan akses semakin terjangkau.</p>', '01JNBFR45J7YWTFNXNC8P2NWT6.jpg', '<p><small>Layanan medis</small></p><div class=\"lead\"><h4>Profesionalitas dan religiusitas dalampelayanan kesehatan</h4></div><p>Assalamu’alaikum, dengan penuh komitmen dan layanan prima, dengan dilandasi Amanah, Lengkap, Mutu, Antusias, Universal dan Nyaman, kami selalu siap menjaga kesehatan anda. Dengan posisi rumah sakit yang strategis, maka kecepatan akses semakin terjangkau.</p>', '01JNBFR45M238EH3Y2N4AZDJV3.jpg', '/service/pelayanan-unit-khusus', '/service/pelayanan-penunjang', '<h3>Temukan Perawatan Terbaik untuk Kesehatan Anda</h3><p>Di Rumah Sakit Kami, kami memahami bahwa setiap pasien memiliki kebutuhan yang unik. Dengan beragam layanan unggulan kami, kami berkomitmen untuk memberikan perawatan berkualitas tinggi yang disesuaikan dengan kebutuhan Anda.</p>', '01JNBFR45PM715JQ4SH3NE3NS0.jpg', NULL, '<p>Blogs that are loved by the community. Updated every\nhour.</p>', 'Mari bersama-sama menjaga kesehatan dan kualitas hidup dengan memanfaatkan layanan inovatif dari Rumah Sakit Sehat Bersama . Informasi lengkap mengenai layanan dan program kesehatan dapat diakses melalui www.rssehatbersama.com . Jangan ragu untuk berkonsultasi—kami siap membantu Anda! ', NULL, '2025-03-01 03:50:09', '2025-03-04 19:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id_download` bigint UNSIGNED NOT NULL,
  `id_kategori_download` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `bahasa` enum('ID','EN') COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_download` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_download` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hits` int NOT NULL,
  `tanggal` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id_download`, `id_kategori_download`, `id_user`, `bahasa`, `judul_download`, `jenis_download`, `isi`, `gambar`, `website`, `hits`, `tanggal`) VALUES
(1, 2, 1, 'ID', 'mysequal', 'unduh', 'isi', '01JMYGG1H06HJ00A1KEZ04T1QS.png', 'kodokngorek', 1, '2025-02-24 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id_galeri` bigint UNSIGNED NOT NULL,
  `id_kategori_galeri` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `bahasa` enum('ID','EN') COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_galeri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_galeri` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hits` int DEFAULT NULL,
  `popup_status` enum('Publish','Draft') COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int DEFAULT NULL,
  `status_text` enum('Ya','Tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id_galeri`, `id_kategori_galeri`, `id_user`, `bahasa`, `judul_galeri`, `jenis_galeri`, `isi`, `gambar`, `website`, `hits`, `popup_status`, `urutan`, `status_text`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'ID', 'kegiatan', 'galeri hp', '<h2>isi</h2>', '01JMYHBB7Y7D6FFZK6BV572VAF.png', 'kodokngorek', 1, 'Publish', 1, 'Tidak', NULL, '2025-02-25 05:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `headings`
--

CREATE TABLE `headings` (
  `id_heading` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL DEFAULT '0',
  `judul_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `halaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NULL',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headings`
--

INSERT INTO `headings` (`id_heading`, `id_user`, `judul_heading`, `keterangan`, `gambar`, `halaman`, `created_at`, `updated_at`) VALUES
(2, 1, 'abc', 'isisisi', '01JMXNME1ZGVBFKJ6E702HKM8H.jpg', 'NULL', '2025-02-24 21:23:22', '2025-02-24 21:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id_kategori` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `bahasa` enum('ID','EN') COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int DEFAULT NULL,
  `hits` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id_kategori`, `id_user`, `bahasa`, `slug_kategori`, `nama_kategori`, `urutan`, `hits`, `created_at`, `updated_at`) VALUES
(1, 1, 'ID', 'about', 'profile', NULL, NULL, '2025-02-24 07:07:17', '2025-03-04 18:34:10'),
(7, 1, 'ID', 'berita', 'berita umum', NULL, NULL, '2025-03-04 18:35:21', '2025-03-04 18:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_agendas`
--

CREATE TABLE `kategori_agendas` (
  `id_kategori_agenda` bigint UNSIGNED NOT NULL,
  `bahasa` enum('ID','EN') COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_kategori_agenda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori_agenda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `urutan` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_agendas`
--

INSERT INTO `kategori_agendas` (`id_kategori_agenda`, `bahasa`, `slug_kategori_agenda`, `nama_kategori_agenda`, `keterangan`, `urutan`) VALUES
(1, 'ID', 'kategori agenda 1', 'kategori agenda satu', 'satu agenda ketegori', NULL),
(3, 'ID', 'gori ambrol', 'gori ne ambrol', 'gorine wes ndalu dadi ambrol', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_downloads`
--

CREATE TABLE `kategori_downloads` (
  `id_kategori_download` bigint UNSIGNED NOT NULL,
  `bahasa` enum('ID','EN') COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_kategori_download` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori_download` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `urutan` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_downloads`
--

INSERT INTO `kategori_downloads` (`id_kategori_download`, `bahasa`, `slug_kategori_download`, `nama_kategori_download`, `keterangan`, `urutan`) VALUES
(1, 'ID', 'minyak', 'telon', 'lang', NULL),
(2, 'ID', 'select * form users', 'sql', 'minyak', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_galeris`
--

CREATE TABLE `kategori_galeris` (
  `id_kategori_galeri` bigint UNSIGNED NOT NULL,
  `bahasa` enum('ID','EN') COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_kategori_galeri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori_galeri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_galeris`
--

INSERT INTO `kategori_galeris` (`id_kategori_galeri`, `bahasa`, `slug_kategori_galeri`, `nama_kategori_galeri`, `urutan`) VALUES
(1, 'ID', 'kegiatan', 'kegiatan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_staff`
--

CREATE TABLE `kategori_staff` (
  `id_kategori_staff` bigint UNSIGNED NOT NULL,
  `bahasa` enum('ID','EN') COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_kategori_staff` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori_staff` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `urutan` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_staff`
--

INSERT INTO `kategori_staff` (`id_kategori_staff`, `bahasa`, `slug_kategori_staff`, `nama_kategori_staff`, `keterangan`, `urutan`) VALUES
(1, 'ID', 'slug', 'sluq', 'slugg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasis`
--

CREATE TABLE `konfigurasis` (
  `id_konfigurasi` bigint UNSIGNED NOT NULL,
  `bahasa` enum('ID','EN') COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaweb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_singkat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tentang` text COLLATE utf8mb4_unicode_ci,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_cadangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatext` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_twitter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_google_plus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `singkatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_map` text COLLATE utf8mb4_unicode_ci,
  `judul_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pesan_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pesan_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pesan_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pesan_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pesan_5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pesan_6` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `javawebmedia` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rekening` text COLLATE utf8mb4_unicode_ci,
  `prolog_topik` text COLLATE utf8mb4_unicode_ci,
  `prolog_program` text COLLATE utf8mb4_unicode_ci,
  `prolog_sekretariat` text COLLATE utf8mb4_unicode_ci,
  `prolog_aksi` text COLLATE utf8mb4_unicode_ci,
  `prolog_kolaborasi` text COLLATE utf8mb4_unicode_ci,
  `prolog_sebaran` text COLLATE utf8mb4_unicode_ci,
  `gambar_berita` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prolog_agenda` text COLLATE utf8mb4_unicode_ci,
  `prolog_wawasan` text COLLATE utf8mb4_unicode_ci,
  `protocol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_host` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_port` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_timeout` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_pass` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi_pembayaran` text COLLATE utf8mb4_unicode_ci,
  `gambar_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_bawah_peta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_bawah_peta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cara_pesan` enum('Keranjang Belanja','Formulir Pemesanan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konfigurasis`
--

INSERT INTO `konfigurasis` (`id_konfigurasi`, `bahasa`, `namaweb`, `nama_singkat`, `tagline`, `tagline2`, `tentang`, `deskripsi`, `website`, `email`, `email_cadangan`, `alamat`, `telepon`, `hp`, `fax`, `logo`, `icon`, `keywords`, `metatext`, `facebook`, `twitter`, `instagram`, `google_plus`, `nama_facebook`, `nama_twitter`, `nama_instagram`, `nama_google_plus`, `singkatan`, `google_map`, `judul_1`, `pesan_1`, `judul_2`, `pesan_2`, `judul_3`, `pesan_3`, `judul_4`, `pesan_4`, `judul_5`, `pesan_5`, `judul_6`, `pesan_6`, `isi_1`, `isi_2`, `isi_3`, `isi_4`, `isi_5`, `isi_6`, `link_1`, `link_2`, `link_3`, `link_4`, `link_5`, `link_6`, `javawebmedia`, `gambar`, `video`, `rekening`, `prolog_topik`, `prolog_program`, `prolog_sekretariat`, `prolog_aksi`, `prolog_kolaborasi`, `prolog_sebaran`, `gambar_berita`, `prolog_agenda`, `prolog_wawasan`, `protocol`, `smtp_host`, `smtp_port`, `smtp_timeout`, `smtp_user`, `smtp_pass`, `judul_pembayaran`, `isi_pembayaran`, `gambar_pembayaran`, `link_bawah_peta`, `text_bawah_peta`, `cara_pesan`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'ID', 'kodokngorek ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Formulir Pemesanan', 1, '2025-02-24 18:18:35', '2025-02-24 18:18:35');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id_menu` bigint UNSIGNED NOT NULL,
  `nama_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id_menu`, `nama_menu`, `kategori`, `route`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Temp', NULL, 'temp', 'AKTIF', NULL, NULL),
(2, 'Temp 2', NULL, 'temp-2', 'AKTIF', NULL, NULL),
(3, 'Temp 3', NULL, 'temp-3', 'AKTIF', NULL, NULL),
(4, 'Informasi Umum', 'about', 'about.informasi-umum', 'AKTIF', NULL, '2025-03-02 08:09:37'),
(5, 'Sejarah', 'about', 'about.sejarah', 'AKTIF', NULL, '2025-03-02 20:49:26'),
(6, 'Visi & Misi', 'about', 'about.visi-misi', 'TIDAK', NULL, '2025-03-02 06:44:18'),
(7, 'Tim Kami', 'about', 'about.tim-kami', 'TIDAK', NULL, '2025-03-02 06:44:28'),
(8, 'Indikator Mutu', 'about', 'about.indikator-mutu', 'TIDAK', NULL, '2025-03-02 06:44:41'),
(9, 'Dokter', 'services', 'service.dokter', 'TIDAK', NULL, '2025-03-02 06:44:49'),
(10, 'Poliklinik', 'services', 'service.poliklinik', 'TIDAK', NULL, '2025-03-02 06:44:57'),
(11, 'Jadwal Dokter', 'services', 'service.jadwal-dokter', 'TIDAK', NULL, '2025-03-02 06:45:06'),
(12, 'Rawat Inap', 'services', 'service.rawat-inap', 'TIDAK', NULL, '2025-03-02 06:45:18'),
(13, 'Pelayanan Unit Khusus', 'services', 'service.pelayanan-unit-khusus', 'TIDAK', NULL, '2025-03-02 06:45:31'),
(14, 'Pelayanan Penunjang', 'services', 'service.pelayanan-penunjang', 'TIDAK', NULL, '2025-03-02 06:45:43'),
(15, 'Fasilitas Umum', 'services', 'service.fasilitas-umum', 'TIDAK', NULL, '2025-03-02 06:45:52'),
(16, 'Medical Check Up', 'services', 'service.medical-check-up', 'TIDAK', NULL, '2025-03-02 06:46:01'),
(17, 'Berita Terkini', 'news', 'news.berita-terkini', 'AKTIF', NULL, '2025-03-04 06:03:53'),
(18, 'Artikel Kesehatan', 'news', 'news.health-articles', 'TIDAK', NULL, '2025-03-02 06:46:20'),
(19, 'Galeri Kegiatan', 'news', 'news.galeri-kegiatan', 'TIDAK', NULL, '2025-03-02 06:46:30'),
(20, 'Kontak Kami', 'contact', 'contact.kontak-kami', 'TIDAK', NULL, '2025-03-02 06:46:41'),
(21, 'Kritik & Saran', 'contact', 'contact.kritik-saran', 'TIDAK', NULL, '2025-03-02 06:47:00'),
(22, 'Survey Kepuasan', 'contact', 'contact.survey-kepuasan', 'TIDAK', NULL, '2025-03-02 06:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2025_02_24_122620_create_users_table', 1),
(2, '2025_01_24_122620_create_users_table', 2),
(3, '0001_01_01_000001_create_cache_table', 3),
(4, '2025_02_24_130403_create_kategoris_table', 4),
(5, '2025_02_24_130419_create_kategori_agendas_table', 4),
(6, '2025_02_24_130431_create_kategori_downloads_table', 4),
(7, '2025_02_24_130449_create_kategori_galeris_table', 4),
(8, '2025_02_24_130505_create_kategori_staff_table', 4),
(9, '2025_02_24_130533_create_konfigurasis_table', 4),
(10, '2025_02_24_130403_create_kategori_table', 5),
(11, '2025_02_24_130419_create_kategori_agenda_table', 5),
(12, '2025_02_24_130431_create_kategori_download_table', 5),
(13, '2025_02_24_130449_create_kategori_galeri_table', 5),
(14, '2025_02_24_130533_create_konfigurasi_table', 5),
(15, '2025_02_24_142022_create_telescope_entries_table', 6),
(16, '0001_01_01_000002_create_jobs_table', 7),
(17, '2025_02_25_012214_create_agendas_table', 8),
(18, '2025_02_25_012226_create_beritas_table', 9),
(19, '2025_02_25_012239_create_downloads_table', 9),
(20, '2025_02_25_012255_create_galeris_table', 10),
(21, '2025_02_25_012301_create_headings_table', 10),
(22, '2025_02_25_012528_create_rekenings_table', 10),
(23, '2025_02_25_012536_create_staff_table', 10),
(24, '2025_02_25_012611_create_videos_table', 10),
(25, '2025_02_27_011101_create_banners_table', 11),
(26, '2025_02_27_061443_create_configs_table', 12),
(27, '2025_02_28_061443_create_configs_table', 13),
(28, '2025_02_28_011349_create_menus_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rekenings`
--

CREATE TABLE `rekenings` (
  `id_rekening` bigint UNSIGNED NOT NULL,
  `nama_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atas_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekenings`
--

INSERT INTO `rekenings` (`id_rekening`, `nama_bank`, `nomor_rekening`, `atas_nama`, `gambar`, `urutan`, `created_at`, `updated_at`) VALUES
(1, 'bri', '012100021', 'fad', '01JMXNZ5JJJSJANSQSNH3E6TVX.jpg', 1, '2025-02-24 21:31:15', '2025-02-24 21:31:15');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('50BpstqgGk9LcguGzGvDNRcZWIvpqNzoPODSpFIK', 1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoib0NjeFpnbm5Rd3dOT2hOY2NVclNON2NPOVpjMHhZbGtmVE5hNVZMcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9jb25maWdzLzEvZWRpdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkckl3WXVGeFQxR0JSZUJTNTV4TlRvZVZqVFhMbmxDaWJzWTBLVEUuM0FOd3gwZUdmYWFqb3UiO30=', 1741236105),
('7fTSHCeLe7wd9Srilv8DkgsCcrFk7zXYguZi3kqO', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVElua3hOb0M5ZThsT0dLanFqOFJsQ3NSYUJySm5mcFJJRlNoY1ZENSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1741149123),
('DaUQvfSarObodANlhqPPOQWyHkDzM4AzMWg1AOS9', 3, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiWFRQNURGUENTV0RtQk9WdVE5Y1JHcGF5dGFaUmpuWGRSODRkSllvQyI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJEZqblYzVTdNd0lrTEtNSDg5RE5FVXVkSkdNaENUT3cuejlXNDRWLjFSVkRNRU1tcG03T0pxIjtzOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMDoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2FwaS9uZXdzIjt9fQ==', 1741226290),
('eRNuvd8l6UdQ00hkgjc2ZtOsGCjQ3pi41jJcddev', NULL, '100.66.48.65', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicmdBRHl5NEU5WGE5MmNZTDhNeDNtQjdOSThvOXhYaDZIZ2hiVGw3cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly8xMDAuNjYuNDguNjU6ODAwMC9hcnRpY2xlL2Jlcml0YSUyMHVtdW0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1741226596),
('k4kE41eSsCfr6zFK9C9cRHfTzLeYyTPJZEDe80bu', 3, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUVVoemVTTHN6N2dOSUszbWxRbEpFZDd5N0RtcVpGVkxkVThyd3V6OCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJEZqblYzVTdNd0lrTEtNSDg5RE5FVXVkSkdNaENUT3cuejlXNDRWLjFSVkRNRU1tcG03T0pxIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovL2xvY2FsaG9zdDo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo4OiJmaWxhbWVudCI7YTowOnt9fQ==', 1741149081),
('MwbLeL46MXUJwR0GSK0NlBGxBe7CIgoG1aY14AaS', NULL, '192.168.100.190', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMEV0NWc0UEZ3bG1IdEtkdHl5b3VYRXF0YWpYNXptakc4U0Rxb3lWNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xOTIuMTY4LjE1MC4xOTU6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1741149846),
('PViJX5ir340p7FM82rkrDGe5kC4jgk0ONwqfGSeH', 1, '192.168.1.31', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36 OPR/117.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiYWF4T2I2QVZha215bzhTdDQwWWtFNFozRGNERFVMT3JmOG00YnRhcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly8xOTIuMTY4LjE1MC4xOTU6ODAwMC9hZG1pbi9kb3dubG9hZHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJHJJd1l1RnhUMUdCUmVCUzU1eE5Ub2VWalRYTG5sQ2lic1kwS1RFLjNBTnd4MGVHZmFham91Ijt9', 1741150166),
('vcug98fFGRl8J0GgbXuIR2VcvfiP5JgN7dPTLdr2', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV0ZpU2hmT3ZDQzBDWmdyOEZjS2dpMThUcGJ3UWlkTTF6SEJVNnJRYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1741226145),
('yKQQ4KKa8QzKi9rhQytPB8rT8iEvvMk7wSJqh27s', NULL, '100.79.208.110', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXJ6M2xpN1o2YWpldGFnbXdudTI5UVd3VHVicUNXQlhGRUEzNEF5RyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly8xMDAuNjYuNDguNjU6ODAwMC9hcnRpY2xlL2Jlcml0YSUyMHVtdW0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1741149336),
('zUeCwGorUEIegA4HhdSh88rUeDpTLeSZA9WciYml', NULL, '192.168.100.186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36 OPR/117.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWHZBYVhTeXo5SGxMcjNkc05yOFE1SnJLa3QzSjRrQ2g2UHRiUWNCNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xOTIuMTY4LjE1MC4xOTU6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1741226049);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED DEFAULT NULL,
  `id_kategori_staff` bigint UNSIGNED NOT NULL,
  `slug_staff` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_staff` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expertise` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_staff` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urutan` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `id_user`, `id_kategori_staff`, `slug_staff`, `nama_staff`, `jabatan`, `pendidikan`, `expertise`, `email`, `telepon`, `isi`, `gambar`, `status_staff`, `keywords`, `urutan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'sluq', 'fadhly', '1', 's5', '100', 'hhfadhly@gmail.com', '02102010', 'sandsjansidiain', 'sdians', 'aktif', 'qwerty', NULL, '2025-02-24 21:38:55', '2025-02-24 21:38:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses_level` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_rahasia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `akses_level`, `kode_rahasia`, `gambar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fadhly', 'hhfadhly@gmail.com', NULL, '$2y$12$rIwYuFxT1GBReBS55xNToeVjTXLnlCibsY0KTE.3ANwx0eGfaajou', '', NULL, NULL, 'DPIfjMkrfSIbtX7XxSseFXQK4hMo7dN1WzQevcHZ0OgEfQBRy38L69Uw3piK', '2025-02-24 05:56:15', '2025-02-24 05:56:15'),
(2, 'fadhly', 'fadhly860@gmail.com', NULL, 'H2381bgd', 'ADMIN', NULL, '01JN080CEQSNMK3VDNJJDPC7DR.jpg', NULL, '2025-02-25 21:24:58', '2025-02-25 21:24:58'),
(3, 'fad', 'fadh@gmail.com', NULL, '$2y$12$FjnV3U7MwIkLKMH89DNEUudJGMhCTOw.z9W44V.1RVDMEMmpm7OJq', 'ADMIN', NULL, '01JN0XCCGDHJ628D9JNFMHQKFZ.jpg', '69vLQe3ZGgRHBiRjte02qySLBF2kxBCHfH2kfPSn0rclcobWkp3A9SMzs4Su', '2025-02-26 03:38:31', '2025-02-26 03:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id_video` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` int DEFAULT NULL,
  `bahasa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id_video`, `judul`, `posisi`, `keterangan`, `video`, `urutan`, `bahasa`, `gambar`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'judul', 'tengah', 'judul di tengah', '01JMXPQ6PP3A2EAW48MADDXDJY.jpg', 1, 'EN', '01JMXPQ6PS12BH9Y9A8EQ8KA0P.jpg', 1, '2025-02-24 21:44:22', '2025-02-24 21:44:22'),
(2, 'judul', 'tengah', 'keterangan ', '01JMXV871P63SBXKHQMGJ6NS6Y.jpg', 1, 'EN', '01JMXV871SYDMTEC128C8DY9S3.jpg', 1, '2025-02-24 23:03:34', '2025-02-24 23:03:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id_agenda`),
  ADD KEY `agendas_id_user_foreign` (`id_user`),
  ADD KEY `agendas_id_kategori_agenda_foreign` (`id_kategori_agenda`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `beritas_id_user_foreign` (`id_user`),
  ADD KEY `beritas_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id_conf`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id_download`),
  ADD KEY `downloads_id_user_foreign` (`id_user`),
  ADD KEY `downloads_id_kategori_download_foreign` (`id_kategori_download`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `galeris_id_user_foreign` (`id_user`),
  ADD KEY `galeris_id_kategori_galeri_foreign` (`id_kategori_galeri`);

--
-- Indexes for table `headings`
--
ALTER TABLE `headings`
  ADD PRIMARY KEY (`id_heading`),
  ADD KEY `headings_id_user_foreign` (`id_user`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id_kategori`),
  ADD UNIQUE KEY `kategoris_nama_kategori_unique` (`nama_kategori`),
  ADD KEY `kategoris_id_user_foreign` (`id_user`);

--
-- Indexes for table `kategori_agendas`
--
ALTER TABLE `kategori_agendas`
  ADD PRIMARY KEY (`id_kategori_agenda`);

--
-- Indexes for table `kategori_downloads`
--
ALTER TABLE `kategori_downloads`
  ADD PRIMARY KEY (`id_kategori_download`);

--
-- Indexes for table `kategori_galeris`
--
ALTER TABLE `kategori_galeris`
  ADD PRIMARY KEY (`id_kategori_galeri`);

--
-- Indexes for table `kategori_staff`
--
ALTER TABLE `kategori_staff`
  ADD PRIMARY KEY (`id_kategori_staff`);

--
-- Indexes for table `konfigurasis`
--
ALTER TABLE `konfigurasis`
  ADD PRIMARY KEY (`id_konfigurasi`),
  ADD KEY `konfigurasis_id_user_foreign` (`id_user`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `rekenings`
--
ALTER TABLE `rekenings`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`),
  ADD KEY `staff_id_user_foreign` (`id_user`),
  ADD KEY `staff_id_kategori_staff_foreign` (`id_kategori_staff`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id_video`),
  ADD KEY `videos_id_user_foreign` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id_agenda` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id_banner` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id_berita` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id_conf` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id_download` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id_galeri` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `headings`
--
ALTER TABLE `headings`
  MODIFY `id_heading` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id_kategori` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori_agendas`
--
ALTER TABLE `kategori_agendas`
  MODIFY `id_kategori_agenda` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_downloads`
--
ALTER TABLE `kategori_downloads`
  MODIFY `id_kategori_download` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_galeris`
--
ALTER TABLE `kategori_galeris`
  MODIFY `id_kategori_galeri` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori_staff`
--
ALTER TABLE `kategori_staff`
  MODIFY `id_kategori_staff` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konfigurasis`
--
ALTER TABLE `konfigurasis`
  MODIFY `id_konfigurasi` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id_menu` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `rekenings`
--
ALTER TABLE `rekenings`
  MODIFY `id_rekening` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id_video` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agendas`
--
ALTER TABLE `agendas`
  ADD CONSTRAINT `agendas_id_kategori_agenda_foreign` FOREIGN KEY (`id_kategori_agenda`) REFERENCES `kategori_agendas` (`id_kategori_agenda`),
  ADD CONSTRAINT `agendas_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `beritas`
--
ALTER TABLE `beritas`
  ADD CONSTRAINT `beritas_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id_kategori`),
  ADD CONSTRAINT `beritas_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `downloads`
--
ALTER TABLE `downloads`
  ADD CONSTRAINT `downloads_id_kategori_download_foreign` FOREIGN KEY (`id_kategori_download`) REFERENCES `kategori_downloads` (`id_kategori_download`),
  ADD CONSTRAINT `downloads_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `galeris`
--
ALTER TABLE `galeris`
  ADD CONSTRAINT `galeris_id_kategori_galeri_foreign` FOREIGN KEY (`id_kategori_galeri`) REFERENCES `kategori_galeris` (`id_kategori_galeri`),
  ADD CONSTRAINT `galeris_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `headings`
--
ALTER TABLE `headings`
  ADD CONSTRAINT `headings_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD CONSTRAINT `kategoris_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `konfigurasis`
--
ALTER TABLE `konfigurasis`
  ADD CONSTRAINT `konfigurasis_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_id_kategori_staff_foreign` FOREIGN KEY (`id_kategori_staff`) REFERENCES `kategori_staff` (`id_kategori_staff`),
  ADD CONSTRAINT `staff_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
