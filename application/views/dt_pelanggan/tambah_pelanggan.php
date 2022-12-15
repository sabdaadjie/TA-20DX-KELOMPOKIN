<?= form_open('pelanggan/add') ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title"><?= $subjudul ?></h3>
	</div>
	<div class="card-body">

		<div class="form-group">
			<label>Id Pelanggan</label>
			<input type="text" class="form-control" name="id_pelanggan" value="">
		</div>
		<div class="form-group">
			<label>Nama Pelanggan</label>
			<input type="text" class="form-control" name="nama_pelanggan" value="">
		</div>
		<div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama" value="">
		</div>
		<div class="form-group">
			<label>No Wa</label>
			<input type="text" class="form-control" name="no_wa" value="">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea name="alamat" cols="30" rows="3" class="form-control"></textarea>
		</div>

	</div>
	<div class="card-footer">
		<input type="submit" class="btn btn-primary" name="simpan" value="Simpan Data">
		<a href="<?= site_url('pelanggan') ?>" class="btn btn-danger">Kembali</a>
	</div>

</div>
<?= form_close() ?>
