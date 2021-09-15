<?php
require_once('assets/php/config.php');
$jurusan = $sql->query('SELECT `longName`, `description` FROM `jurusan`');
$kelas = $sql->query('
SELECT `kelas`.`kelas`, `jurusan`.`longName`, `kelas`.`totalKelas`, `kelas`.`totalSiswa`
FROM `kelas` JOIN `jurusan`
ON `kelas`.`jurusanId` = `jurusan`.`id`;
');
$fasilitas = $sql->query('SELECT `name`, `description`, `total` FROM `fasilitas`');
$prestasi = $sql->query('SELECT * FROM `prestasi`');
$total = array(
  'kelas' => 0,
  'siswa' => 0
);
session_start();
if($_SESSION['loged_in']) {
  $middleText = $_SESSION['user'];
  $hashTag = 'user';
} else {
  $middleText = 'login';
  $hashTag = 'login';
}
unset($sql);
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="assets/css/style.css?v=<?=time()?>">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit-icons.min.js"></script>
  </head>
  <body>
    <div id="home">
      <h1><?=TITLE?></h1>
    </div>
    <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #idk">
      <div class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-left">
          <a class="uk-navbar-item uk-logo"><?=TITLE?></a>
        </div>
        <div class="uk-navbar-center">
          <ul class="uk-navbar-nav">
            <li><a href="#<?=$hashTag?>" class="uk-button uk-button-secondary" uk-toggle><?=$middleText?></a></li>
          </ul>
        </div>
        <div class="uk-navbar-right">
          <ul class="uk-navbar-nav">
            <li><a href="#">beranda</a></li>
            <li><a href="#sambutan">sambutan</a></li>
            <li><a href="#julas">jurusan dan kelas</a></li>
            <li class="uk-iconnav">
              <a href="#" uk-icon="icon: triangle-right">profil</a>
              <div class="uk-navbar-dropdown">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                  <li><a href="#profil">profil sekolah</a></li>
                  <li><a href="#fasilitas">fasilitas</a></li>
                  <li><a href="#prestasi">prestasi</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="uk-flex-top" uk-modal id="<?=$hashTag?>">
      <div class="uk-modal-dialog uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
<?php if($_SESSION['loged_in']) { ?>
        <div class="uk-modal-header">
          <h1 class="uk-modal-title">informasi user</h1>
        </div>
        <div class="uk-modal-body">
          <div class="uk-container">
            <div class="uk-panel">
              <img class="uk-align-left uk-margin-remove-adjacent" src="assets/images/user.png" alt="<?=$_SESSION['name']?>" style="width: 200px">
              <table>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td><?=$_SESSION['name']?></td>
                </tr>
                <tr>
                  <td>NIS</td>
                  <td>:</td>
                  <td><?=$_SESSION['user']?></td>
                </tr>
                <tr>
                  <td>level</td>
                  <td>:</td>
                  <td><?=$_SESSION['level']?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="uk-modal-footer uk-text-right">
          <button id="buttonLogout" class="uk-button uk-button-danger" type="button">Logout</button>
        </div>
<?php } else { ?>
        <div class="uk-modal-header">
          <h1 class="uk-modal-title">login</h1>
        </div>
        <div class="uk-modal-body">
          <form>
            <div class="uk-margin">
              <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input id="username" type="text" class="uk-input" placeholder="username">
              </div>
            </div>
            <div class="uk-margin">
              <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: lock"></span>
                <input id="password" type="password" class="uk-input" placeholder="password">
              </div>
            </div>
          </form>
        </div>
        <div class="uk-modal-footer uk-text-right">
          <button id="buttonLogin" class="uk-button uk-button-primary" type="button">Login</button>
        </div>
<?php } ?>
      </div>
    </div>
    <div class="uk-container" id="idk">
      <article class="uk-article">
        <hr class="uk-divider-icon">
        <h1 class="uk-article-title" id="sambutan">Sambutan</h1>
        <div class="uk-panel">
          <img class="uk-align-left uk-margin-remove-adjacent" src="assets/images/kepsek.png" alt="kepsek">
          <p>Assalamu'alaikum wr.wb.</p>
          <p>Puji syukur kepada Allah SWT, Tuhan Yang Maha Esa yang telah memberikan rahmat dan anugerahNya sehingga website SMK Negeri 9 LoFI ini dapat terbit. Salah satu tujuan dari website ini adalah untuk memenuhi tugas dari guru Pemrograman Web Perangkat Bergerak. Kami sadar sepenuhnya bahwa website ini alakadarnya dan menggunakan framework, sehingga kami berusaha mewujudkan hal tersebut semaksimal mungkin. Semoga dengan adanya website ini dapat membantu dan bermanfaat, terutama informasi yang berhubungan dengan pendidikan dan ilmu pengetahuan.</p>
          <p>Besar harapan kami, sarana ini dapat memberi manfaat bagi semua pihak yang ada dilingkup pendidikan dan pemerhatikan pendidikan secara khusus bagi SMK Negeri 9 LoFI.</p>
          <p>Akhirnya kami mengharapkan masukan dari berbagai pihak untuk website ini agar kami terus belajar dan meng-update diri, sehingga tampilan, isi dan mutu website akan terus berkembang dan lebih baik nantinya. Terima kasih atas kerjasamanya, maju terus untuk mencapai SMK Negeri 9 LoFI yang lebih baik lagi.</p>
          <p>Wassalamu'alaikum wr.wb.</p>
        </div>
        <hr class="uk-divider-icon">
        <h1 class="uk-article-title" id="julas">Jurusan dan Kelas</h1>
        <h3 class="uk-article-title">Jurusan</h3>
        <hr class="uk-divider-small">
        <table class="uk-table uk-table-striped uk-table-hover uk-table-justify">
          <thead>
            <tr>
              <th>#</th>
              <th>jurusan</th>
              <th>deskripsi</th>
            </tr>
          </thead>
          <tbody>
<?php
$no = 0;
while($row = $jurusan->fetch()) {
  $no++;
?>
            <tr>
              <td><?=$no?></td>
              <td><?=$row[0]?></td>
              <td><?=$row[1]?></td>
            </tr>
<?php } ?>
          </tbody>
          <tfoot>
            <tr>
              <th>#</th>
              <th>jurusan</th>
              <th>deskripsi</th>
            </tr>
          </tfoot>
        </table>
        <h3 class="uk-article-title">Kelas</h3>
        <hr class="uk-divider-small">
        <table class="uk-table uk-table-striped uk-table-hover uk-table-justify">
          <thead>
            <tr>
              <th>kelas</th>
              <th>jurusan</th>
              <th>total kelas</th>
              <th>total siswa</th>
            </tr>
          </thead>
          <tbody>
<?php
while($row = $kelas->fetch()) {
  $total['kelas'] += $row[2];
  $total['siswa'] += $row[3];
?>
            <tr>
              <td><?=$row[0]?></td>
              <td><?=$row[1]?></td>
              <td><?=$row[2]?></td>
              <td><?=$row[3]?></td>
            </tr>
<?php } ?>
          </tbody>
          <tfoot>
            <tr>
              <th>kelas</th>
              <th>jurusan</th>
              <th>total kelas</th>
              <th>total siswa</th>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td><?=$total['kelas']?></td>
              <td><?=$total['siswa']?></td>
            </tr>
          </tfoot>
        </table>
        <hr class="uk-divider-icon">
        <h2 class="uk-article-title" id="profil">Profil sekolah</h2>
        <hr class="uk-divider-small">
        <h4>sejarah singkat</h4>
        <p>SMK Negeri 9 LoFI merupakan salah satu Lembaga Pendidikan Menengah Kejuruan di Kota Maya yang menyelenggarakan Program Pendidikan Kejuruan 4 Tahun, dan merupakan salah satu SMK dari 8 (delapan) SMK Negeri yang memiliki program 4 (empat) Tahun, di atas tanah seluas 3,4 Ha, dan telah menerima siswa sejak sekolah ini belum dibangun, yang diresmikan pada tanggal 8/13/21.</p>
        <p>Pilihan orangtua dan siswa untuk belajar di SMK Negeri 9 beralasan dengan kondisinya yang sangat kondusif. Sebagai sekolah favorit terbukti dengan prestasinya yang menonjol baik pada bidang akademik maupun non akademik.</p>
        <p>Pada Tahun 2022, SMK Negeri 9 menerapkan kurikulum berbasis kompetensi (KBK) atas inisiatp sendiri. Dengan pelaksnaaan mandiri KBK di sekolah, pimpinan dan guru berupaya melaksanakan model pebelajaran yang kreatif, aktif, dan memaksimalkan pemberdayaan siswa dalam aktifitas pembelajaran</p>
        <h4>Visi dan Misi</h4>
        <h5>Visi sekolah</h5>
        <p>Menjadi Sekolah Religius, Berkarakter, dan Berwawasan Lingkungan</p>
        <h5>Misi sekolah</h5>
        <ul>
          <li>Melaksanakan Standar Nasional Pendidikan (SNP) yang diperkaya dengan standar internasional (University of Cambridge International Examination).</li>
          <li>Melaksanakan program peningkatan kompetensi siswa di bidang akademik dan non akademik yang dapat bersaing di tingkat nasional dan internasional</li>
          <li>Melaksanakan program peningkatan kompetensi pendidik dan tenaga kependidikan).</li>
          <li>Melaksanakan program kerjasama dan kemitraan dengan intitusi pendidikan, pemerintah, usaha, dan industri</li>
          <li>Melaksanakan pengelolaan layanan pendidikan sesuai standar mutu ISO 9001 dan 14001</li>
          <li>Melaksanakan pendidikan karakter agar terwujud lulusan yang beriman, bertakwa, dan berakhlak mulia</li>
          <li>Melaksanakan program pengembangan sekolah ramah sosial dan ramah lingkungan</li>
        </ul>
        <h2 class="uk-article-title" id="fasilitas">Fasilitas</h2>
        <hr class="uk-divider-small">
        <table class="uk-table uk-table-striped uk-table-hover uk-table-justify">
          <thead>
            <tr>
              <th>#</th>
              <th>nama</th>
              <th>deskripsi</th>
              <th>Jumlah</th>
            </tr>
          </thead>
          <tbody>
<?php
$no = 0;
while($row = $fasilitas->fetch()) {
  $no++;
?>
            <tr>
              <td><?=$no?></td>
              <td><?=$row[0]?></td>
              <td><?=$row[1]?></td>
              <td><?=$row[2]?></td>
            </tr>
<?php } ?>
          </tbody>
          <tfoot>
            <tr>
              <th>#</th>
              <th>nama</th>
              <th>deskripsi</th>
              <th>Jumlah</th>
            </tr>
          </tfoot>
        </table>
        <h2 class="uk-divider-title" id="prestasi">Prestasi</h2>
        <table class="uk-table uk-table-striped uk-table-hover uk-table-justify">
          <thead>
            <tr>
              <th>tahun</th>
              <th>nama</th>
              <th>penghargaan</th>
              <th>peringkat</th>
              <th>jenis</th>
              <th>tingkat</th>
            </tr>
          </thead>
          <tbody>
<?php while($row = $prestasi->fetch()) { ?>
            <tr>
              <td><?=$row[1]?></td>
              <td><?=$row[2]?></td>
              <td><?=$row[3]?></td>
              <td><?=$row[4]?></td>
              <td><?=$row[5]?></td>
              <td><?=$row[6]?></td>
            </tr>
<?php } ?>
          </tbody>
          <tfoot>
            <tr>
              <th>tahun</th>
              <th>nama</th>
              <th>penghargaan</th>
              <th>peringkat</th>
              <th>jenis</th>
              <th>tingkat</th>
            </tr>
          </tfoot>
        </table>
      </article>
      <hr class="uk-divider-icon">
      <p class="uk-text-center">Made with Hand by Angrypin <hr></p>
    </div>
    <script type="text/javascript" src="assets/js/script.js"></script>
  </body>
</html>