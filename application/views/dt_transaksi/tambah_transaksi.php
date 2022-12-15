<?= form_open('transaksi/add') ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title"><?= $subjudul ?></h3>
	</div>
	<div class="card-body">

		<div class="form-group">
			<label>ID Transaksi</label>
			<input type="text" class="form-control" name="id_transaksi" value="">
		</div>
		<div class="form-group">
			<label>Kode Invoice</label>
			<input type="text" class="form-control" name="kode_invoice" value="">
		</div>
		<div class="form-group">
			<label>ID User</label>
			<select name="id_user" class="form-control">
				<option value="">-- Pilih User --</option>
				<?php foreach ($datauser as $key) { ?>
					<option value="<?= $key->Id_User ?>"><?= $key->Id_User ?> | <?= $key->UserName ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>ID Pelanggan</label>
			<select name="id_pelanggan" class="form-control">
				<option value="">-- Pilih Pelanggan --</option>
				<?php foreach ($datapelanggan as $key) { ?>
					<option value="<?= $key->Id_Pelanggan ?>"><?= $key->Id_Pelanggan ?> | <?= $key->Nama_Pelanggan ?> | <?= $key->Nama ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>Tanggal Masuk</label>
			<input type="date" class="form-control" name="tanggal_masuk" value="">
		</div>
		<div class="form-group">
			<label>Tipe</label>
			<input type="text" class="form-control" name="tipe" value="">
		</div>
		<div class="form-group">
			<label>Model</label>
			<input type="text" class="form-control" name="model" value="">
		</div>
		<div class="form-group">
			<label>Kelengkapan</label>
			<input type="text" class="form-control" name="kelengkapan" value="">
		</div>
		<div class="form-group">
			<label>Kendala</label>
			<textarea name="kendala" cols="30" rows="3" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label>Harga</label>
			<input type="text" class="form-control" name="harga" value="">
		</div>
		<div class="form-group">
			<label>Garansi</label>
			<input type="text" class="form-control" name="garansi" value="">
		</div>
		<div class="form-group">
			<label>Status_Transaksi</label>
			<input type="text" class="form-control" name="status_transaksi" value="">
		</div>
		<div class="form-group">
			<label>Status</label>
			<input type="text" class="form-control" name="status" value="">
		</div>
		<div class="form-group">
			<label>Tanggal Keluar</label>
			<input type="date" class="form-control" name="tanggal_keluar" value="">
		</div>
		<div class="form-group">
			<label>Konfirmasi</label>
			<input type="text" class="form-control" name="konfirmasi" value="">
		</div>

	</div>
	<div class="card-footer">
		<input type="submit" class="btn btn-primary" name="simpan" value="Simpan Data">
		<a href="<?= site_url('transaksi') ?>" class="btn btn-danger">Kembali</a>
	</div>

</div>
<?= form_close() ?>
