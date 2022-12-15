<?= form_open('pelanggan/edit/' . $datapelanggan->Id_Pelanggan) ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title"><?= $subjudul ?></h3>
	</div>
	<div class="card-body">
		<div class="form-group">
			<label>ID Pelanggan</label>
			<input type="text" class="form-control" name="id_pelanggan" value="<?= $datapelanggan->Id_Pelanggan ?>" disabled>
		</div>
		<div class="form-group">
			<label>Nama Pelanggan</label>
			<input type="text" class="form-control" name="nama_pelanggan" value="<?= $datapelanggan->Nama_Pelanggan ?>">
		</div>
		<div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama" value="<?= $datapelanggan->Nama ?>">
		</div>
		<div class="form-group">
			<label>No Wa</label>
			<input type="text" class="form-control" name="no_wa" value="<?= $datapelanggan->No_Wa ?>">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea name="alamat" cols="30" rows="10" class="form-control"><?= $datapelanggan->Alamat ?></textarea>
		</div>

	</div>
	<div class="card-footer">
		<a href="<?= site_url('pelanggan') ?>" class="btn btn-danger">Kembali</a>
		<input type="submit" class="btn btn-primary" name="ubah" value="Ubah Data">
	</div>

</div>
<?= form_close() ?>
