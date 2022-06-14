<?php
    require 'php/logout.php';
    if (!isset($_COOKIE["id"])) {
      header("Location: index.php");
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GBI : House of Blessing</title>
        <link rel="icon" href="Images/HOB_Logo2.png">
        <link rel="stylesheet" href="css/stylesheet.css">
        <link rel="stylesheet" href="responsive.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
          <div class="container">
            <div class="header-left">
              <div class="circle"></div>
              <img class="logo" src="Images/e0ebac5f-26d6-40d6-8202-703de23f57e1-removebg-preview.png">
            </div>
            <a href="#" class="menu-icon"><span class="fa fa-bars"></span></a>
            <div class="header-right">
              <a href="home.php">Beranda</a>
              <a href="#">Aset</a>
              <a href=video.php>Video</a>
            </div>
            <form action="" method="post">
                  <button style="margin-top: 30px; margin-left: 10px;" type="submit" name="logout">Log Out</button>
              </form>
          </div>
        </header>
        <?php 
            include 'php/show.php';
        ?>
      <div class="edit">
        <h3>Klik tombol dibawah ini jika ingin mengedit</h3>
        <button id="button1" type="button">Edit</button>
          <div class="boxedit" id="box_edit">
            <div class="close">
              <button id="cbutton">&times;</button>
            </div>
          <label for="select1">Nama Item : </label>
            <select name="select1" id="select1">
              <option value="Speaker">Speaker</option>
              <option value="Mixer">Mixer</option>
              <option value="Mikrofin">Mikrofin</option>
              <option value="Kursi">Kursi</option>
            </select>
            <br>
          <label for="jumlahbaru">Jumlah Item : </label>
            <input type="number" id="jumlahbaru" value="0" min="0" step="1">
            <br>
          <label for="keterangan1">Keterangan : </label>
            <input type="text" id="keterangan1">
            <div class="pos-button">
              <button id="button2" type="button">Konfirmasi</button>
            </div>
        </div>
      </div>
      <footer>
        <div class="container ">
          <div class="social-media">
            <a href="https://www.facebook.com/gbi.hob.18">
              <img src="Images/OIP__1_-removebg-preview.png" alt="Facebook" height="30">
            </a>
          </div>
          <div class="social-media">
            <a href="https://www.instagram.com/house_ofblessings/">
              <img src="Images/Instagram_logo_2016.svg.webp" alt="Instagram" height="32">
            </a>
          </div>
          <p></p>
          <div class="social-media">
            <a href="https://www.youtube.com/channel/UCBYQCf8sajWHCVP9zvdj9fg">
              <img src="Images/New-YouTube-logo-removebg-preview.png" alt="Youtube" height="30">
            </a>
        </div>
      </footer>
    <script src="script.js"></script>
    </body>
</html>