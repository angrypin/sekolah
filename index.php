<?php
const TITLE = 'SMK Negeri 9 LoFI';
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">

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
        <div class="uk-navbar-right">
          <ul class="uk-navbar-nav">
            <li><a href="#">beranda</a></li>
            <li><a href="#sambutan">sambutan</a></li>
            <li><a href="#julas">jurusan dan kelas</a></li>
            <li><a href="#">profil</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="uk-container" id="idk">
      <article class="uk-article">
        <h1 class="uk-article-title">Sambutan</h1>
        <div class="uk-panel">
          <img class="uk-align-left uk-margin-remove-adjacent" src="assets/images/kepsek.png" alt="kepsek">
          <p>Assalamu'alaikum wr.wb.</p>
          <p>Puji syukur kepada Allah SWT, Tuhan Yang Maha Esa yang telah memberikan rahmat dan anugerahNya sehingga website SMK Negeri 9 LoFI ini dapat terbit. Salah satu tujuan dari website ini adalah untuk memenuhi tugas dari guru Pemrograman Web Perangkat Bergerak. Kami sadar sepenuhnya bahwa website ini alakadarnya dan menggunakan framework, sehingga kami berusaha mewujudkan hal tersebut semaksimal mungkin. Semoga dengan adanya website ini dapat membantu dan bermanfaat, terutama informasi yang berhubungan dengan pendidikan dan ilmu pengetahuan.</p>
          <p>Besar harapan kami, sarana ini dapat memberi manfaat bagi semua pihak yang ada dilingkup pendidikan dan pemerhatikan pendidikan secara khusus bagi SMK Negeri 9 LoFI.</p>
          <p>Akhirnya kami mengharapkan masukan dari berbagai pihak untuk website ini agar kami terus belajar dan meng-update diri, sehingga tampilan, isi dan mutu website akan terus berkembang dan lebih baik nantinya. Terima kasih atas kerjasamanya, maju terus untuk mencapai SMK Negeri 9 LoFI yang lebih baik lagi.</p>
          <p>Wassalamu'alaikum wr.wb.</p>
        </div>
        <h1 class="uk-article-title">Jurusan dan Kelas</h1>
        <table class="uk-table uk-table-striped uk-table-hover uk-table-justify">
          <thead>
            <tr>
              <th>#</th>
              <th>jurusan</th>
              <th>deskripsi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>blaldb</td>
              <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque molestias ab eius, harum id quod tenetur rerum voluptatum voluptates sed fugit minima, neque vitae quisquam repudiandae, enim voluptas totam qui.</td>
            </tr>
            <tr>
              <td>1</td>
              <td>blaldb</td>
              <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque molestias ab eius, harum id quod tenetur rerum voluptatum voluptates sed fugit minima, neque vitae quisquam repudiandae, enim voluptas totam qui.</td>
            </tr>
            <tr>
              <td>1</td>
              <td>blaldb</td>
              <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque molestias ab eius, harum id quod tenetur rerum voluptatum voluptates sed fugit minima, neque vitae quisquam repudiandae, enim voluptas totam qui.</td>
            </tr>
            <tr>
              <td>1</td>
              <td>blaldb</td>
              <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque molestias ab eius, harum id quod tenetur rerum voluptatum voluptates sed fugit minima, neque vitae quisquam repudiandae, enim voluptas totam qui.</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>#</th>
              <th>jurusan</th>
              <th>deskripsi</th>
            </tr>
          </tfoot>
        </table>
      </article>
    </div>
  </body>
</html>