<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h3>Halaman Tambah Data</h3>
    <form action="<?php echo base_url('index.php/utama/fungsiTambah')?>" method="post">
    <table>
    <tr>
    <td>Nim</td>
    <td>:</td>
    <td><input type="text" name="nim"></td>
    </tr>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama"></td>
    </tr>
    <tr>
    <td>Jurusan</td>
    <td>:</td>
    <td><input type="text" name="jurusan"></td>
    </tr>
    <td colspan="3"><button type="submit">Tambah Data</button></td>
  
    </tr>
    </table>
</form>
</body>
</html>