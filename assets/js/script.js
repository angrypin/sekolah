let no = 1;
const jurusan = [
  {
    jurusan: "Rekayasa Perangkat Lunak",
    deskripsi: "Rekayasa Perangkat Lunak adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas."
  },
  {
    jurusan: "Teknik Komputer Jaringan",
    deskripsi: "Teknik Komputer dan Jaringan merupakan ilmu berbasis Teknologi Informasi dan Komunikasi terkait kemampuan algoritma, dan pemrograman komputer, perakitan komputer, perakitan jaringan komputer, dan pengoperasian perangkat lunak, dan internet."
  },
  {
    jurusan: "Multi Media",
    deskripsi: "Multimedia adalah penggunaan komputer untuk menyajikan dan menggabungkan teks, suara, gambar, animasi, audio, dan video dengan alat bantu dan tautan sehingga pengguna dapat melakukan navigasi, berinteraksi, berkarya, dan berkomunikasi. Multimedia sering digunakan dalam dunia informatika."
  },
  {
    jurusan: "Teknik Elektro",
    deskripsi: "Teknik elektro merupakan ilmu teknik yang mempelajari sifat-sifat elektron yang kita kenal sebagai listrik. Mahasiswa Teknik Elektro mempelajari aplikasi dan pemanfaatan listrik dalam kehidupan sehari-hari, serta teknologi yang terkait. Cakupan teknik elektro sangat luas, mulai dari sumber pembangkit tenaga listrik, sistem jaringan distribusi, sampai pada pemanfaatannya oleh pengguna akhir. Teknik Elektro pun dipecah menjadi beberapa konsentrasi, seperti teknik elektronika, teknik listrik, teknik instrumentasi, sampai teknik komputer dan telekomunikasi."
  },
  {
    jurusan: "Tata Boga",
    deskripsi: "Tata boga adalah suatu disiplin ilmu terkait dengan seni dalam menyiapkan, memasak, dan menghidangkan makanan siap saji. Di Indonesia, disiplin ilmu ini dapat dipelajari di Sekolah Menengah Kejuruan atau di tingkat sekolah tinggi terkait Industri pariwisata dan industri perhotelan."
  },
  {
    jurusan: "Perhotelan",
    deskripsi: "Perhotelan merupakan bidang ilmu yang mempelajari pengelolaan hotel serta cara menyeimbangkan aspek wisata dan manajemen bisnis untuk mencapai kesuksesan. Beberapa topik yang akan diajarkan antara lain mengenai pelayanan yang memuaskan bagi pelanggan, melindungi budaya lokal, manfaat ekonomi yang diperoleh bagi masyarakat sekitar serta kesejahteraan karyawan. Selain itu kamu pun akan dibekali dengan pelajaran bahasa asing untuk menghadapi tren wisatawan internasional yang terus meningkat."
  },
  {
    jurusan: "akuntansi",
    deskripsi: "mempelajari materi terkait metode pencatatan dan penyusunan laporan keuangan yang berguna membantu pemangku kepentingan dalam proses pengambilan keputusan. Akuntansi memang dikenal sangat dekat dengan angka, namun seiring perkembangannya akuntansi juga sangat dipengaruhi oleh tingkah laku manusia."
  },
  {
    jurusan: "pariwisata",
    deskripsi: "program studi yang mempelajari kegiatan yang bersifat komersial yang mengatur, menyediakan, dan menyelenggarakan pelayanan bagi seseorang, sekelompok orang yang melakukan perjalanan dengan tujuan utama yaitu berwisata."
  }
];

jurusan.forEach((x) => {
  $('#jurusan table tbody').append(
    `<tr>
      <td>${no}</td>
      <td>${x['jurusan']}</td>
      <td>${x['deskripsi']}</td>`
  );
  no++;
});