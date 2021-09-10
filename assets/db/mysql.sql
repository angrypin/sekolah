-- 
-- Author: Angrypin
-- 

-- Database: lofi
CREATE DATABASE IF NOT EXISTS `lofi` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
use `lofi`;

-- 
-- Table users
-- 
CREATE TABLE `users` (
  `id` int(1) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user` char(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` char(23) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT `user`,
  `password` char(72) NOT NULL,
  `level` enum('admin', 'siswa') DEFAULT 'siswa'
);

-- admin:admin
INSERT INTO `users` (
  `user`,
  `password`,
  `level`
) VALUES (
  'admin',
  '$2y$10$lJsRssh6R5D5TdUrJLAJVeWRdbybt8o0nSbCbQx/Z4RhGc0E6UMji',
  'admin'
);

-- 12365:angrypin
INSERT INTO `users` (
  `user`, `name`, `password`
) VALUES (
  '12365',
  'M. Arifin Ilham',
  '$2y$10$pIpU5qhk0hzlNQLtHdaLrOeYvtDY8wbUc4kekA/BQ4G/.g6TdgUHO'
);

-- 
-- table fasilitas sekolah
-- 
CREATE TABLE `fasilitas` (
	`id` int(1) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`total` int(2) NOT NULL
); 

INSERT INTO `fasilitas` (
  `name`, `description`, `total`
) VALUES (
  'Lab. Komputer',
  'tempat riset ilmiah, eksperimen, pengukuran ataupun pelatihan ilmiah yang berhubungan dengan ilmu komputer dan memiliki beberapa komputer dalam satu jaringan untuk penggunaan oleh kalangan tertentu.',
  5
), (
  'Lab. IPA',
  'Tempat untuk mengadakan percobaan, penyelidikan, eksperimen, pengukuran ataupun pelatihan ilmiah dan sebagainya yang berhubungan dengan ilmu fisika, kimia, dan biologi atau bidang ilmu lain.',
  2
), (
  'Perpustakaan',
  'Sebuah koleksi besar buku dan majalah yang dibiayai dan dioperasikan oleh sebuah kota atau institusi, serta dimanfaatkan oleh masyarakat yang rata-rata tidak mampu membeli sekian banyak buku dengan biaya sendiri.',
  3
),(
  'Mushola',
  'Ruangan, tempat atau rumah kecil menyerupai masjid yang digunakan sebagai tempat salat dan mengaji bagi umat Islam.',
  2
), (
  'lapangan',
  'tempat untuk melakukan semua kegiatan baik upacara, olahraga, maupun kegiatan-kegiatan sekolah yang lain',
  1
), (
  'Taman',
  'ruang terbuka hijau yang bisa membuat suasana belajar menjadi lebih menyenangkan karena suasananya yang asri.',
  3
), (
  'Kantin',
  'Ruangan dalam sebuah gedung umum yang dapat digunakan pengunjungnya untuk makan, baik makanan yang dibawa sendiri maupun yang dibeli di sana.',
  2
), (
  'Koperasi',
  'koperasi yang didirikan di lingkungan sekolah yang anggota-anggotanya terdiri atas siswa sekolah.',
  2
), (
  'gedung aula',
  'ruangan besar yang dapat digunakan untuk rapat, upacara, dan sebagainya',
  1
);

-- 
-- table prestasi sekolah
-- 
CREATE TABLE `prestasi` (
	`id` int(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`year` year NOT NULL,
	`name` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`award` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`rank` int(1) NOT NULL,
	`type` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`level` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
);

-- source: http://sekolah.data.kemdikbud.go.id/index.php/chome/profil/08d9e915-d51a-442a-a904-5deb681d4e22

INSERT INTO `prestasi` (
  `year`, `name`, `award`, `rank`, `type`, `level`
) VALUES (
  2011,
  'KARATE',
  'KEJURDA KUSHINRYU M KARATE-DO INDONESIA(KKI)',
  2,
  'Olahraga',
  'Propinsi'
), (
  2011,
  'KARATE',
  'KEJUARAAN KARATE RADEN INTAN CUP III',
  3,
  'Olahraga',
  'Kab/kota'
), (
  2012,
  'SELEKSI TIMNAS',
  'H.M TAUFIQ KIEMAS',
  2,
  'Olahraga',
  'Nasional'
), (
  2012,
  'PENCAK SILAT',
  '-',
  1,
  'Olahraga',
  'Sekolah'
), (
  2013,
  'KARATE',
  'KEJURDA KARATE CHAMPHIONS GUBERNUR CUP III',
  1,
  'Olahraga',
  'Propinsi'
), (
  2013,
  'KARATE',
  'KEJURDA KUSHINRYU M KARATE-DO INDONESIA(KKI)',
  1,
  'Olahraga',
  'Propinsi'
), (
  2013,
  'SENAM RITMIK GYMNASTIK',
  'SURABAYA',
  3,
  'Olahraga',
  'Nasional'
), (
  2014,
  'PERSADA FAIR 2014 BASKETBALL PUTRI',
  'PEERSADA FAIR 2014',
  2,
  'Olahraga',
  'Sekolah'
), (
  2014,
  'FOURTEN CUP BASKET BALL COMPETITIOS 2015',
  'SMAN 14 BANDAR LAMPUNG',
  2,
  'Olahraga',
  'Sekolah'
), (
  2014,
  'GLORY COMPETITIONS OF SUDIRMAN 41',
  'SMAN 1 BANDAR LAMPUNG',
  3,
  'Olahraga',
  'Sekolah'
), (
  2014,
  'PBB',
  'SMP PERINTIS',
  1,
  'Olahraga',
  'Propinsi'
), (
  2014,
  'KEJUARAAN TERBUKA TAEKWONDO SABURAI CUP',
  'KOTA BANDAR LAMPUNG',
  2,
  'Olahraga',
  'Propinsi'
), (
  2014,
  'PENTAS SENI GLOCS 41',
  'SMAN 1 BANDAR LAMPUNG',
  3,
  'Seni',
  'Sekolah'
), (
  2014,
  'BASKETBALL PERSADA FAIR 2014',
  'SMK PERSADA BANDAR LAMPUNG',
  2,
  'Olahraga',
  'Sekolah'
), (
  2014,
  'FOURTEEN CUP BASKET BALL COMPETITION',
  'SMAN 14 BANDAR LAMPUNG',
  2,
  'Olahraga',
  'Sekolah'
), (
  2014,
  'KARATE',
  'FORKI L.A CUP II',
  3,
  'Olahraga',
  'Propinsi'
), (
  2015,
  'KARATE',
  'KEJURDA KARATE CHAMPHIONS WALIKOTA CUP',
  2,
  'Olahraga',
  'Propinsi'
), (
  2015,
  'BASKETBALL COMPETITION 2015 FOR JUNIOR',
  'SMA YP UNILA',
  3,
  'Olahraga',
  'Sekolah'
), (
  2015,
  'KARATE',
  'KEJURDA KARATE CHAMPHIONS GUBERNUR CUP V',
  3,
  'Olahraga',
  'Propinsi'
), (
  2015,
  'KARATE',
  'KEJURDA KARATE CHAMPHIONS WALIKOTA CUP',
  3,
  'Olahraga',
  'Propinsi'
), (
  2015,
  'KOMPETISI FUTSAL PEMUDA TEKNOKRAT',
  'PERGURUAN TINGGI TEKNOKRAT',
  2,
  'Olahraga',
  'Kab/kota'
), (
  2015,
  'TEKNOKTAR BASKETBALL COMPETITION 2015',
  'PERGURUAN TINGGI TEKNOKRAT',
  2,
  'Olahraga',
  'Kab/kota'
), (
  2015,
  'BASKETBALL COMPETITION 2015 FOR JUNIOR',
  'SMA YP UNILA BANDAR LAMPUNG',
  3,
  'Olahraga',
  'Sekolah'
), (
  2015,
  'PERSADA FAIR 2014 BASKETBALL PUTRI',
  'PEERSADA FAIR 2015',
  2,
  'Olahraga',
  'Sekolah'
), (
  2016,
  'KCCK IBI DARMAJAYA',
  'IBI DARMAJAYA',
  3,
  'Lain-lain',
  'Kab/kota'
);

-- 
-- jurusan
-- 
CREATE TABLE `jurusan` (
  `id` int(2) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `shortNname` char(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`longName` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
);

INSERT INTO `jurusan` (`shortName`, `longName`, `description`) VALUES (
  'RPL', 'Rekayasa Perangkat Lunak',
  'Rekayasa Perangkat Lunak adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.'
), (
  'TKJ', 'Teknik Komputer dan Jaringan',
  'Teknik Komputer dan Jaringan merupakan ilmu berbasis Teknologi Informasi dan Komunikasi terkait kemampuan algoritma, dan pemrograman komputer, perakitan komputer, perakitan jaringan komputer, dan pengoperasian perangkat lunak, dan internet.'
), (
  'MM', 'Multi Media',
  'Multimedia adalah penggunaan komputer untuk menyajikan dan menggabungkan teks, suara, gambar, animasi, audio, dan video dengan alat bantu dan tautan sehingga pengguna dapat melakukan navigasi, berinteraksi, berkarya, dan berkomunikasi. Multimedia sering digunakan dalam dunia informatika.'
), (
  'TITL', 'Teknik Instalasi Tenaga Listrik',
  'Jurusan Teknik Instalasi Pemanfaatan Tenaga Listrik mendidik peserta didik dengan keahlian dan ketrampilan dalam Perencanaan dan Pemasangan Instalasi Penerangan dan Tenaga; Pemasangan dan pengoperasian motor listrik dengan kendali Elektromekanik, Elektronik dan PLC (Programable Logic Controller)'
), (
  'APH', 'Perhotelan',
  'Perhotelan merupakan bidang ilmu yang mempelajari pengelolaan hotel serta cara menyeimbangkan aspek wisata dan manajemen bisnis untuk mencapai kesuksesan. Beberapa topik yang akan diajarkan antara lain mengenai pelayanan yang memuaskan bagi pelanggan, melindungi budaya lokal, manfaat ekonomi yang diperoleh bagi masyarakat sekitar serta kesejahteraan karyawan. Selain itu kamu pun akan dibekali dengan pelajaran bahasa asing untuk menghadapi tren wisatawan internasional yang terus meningkat.'
), (
  'Ak', 'Akuntansi',
  'mempelajari materi terkait metode pencatatan dan penyusunan laporan keuangan yang berguna membantu pemangku kepentingan dalam proses pengambilan keputusan. Akuntansi memang dikenal sangat dekat dengan angka, namun seiring perkembangannya akuntansi juga sangat dipengaruhi oleh tingkah laku manusia.'
), (
  'Upw', 'pariwisata',
  'program studi yang mempelajari kegiatan yang bersifat komersial yang mengatur, menyediakan, dan menyelenggarakan pelayanan bagi seseorang, sekelompok orang yang melakukan perjalanan dengan tujuan utama yaitu berwisata.'
);

-- 
-- kelas
-- 
CREATE TABLE `kelas` (
  `id` int(1) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `kelas` char(3) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jurusanId` int(2) NOT NULL,
  `totalKelas` int(2) NOT NULL,
  `totalSiswa` int(2) NOT NULL,
  CONSTRAINT `jurusanId` FOREIGN KEY (`jurusanId`) REFERENCES `jurusan`(`id`)
);

INSERT INTO `kelas` (`kelas`, `jurusanId`, `totalKelas`, `totalSiswa`) VALUES
('X', 1, 4, 31),
('X', 2, 4, 30),
('X', 3, 2, 31),
('X', 4, 1, 30),
('X', 5, 3, 31),
('X', 6, 3, 28),
('X', 7, 2, 31),
('XI', 1, 4, 31),
('XI', 2, 1, 31),
('XI', 3, 2, 29),
('XI', 4, 1, 30),
('XI', 5, 1, 28),
('XI', 6, 4, 30),
('XI', 7, 3, 30),
('XII', 1, 1, 29),
('XII', 2, 1, 31),
('XII', 3, 4, 29),
('XII', 4, 4, 31),
('XII', 5, 2, 29),
('XII', 6, 1, 28),
('XII', 7, 1, 30);