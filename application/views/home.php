	
	<div class="row no-gutters mt-5">
	<div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
	<ul class="nav flex-column ml-3 mb-5">
		<li class="nav-item">
			<a class="nav-link active text-white" href="#"><i class="fas fa-palette mr-2"></i>Dashboard</a><hr class="bg-secondary">
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href="#"><i class="fas fa-user-graduate mr-2"></i>Daftar Mahasiswa</a><hr class="bg-secondary">
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href="#"><i class="fas fa-id-badge mr-2"></i>Profile</a><hr class="bg-secondary">
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href="#"><i class="fab fa-studiovinari mr-2"></i>Misi & Visi</a><hr class="bg-secondary">
		</li>
		</ul>
</div>
	<div class="col-md-10 p-5 pt-5 ">
	<h4 class="text-center">Simple CRUD</h4><hr>		
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
	<th><a href="<?php echo base_url('/index.php/utama/halaman_edit')?>/<?php echo $row ->nim ?>"><i class="fas fa-edit bg-warning p-2 text-white"></i>Edit</a> | <a href="<?php echo base_url('/index.php/utama/fungsiDelete')?>/<?php echo $row->nim?>" ><i class="fas fa-trash bg-danger p-2 text-white"></i>Delete</a> </th>
	</tr>
	
	<?php } ?>
	</table>
	<a href="<?php echo base_url('/index.php/utama/halaman_tambah')?> " class="btn btn-primary">Tambah Data</a>
	</div>
	</div>
	</div>
	
	
