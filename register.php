<?php
    require 'php/register.php';
    if (isset($_COOKIE["id"])) {
      header("Location: home.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GBI : House of Blessing</title>
    <link rel="icon" href="Images/HOB_Logo2.png">
    <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">"
    <link rel="stylesheet" href="css/stylesheet.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>
    <header>
      <div class="container">
        <div class="header-left">
          <div class="circle"></div>
          <img class="logo" src="Images/logo.png">
      </div>
    
    </header>
    
    <section class="login">
      <form action="" method="post">
          <h3>Register</h3>
          <input type="text" placeholder="username" id="username" class="box" name="username">
          <input type="password" placeholder="password" id="password" class="box" name="password">
          <button type="submit" class="login btn" name="register">Confirm</button>
      </form>
    </section>

  </body>
</html>


        



