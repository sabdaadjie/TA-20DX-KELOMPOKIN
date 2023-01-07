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
							
							</select>
						</div>
						<div class="col">
							<label>Status_Transaksi</label>
							<input type="text" class="form-control" name="status_transaksi" value="">
						</div>
					</div>
					<div class="row" style="padding-top: 1rem;">
						<div class="col">
							<label>Kode Invoice</label>
							<input type="text" class="form-control" name="kode_invoice" value="">
						</div>
						<div class="col">
							<label>Status Servis</label>
							<input type="text" class="form-control" name="status_servis" value="">
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
							<label>Konfirmasi</label>
							<input type="text" class="form-control" name="konfirmasi" value="">
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
