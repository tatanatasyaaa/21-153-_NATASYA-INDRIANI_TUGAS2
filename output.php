<?php
    // variabel baru
    $lengkap = ($_POST["nama"]);
    $nim = (int)($_POST["nim"]);
    $age = (int)$_POST["umur"];
    $ttl = (int)$_POST["lahir"];
    $tinggi = (float)$_POST["tinggi"];
    $hobbi = (string)$_POST["hobi"];

    //menampilkan data
    echo "Nama Lengkap = " . $lengkap . "<br>";
    echo "Nim = " . $nim . "<br>";
    echo "Umur = " . $age . "<br>";
    echo "Tanggal Lahir = " . $ttl . "<br>";
    echo "tinggi = " . $tinggi . "<br>";
    echo "Hobi = " . $hobbi . "<br>";
?>