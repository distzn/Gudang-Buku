<?php
    include "../koneksi.php";

     $id_genre = $_GET['id_genre'];

     $sql = "DELETE FROM tb_genre WHERE id_genre ='$id_genre'";
     $sql_eksekusi = mysqli_query($koneksi, $sql);
     if($sql_eksekusi) {

        header("location:show-genre.php");
     }else
     {
        echo "Gagal Hapus Genre";
     }
?>