<div class="container mt-4">
		<div class="row"> 
			<div class="col">
			<h4>Tambah Data Mahasiswa</h4><hr>
    <form class="" action="<?php echo base_url('index.php/utama/fungsiTambah')?>" method="post">
    <div class="form-group">
    <label>Nim</label>
    <input type="number" name="nim" value="" class="form-control">
    </div>
    <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" value="" class="form-control">
    </div>
    <div class="form-group">
    <label>jurusan</label>
    <input type="text" name="jurusan" value="" class="form-control">
    </div>
   
    <button type="submit" name="button" class="btn btn-primary">Tambah Data</button>

</form>
</div>
</div>
</div>
