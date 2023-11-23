<?php
    include "../koneksi.php";
    
        $nama_penulis = $_POST['nama_penulis'];    
        $no_telp      = $_POST['telp_penulis'];
        $jk           = $_POST['jk'];
        $email        = $_POST['email'];
        $alamat       = $_POST['alamat'];

    $sql = "INSERT INTO tb_penulis VALUES (null,'$nama_penulis', '$no_telp', '$jk', '$email', '$alamat')";
    $query = mysqli_query($koneksi,$sql); 
    if($query){
        echo "Penulis berhasil ditambah";
        header('location:form_penulis.php');
    }else
    {
    echo 'Gagal Input'; 
    }
?>
