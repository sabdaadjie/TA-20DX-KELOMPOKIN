<?= form_open('pricelist/add') ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title"><?= $subjudul ?></h3>
	</div>
	<div class="card-body">

		<div class="form-group">
			<label>ID Pricelist</label>
			<input type="text" class="form-control" name="id_pricelist" value="">
		</div>
		<div class="form-group">
			<label>Nama Servis</label>
			<input type="text" class="form-control" name="nama_servis" value="">
		</div>
		<div class="form-group">
			<label>Harga</label>
			<input type="text" class="form-control" name="harga" value="">
		</div>

	</div>
	<div class="card-footer">
		<input type="submit" class="btn btn-primary" name="simpan" value="Simpan Data">
		<a href="<?= site_url('pricelist') ?>" class="btn btn-danger">Kembali</a>
	</div>

</div>
<?= form_close() ?>
