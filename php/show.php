<?php

    $data = mysqli_connect("localhost", "root", "", "assignment");
    $acc = mysqli_query($data, "SELECT * FROM item");

    while ( $row = mysqli_fetch_assoc($acc)) {
        echo "<div class='rectangle-info'>
        <img src='images/$row[picture]' alt='Speaker'>
          <div class='nama-item'>
                <p>Nama Item</p>
                <p id='nama0'>$row[nama]</p>
            </div>
            <div class='jumlah-item'>
                <p>Jumlah Item</p>
                <p id='jumlah0'>$row[jumlah]</p>
            </div>
                <div class='ket-item'>
                <p>Keterangan</p>
                <p id='ket0'>$row[keterangan]</p>
          </div>
        </div>
      </div>";
    }


?>