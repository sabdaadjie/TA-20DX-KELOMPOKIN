<?= form_open('jabatan/add') ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title"><?= $subjudul ?></h3>
	</div>
	<div class="card-body">

		<div class="form-group">
			<label>ID Jabatan</label>
			<input type="text" class="form-control" name="id_jabatan" value="">
		</div>
		<div class="form-group">
			<label>Nama Jabatan</label>
			<input type="text" class="form-control" name="nama_jabatan" value="">
		</div>

	</div>
	<div class="card-footer">
		<input type="submit" class="btn btn-primary" name="simpan" value="Simpan Data">
		<a href="<?= site_url('jabatan') ?>" class="btn btn-danger">Kembali</a>
	</div>

</div>
<?= form_close() ?>
