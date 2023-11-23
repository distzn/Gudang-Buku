<?php
    include "../koneksi.php";
    
    $nama_genre = $_POST['nama_genre'];

    $sql = "INSERT INTO tb_genre (nama_genre)
             VALUES ('$nama_genre')";
    $query = mysqli_query($koneksi,$sql);
    if($query){
            echo "Genre berhasil ditambah";
            header('location:show-genre.php');
    }else{
        echo 'Gagal Input'; 
    }
?>
