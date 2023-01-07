<?= form_open('detailtransaksi/add') ?>
<div class="card card-primary">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<div class="card-header">
						<h3 class="card-title"><?= $subjudul ?></h3>
					</div>
					<br>
					<div class="row">
						<div class="col">
							<label>ID Transaksi</label>
							<select name="id_transaksi" class="form-control">
								<option value="">-- Pilih Transaksi --</option>
								<?php foreach ($datatransaksi as $key) { ?>
									<option value="<?= $key->Id_Transaksi ?>"><?= $key->Id_Transaksi ?> | <?= $key->Id_Pelanggan ?> | <?= $key->Kendala ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col">
							<label for="status_transaksi">Status Transaksi</label>
							<select name="status_transaksi" id="status_transaksi" class="form-control">
								<option value="0">-- Pilih Status Transaksi --</option>
								<option value="Belum Bayar">Belum Bayar</option>
								<option value="DP">DP</option>
								<option value="Sudah Lunas">Sudah Lunas</option>
							</select>
						</div>
					</div>
					<div class="row" style="padding-top: 1rem;">
						<div class="col">
							<label>Kode Invoice</label>
							<input type="text" class="form-control" name="kode_invoice" value="">
						</div>
						<div class="col">
							<label for="status_servis">Status Servis</label>
							<select name="status_servis" id="status_servis" class="form-control">
								<option value="0">-- Pilih Status Servis --</option>
								<option value="Dibatalkan">Dibatalkan</option>
								<option value="Menunggu Sparepart">Menunggu Sparepart</option>
								<option value="On Process">On Process</option>
								<option value="Siap Diambil">Siap Diambil</option>
								<option value="Sudah Diambil">Sudah Diambil</option>
							</select>
						</div>
					</div>
					<div class="row" style="padding-top: 1rem;">
						<div class="col">
							<label>Harga</label>
							<input type="text" class="form-control" name="harga" value="">
						</div>
						<div class="col">
							<label>Tanggal Keluar</label>
							<input type="date" class="form-control" name="tanggal_keluar" value="">
						</div>
					</div>

					<div class="row" style="padding-top: 1rem;">
						<div class="col">
							<label>Garansi</label>
							<input type="text" class="form-control" name="garansi" value="">
						</div>
						<div class="col">
							<label for="konfirmasi">Konfirmasi</label>
							<select name="konfirmasi" id="konfirmasi" class="form-control">
								<option value="0">-- Pilih Konfirmasi --</option>
								<option value="Belum Konfirmasi">Belum Konfirmasi</option>
								<option value="Sudah Konfirmasi">Sudah Konfirmasi</option>
							</select>
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" class="btn btn-primary" name="simpan" value="Simpan Data">
						<a href="<?= site_url('detailtransaksi') ?>" class="btn btn-danger">Kembali</a>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?= form_close() ?>
