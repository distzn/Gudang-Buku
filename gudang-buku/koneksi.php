<?php

    $server   = "localhost";
    $user     = "root";
    $password = "";
    $database = "gudang_buku";

    $koneksi = mysqli_connect($server,$user,$password,$database) or die
     ('Gagal koneksi ke database');

    $db = mysqli_select_db($koneksi,$database) or die
     ('Database tidak ditemukan');
?>