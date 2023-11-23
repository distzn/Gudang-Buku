<?php
    include "../koneksi.php";

    $id_penulis = $_GET['id_penulis'];
    $telp_penulis = $_GET['telp_penulis'];
    $email = $_GET['email'];

    $query = "UPDATE tb_penulis SET telp_penulis = '$telp_penulis', email = '$email' WHERE id_penulis ='$id_penulis'";
    $sql = mysqli_query($koneksi, $query);
?>