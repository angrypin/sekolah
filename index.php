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

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit-icons.min.js"></script>
  </head>
  <body>
    <div id="home">
      <h1><?=TITLE?></h1>
    </div>
    <div class="uk-navbar-container" uk-navbar>
      <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo"><?=TITLE?></a>
      </div>
      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
          <li><a href="#">navbar</a></li>
          <li><a href="#">navbar</a></li>
          <li><a href="#">navbar</a></li>
          <li><a href="#">navbar</a></li>
        </ul>
      </div>
    </div>
  </body>
</html>