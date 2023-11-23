<?php
    include "../koneksi.php";


    $id_genre = $_GET['id_genre'];
    $sql ="SELECT * FROM tb_genre WHERE = '$id_genre' ";
    $query = mysqli_query ($koneksi,$sql);
    $data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <h2>Formulir Genre</h2>

      <form action="update-genre.php" method="post">
        <table border="1">
            <tr>
                <td>Nama Genre</td>
                <td><input type="text" name="nama_genre"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><input type="submit" value="Tambah Genre"></center>
                </td>
            </tr>
        </table>
      </form>
</body>
</html>