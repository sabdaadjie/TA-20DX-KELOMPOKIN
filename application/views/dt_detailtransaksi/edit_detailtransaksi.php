<?= form_open('detailtransaksi/edit/' . $datadetailtransaksi->Id_Transaksi) ?>
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
							<input type="text" class="form-control" name="id_detailtransaksi" value="<?= $datadetailtransaksi->Id_DetailTransaksi ?>" disabled>
						</div>
						<div class="col">
							<label>Status Transaksi</label>
							<input type="text" class="form-control" name="status_transaksi" value="<?= $datadetailtransaksi->Status_Transaksi ?>">
						</div>
					</div>
					<div class="row" style="padding-top: 1rem;">
						<div class="col">
							<label>ID Transaksi</label>
							<select name="id_transaksi" class="form-control">
						
							</select>
						</div>
						<div class="col">
							<label>Status Servis</label>
							<input type="text" class="form-control" name="status_servis" value="<?= $datadetailtransaksi->Status_Servis ?>">
						</div>
					</div>
					<div class="row" style="padding-top: 1rem;">
						<div class="col">
							<label>Kode Invoice</label>
							<input type="text" class="form-control" name="kode_invoice" value="<?= $datadetailtransaksi->Kode_Invoice ?>">
						</div>
						<div class="col">
							<label>Tanggal Keluar</label>
							<input type="date" class="form-control" name="tanggal_masuk" value="<?= $datadetailtransaksi->Tanggal_Keluar ?>">
						</div>
					</div>

					<div class="row" style="padding-top: 1rem;">
						<div class="col">
							<label>Biaya</label>
							<input type="text" class="form-control" name="harga" value="<?= $datadetailtransaksi->Harga ?>">
						</div>
						<div class="col">
							<label>Konfirmasi</label>
							<input type="text" class="form-control" name="konfirmasi" value="<?= $datadetailtransaksi->Konfirmasi ?>">
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
