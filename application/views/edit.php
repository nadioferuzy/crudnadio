<div class="container mt-4">
		<div class="row"> 
			<div class="col">
    <h3>Halaman Edit Data</h3>
    <form class=""action="<?php echo base_url('index.php/utama/fungsiEdit')?>" method="post">
   
    <div class="form-group">
    <label>Nim</label>
    <input type="number" name="nim" value="<?php echo $queryMhsDetail->nim?>" readonly class="form-control">
    </div>
    <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" value="<?php echo $queryMhsDetail->nama?>" class="form-control">
    </div>
    <div class="form-group">
    <label>Jurusan</label>
    <input type="text" name="jurusan" value="<?php echo $queryMhsDetail->jurusan?>" class="form-control">
    </div>
    <button type="submit" name="button" class="btn btn-primary">Edit Data</button>
</form>
</div>
</div>
</div>