	
	<div class="container">
		<div class="row"> 
			<div class="col">
			<h4>Simple CRUD</h4><hr>
			
	<table class = "table">
	<thead class="thead-dark">
		<tr>
	<th scope="col">No</th>
	<th scope="col">NIM</th>
	<th scope="col">Nama</th>
	<th scope="col">Jurusan</th>
	<th scope="col">Aksi</th>
	</tr>
		</thead>
	
	<?php
	$count = 0;
	foreach ($queryAllmhs as $row) {
		$count = $count + 1;
	
	?>
	<tr>
	<th scope="col"><?php echo $count ?></th>
	<th><?php echo $row->nim ?></th>
	<th><?php echo $row->nama ?></th>
	<th><?php echo $row->jurusan ?></th>
	<th><a href="<?php echo base_url('/index.php/utama/halaman_edit')?>/<?php echo $row ->nim ?>" class="btn btn-primary">Edit</a> | <a href="<?php echo base_url('/index.php/utama/fungsiDelete')?>/<?php echo $row->nim?>" class="btn btn-danger">Delete</a> </th>
	</tr>
	
	<?php } ?>
	</table>
	<a href="<?php echo base_url('/index.php/utama/halaman_tambah')?>" class="btn btn-primary">Tambah Data</a>
	</div>
	</div>
	</div>
