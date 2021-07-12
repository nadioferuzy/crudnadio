<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Utama</title>
</head>
<body>
	<h1>Simple CRUD</h1>
	<a href="<?php echo base_url('/index.php/utama/halaman_tambah')?>">Tambah Data</a>
	<br>
	<br>
	<table border = "1">
	<tr>
	<td>No</td>
	<td>NIM</td>
	<td>Nama</td>
	<td>Jurusan</td>
	<td>Aksi</td>
	</tr>
	<?php
	$count = 0;
	foreach ($queryAllmhs as $row) {
		$count = $count + 1;
	
	?>
	<tr>
	<td><?php echo $count ?></td>
	<td><?php echo $row->nim ?></td>
	<td><?php echo $row->nama ?></td>
	<td><?php echo $row->jurusan ?></td>
	<td><a href="<?php echo base_url('/index.php/utama/halaman_edit')?>/<?php echo $row ->nim ?>">Edit</a> | <a href="<?php echo base_url('/index.php/utama/fungsiDelete')?>/<?php echo $row->nim?>">Delete</a> </td>
	</tr>
	<?php } ?>
	</table>
</body>
</html>