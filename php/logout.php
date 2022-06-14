<?php 
    if (isset($_POST["logout"])) {
        unset($_COOKIE["id"]);
        setcookie("id", "", time()-3600);
        header("Location: login.php");
    }
?>