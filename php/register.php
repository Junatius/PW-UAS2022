<?php
require 'login.php';

if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == null || $password == null) {
            echo "<script> alert ('semua data harus dimasukan'); </script>";
        }

    $query = "INSERT INTO account VALUES
                ('', '$username', '$password')";

    echo "<script>alert('akun berhasil ditambahkan');</script>";
    mysqli_query($data, $query);
    header("Location: login.php");
    return mysqli_affected_rows($data);
}


?>