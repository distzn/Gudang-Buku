<?php
    include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h2>SHOW PENULIS</h2>
     <table border="1">
        <tr>
            <td>No</td>
            <td>Nama Penulis</td>
            <td>No Telpon</td>
            <td>Email Penulis</td>
            <td colspan="2">Aksi</td>
        </tr>

        <?php
           $sql = "SELECT * FROM tb_penulis";
           $sql_eksekusi = mysqli_query($koneksi,$sql);

           $no = 1;
           while ($data = mysqli_fetch_array($sql_eksekusi))
           {
        ?>
            <tr>
                <td><?php echo $no++;?></td>                
                <td><?php echo $data['nama_penulis'];?></td>
                <td><?php echo $data['telp_penulis'];?></td>
                <td><?php echo $data['email']; ?></td>
                <td><a href="hapus_penulis.php?id_penulis=<?php echo $data['id_penulis'];?>" onclick="return confirm('Yakin ingin hapus genre tersebut')">Hapus</a></td>
                <td><a href="form-update.php?id_penulis=<?php echo $data['id_penulis'];?>">Ubah</a></td>
            </tr>
        <?php    
           }
                  
        ?>
     </table>
     
</body>
</html>