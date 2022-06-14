<?php
    
    $data = mysqli_connect("localhost", "root", "", "assignment");
    $acc = mysqli_query($data, "SELECT * FROM account");

    if (isset($_POST["login"])) {
        $user = $_POST["username"];
        $pass = $_POST["password"];

        if ($user == null || $pass == null) {
            echo "<script>
                    alert('username atau password tidak boleh kosong');
                  </script>";
                  return false;
        } 
        while ( $row = mysqli_fetch_assoc($acc)) {
            if ($row["username"] == $user && $row["password"] == $pass) {
                setcookie("id", $row["id"], time() + 3600);
                header("Location: beranda.php");
                exit;
                return;
            } 
        }
        echo "<script>
                alert('username atau password yang anda masukan salah');
              </script>";       
    }
?>

