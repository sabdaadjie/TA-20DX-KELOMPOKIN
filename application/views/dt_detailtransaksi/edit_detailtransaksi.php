<?= form_open('detailtransaksi/edit/' . $datadetailtransaksi->Id_Detailtrans) ?>
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
							<label>ID Detail</label>
							<input type="text" class="form-control" name="id_detailtrans" value="<?= $datadetailtransaksi->Id_Detailtrans ?>" disabled>
						</div>
						<div class="col">
							<label for="status_transaksi">Status Transaksi</label>
							<select name="status_transaksi" id="status_transaksi" class="form-control">
								<option value="<?= $datadetailtransaksi->Status_Transaksi; ?>"><?= $datadetailtransaksi->Status_Transaksi ?></option>
								<option value="Belum Bayar">Belum Bayar</option>
								<option value="DP">DP</option>
								<option value="Sudah Lunas">Sudah Lunas</option>
							</select>
						</div>
					</div>
					<div class="row" style="padding-top: 1rem;">
						<div class="col">
							<label>ID Transaksi</label>
							<select name="id_transaksi" class="form-control">
								<option value="">-- Pilih Transaksi --</option>
								<?php foreach ($datatransaksi as $key) { ?>
									<option value="<?= $key->Id_Transaksi ?>" <?php if ($key->Id_Transaksi == $datadetailtransaksi->Id_Transaksi) {
																					echo "selected";
																				} ?>><?= $key->Id_Transaksi ?> | <?= $key->Id_Pelanggan ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col">
							<label for="status_servis">Status Servis</label>
							<select name="status_servis" id="status_servis" class="form-control">
								<option value="<?= $datadetailtransaksi->Status_Servis; ?>"><?= $datadetailtransaksi->Status_Servis ?></option>
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
							<label>Kode Invoice</label>
							<input type="text" class="form-control" name="kode_invoice" value="<?= $datadetailtransaksi->Kode_Invoice ?>" disabled>
						</div>
						<div class="col">
							<label>Tanggal Keluar</label>
							<input type="date" class="form-control" name="tanggal_keluar" value="<?= $datadetailtransaksi->Tanggal_Keluar ?>">
						</div>
					</div>

					<div class="row" style="padding-top: 1rem;">
						<div class="col">
							<label>Biaya</label>
							<input type="text" class="form-control" name="harga" value="<?= $datadetailtransaksi->Harga ?>">
						</div>
						<div class="col">
							<label for="konfirmasi">Konfirmasi</label>
							<select name="konfirmasi" id="konfirmasi" class="form-control">
								<option value="<?= $datadetailtransaksi->Konfirmasi; ?>"><?= $datadetailtransaksi->Konfirmasi ?></option>
								<option value="Belum Konfirmasi">Belum Konfirmasi</option>
								<option value="Sudah Konfirmasi">Sudah Konfirmasi</option>
							</select>
						</div>
					</div>

					<div class="row" style="padding-top: 1rem;">
						<div class="col">
							<label>Garansi</label>
							<input type="text" class="form-control" name="garansi" value="<?= $datadetailtransaksi->Garansi ?>">
						</div>
						<div class="col">
						</div>
					</div>
					<div class="card-footer">
						<a href="<?= site_url('detailtransaksi') ?>" class="btn btn-danger">Kembali</a>
						<input type="submit" class="btn btn-primary" name="ubah" value="Ubah Data">
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?= form_close() ?>
