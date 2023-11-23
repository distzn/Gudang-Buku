<?php
    include "../koneksi.php";

    $id_penulis = $_GET['id_penulis'];

    $sql ="SELECT * FROM tb_penulis WHERE id_penulis = '$id_penulis' ";
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
 <h2>Form Penulis</h2>
        <form action="show_penulis.php" method="post">
        <table border="1">
            <tr>
                <td>Nama Penulis</td>
                <td><input type="text" readonly name="nama_penulis" value="<?php echo $data['nama_penulis']?>"></td>
            </tr>
            
            <tr>
                <td>No Telpon</td>
                <td><input type="number" name="telp_penulis" value="<?php echo $data['telp_penulis']?>"></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" readonly name="jk" required>Laki-Laki
                <input type="radio" readonly name="jk" required>Perempuan</td>
                
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="<?php echo $data['email']?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <textarea readonly  name="alamat" id="" cols="30" rows="10" value="<?php echo $data['alamat']; ?>"></textarea>
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
 </html>