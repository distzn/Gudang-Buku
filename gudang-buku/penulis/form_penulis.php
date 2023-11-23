<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Penulis</title>
</head>
<body>
        <h2>Form Penulis</h2>
        <form action="input_penulis.php" method="post">
        <table border="1">
            <tr>
                <td>Nama Penulis</td>
                <td><input type="text" name="nama_penulis"></td>
            </tr>
            
            <tr>
                <td>No Telpon</td>
                <td><input type="number" name="telp_penulis"></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jk" value="L" required>Laki-Laki
                    <input type="radio" name="jk" value="P" required>Perempuan
                </td>
                
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat" id="" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><input type="submit" value="Tambah Penulis"></center>
                </td>
            </tr>
        </table>
      </form>
</body>
<hr>
<?php
    include "show_penulis.php";
?>
</html>