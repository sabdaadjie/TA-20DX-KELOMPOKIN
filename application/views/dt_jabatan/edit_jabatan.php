<?= form_open('jabatan/edit/' . $datajabatan->Id_Jabatan) ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title"><?= $subjudul ?></h3>
	</div>
	<div class="card-body">
		<div class="form-group">
			<label>ID jabatan</label>
			<input type="text" class="form-control" name="id_jabatan" value="<?= $datajabatan->Id_Jabatan ?>" disabled>
		</div>
		<div class="form-group">
			<label>Nama Jabatan</label>
			<input type="text" class="form-control" name="nama_jabatan" value="<?= $datajabatan->Nama_Jabatan ?>">
		</div>

	</div>
	<div class="card-footer">
		<a href="<?= site_url('jabatan') ?>" class="btn btn-danger">Kembali</a>
		<input type="submit" class="btn btn-primary" name="ubah" value="Ubah Data">
	</div>

</div>
<?= form_close() ?>
