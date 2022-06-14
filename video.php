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
                <a href="asset.php">Aset</a>
                <a href="#">Video</a>
              </div>
              <form action="" method="post">
                  <button style="margin-top: 30px; margin-left: 10px;" type="submit" name="logout">Log Out</button>
              </form>
            </div>
          </header>
        <div class="judul">
            <h1>Anggota Kelompok Pemrograman Web</h1>
            <h2>Kelas TIK2032D</h2>
        </div>
        <div class="identitas">
            <ol>
                <li>Josua Armando Watuseke (20021106150)</li>
                <li>Gloria Gabriela Regar (20021106088)</li>
                <li>Crysanti Andressa Angela Harjono (20021106020)</li>
                <li>Christophel Juniar Ignatius Soge (20021106002)</li>
            </ol>
        </div>
        <div class="video-link">
          <a href="https://drive.google.com/drive/folders/1vl6RLq4J6JdkgUsUL_QWaa9EL6wFZvI6?usp=sharing">Link Video</a>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <footer class="bawah">
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