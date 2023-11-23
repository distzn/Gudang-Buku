<?php
    include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Show Genre</h2>
    <table border="1">
        <tr>
            <td>No</td>
            <td>Nama Genre</td>
            <td colspan="2">Aksi</td>
        </tr>

        <?php
            $sql = "SELECT * FROM tb_genre";
            $query = mysqli_query($koneksi,$sql);

            $no=1;
            while($data = mysqli_fetch_array($query))
            {
        ?>
            <tr>    
                <td><?php echo $no++;?></td>
                <td><?php echo $data['nama_genre'];?></td>
                <td><a href="hapus.php?id_genre=<?php echo $data['id_genre'];?>" onclick="return confirm('Yakin ingin hapus genre tersebut')">Hapus</a></td>
                <td><a href="form-update.php?id_genre=<?php echo $data['id_genre'];?>">Ubah</a></td>
            </tr>
            <?php
            }

            ?> 
    </table>
</body>
</html>