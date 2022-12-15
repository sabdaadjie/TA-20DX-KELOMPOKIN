<?= form_open('transaksi/edit/' . $datatransaksi->Id_Transaksi) ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title"><?= $subjudul ?></h3>
	</div>
	<div class="card-body">
		<div class="form-group">
			<label>ID Transaksi</label>
			<input type="text" class="form-control" name="id_transaksi" value="<?= $datatransaksi->Id_Transaksi ?>" disabled>
		</div>
		<div class="form-group">
			<label>Kode Invoice</label>
			<input type="text" class="form-control" name="kode_invoice" value="<?= $datatransaksi->Kode_Invoice ?>">
		</div>
		<div class="form-group">
			<label>ID User</label>
			<select name="id_user" class="form-control">
				<option value="">-- Pilih User --</option>
				<?php foreach ($datauser as $key) { ?>
					<option value="<?= $key->Id_User ?>" <?php if ($key->Id_User == $datatransaksi->Id_User) {
																echo "selected";
															} ?>><?= $key->Id_User ?> | <?= $key->UserName ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>ID Pelanggan</label>
			<select name="id_pelanggan" class="form-control">
				<option value="">-- Pilih Pelanggan --</option>
				<?php foreach ($datapelanggan as $key) { ?>
					<option value="<?= $key->Id_Pelanggan ?>" <?php if ($key->Id_Pelanggan == $datatransaksi->Id_Pelanggan) {
																	echo "selected";
																} ?>><?= $key->Id_Pelanggan ?> | <?= $key->Nama_Pelanggan ?></option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group">
			<label>Tanggal masuk</label>
			<input type="date" class="form-control" name="tanggal_masuk" value="<?= $datatransaksi->Tanggal_Masuk ?>">
		</div>
		<div class="form-group">
			<label>Tipe</label>
			<input type="text" class="form-control" name="tipe" value="<?= $datatransaksi->Tipe ?>">
		</div>
		<div class="form-group">
			<label>Model</label>
			<input type="text" class="form-control" name="model" value="<?= $datatransaksi->Model ?>">
		</div>
		<div class="form-group">
			<label>Kelengkapan</label>
			<input type="text" class="form-control" name="kelengkapan" value="<?= $datatransaksi->Kelengkapan ?>">
		</div>
		<div class="form-group">
			<label>Kendala</label>
			<textarea name="kendala" cols="30" rows="5" class="form-control"><?= $datatransaksi->Kendala ?></textarea>
		</div>
		<div class="form-group">
			<label>Harga</label>
			<textarea name="harga" cols="30" rows="10" class="form-control"><?= $datatransaksi->Harga ?></textarea>
		</div>
		<div class="form-group">
			<label>Garansi</label>
			<input type="text" class="form-control" name="garansi" value="<?= $datatransaksi->Garansi ?>">
		</div>
		<div class="form-group">
			<label>Status Transaksi</label>
			<input type="text" class="form-control" name="status_transaksi" value="<?= $datatransaksi->Status_Transaksi ?>">
		</div>
		<div class="form-group">
			<label>Status</label>
			<input type="text" class="form-control" name="status" value="<?= $datatransaksi->Status ?>">
		</div>
		<div class="form-group">
			<label>Tanggal Keluar</label>
			<input type="date" class="form-control" name="tanggal_masuk" value="<?= $datatransaksi->Tanggal_Keluar ?>">
		</div>
		<div class="form-group">
			<label>Konfirmasi</label>
			<input type="text" class="form-control" name="konfirmasi" value="<?= $datatransaksi->Konfirmasi ?>">
		</div>

	</div>
	<div class="card-footer">
		<a href="<?= site_url('transaksi') ?>" class="btn btn-danger">Kembali</a>
		<input type="submit" class="btn btn-primary" name="ubah" value="Ubah Data">
	</div>

</div>
<?= form_close() ?>
