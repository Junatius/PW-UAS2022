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
          <a href="#">Beranda</a>
          <a href="asset.php">Aset</a>
          <a href="video.php">Video</a>
        </div>
        <form action="" method="post">
            <button style="margin-top: 30px; margin-left: 10px;" type="submit" name="logout">Log Out</button>
        </form>
      </div>
    </header>
    <div class="rectangle"></div>
    <div class="top-wrapper">
      <div class="container">
        <h1>Gereja Bethel Indonesia</h1>
        <h1>House of Blessing</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur fuga aliquid, vero dolorum </p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ex maiores debitis atque mollitia voluptati</p>
        <div class="btn-wrapper">
          <img id="logoimg" src="Images/HOB_Logo2.png" alt="Logo" height="120">
        </div>
      </div>
    </div>
    <div class="lesson-wrapper">
      <div class="container">
        <div class="heading">
          <h2>I B A D A H</h2>
        </div>
        <div class="lessons">
          <div class="lesson">
            <div class="lesson-icon1">
              <img src="Images/WhatsApp Image 2022-04-07 at 10.12.17 AM (3).jpeg">
            </div>
            <p class="text-contents">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos ea nam non eveniet deleniti. Quod nemo quisquam doloribus asperiores rem quae odio natus ducimus numquam. Culpa numquam expedita et eum?</p>
          </div>
          <div class="lesson">
            <div class="lesson-icon2">
              <img src="Images/WhatsApp Image 2022-04-07 at 10.12.18 AM (4).jpeg">
            </div>
            <p class="text-contents">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quis, magnam omnis fugit nam doloremque, quas, explicabo rerum minus excepturi temporibus alias mollitia aliquam maxime voluptatem. Iusto officiis tempora velit?</p>
          </div>
          <div class="lesson">
            <div class="lesson-icon3">
              <img src="Images/WhatsApp Image 2022-04-04 at 9.28.48 PM.jpeg">
            </div>
            <p class="text-contents">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, quam. A eligendi repudiandae dignissimos voluptatem incidunt inventore doloribus dolores nobis, deleniti, rerum itaque alias nulla delectus nemo ad facere culpa!</p>
          </div>
          <div class="lesson">
            <div class="lesson-icon4">
              <img src="Images/9c71ae6d-dea0-4d3f-ad60-1bcc0d4ccd0b.png">
            </div>
            <p class="text-contents">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci dicta rerum officia! Repellat corporis deserunt, quod maxime quos nisi rerum sunt vel non aspernatur amet eveniet delectus veniam porro laudantium?</p>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
    <div class="message-wrapper">
      <div class="container">
        <div class="heading">
          <h3>Karena apa yang kamu tabur, itu juga yang akan kamu tuai</h3>
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
  </body>
</html>


        



