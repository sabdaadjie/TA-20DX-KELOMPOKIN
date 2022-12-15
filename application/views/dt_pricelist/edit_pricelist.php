<?= form_open('pricelist/edit/' . $datapricelist->Id_Pricelist) ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title"><?= $subjudul ?></h3>
	</div>
	<div class="card-body">
		<div class="form-group">
			<label>ID Pricelist</label>
			<input type="text" class="form-control" name="id_pricelist" value="<?= $datapricelist->Id_Pricelist ?>" disabled>
		</div>
		<div class="form-group">
			<label>Nama Servis</label>
			<input type="text" class="form-control" name="nama_servis" value="<?= $datapricelist->Nama_Servis ?>">
		</div>
		<div class="form-group">
			<label>Harga</label>
			<input type="text" class="form-control" name="harga" value="<?= $datapricelist->Harga ?>">
		</div>

	</div>
	<div class="card-footer">
		<a href="<?= site_url('pricelist') ?>" class="btn btn-danger">Kembali</a>
		<input type="submit" class="btn btn-primary" name="ubah" value="Ubah Data">
	</div>

</div>
<?= form_close() ?>
