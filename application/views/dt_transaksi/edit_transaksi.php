<?= form_open('transaksi/edit/' . $datatransaksi->Id_Transaksi) ?>
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
							<label>ID Petugas</label><br>
							<select name="id_user" class="form-control">
								<option value="">-- Pilih Petugas --</option>
								<?php foreach ($datauser as $key) { ?>
									<option value="<?= $key->Id_User ?>" <?php if ($key->Id_User == $datatransaksi->Id_User) {
																				echo "selected";
																			} ?>><?= $key->Id_User ?> | <?= $key->Level ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col">
							<label for="tipe">Tipe</label>
							<select name="tipe" id="tipe" class="form-control">
								<option value="<?= $datatransaksi->Tipe; ?>"><?= $datatransaksi->Tipe ?></option>
								<option value="Laptop">Laptop</option>
								<option value="Printer">Printer</option>
								<option value="Proyektor">Proyektor</option>
								<option value="PC AIO">PC AIO</option>
								<option value="PC Build Up">PC Build Up</option>
								<option value="PC Rakitan">PC Rakitan</option>
								<option value="Scanner">Scanner</option>
								<option value="Monitor">Monitor</option>
							</select>
						</div>
					</div>
					<div class="row" style="padding-top: 1rem;">
						<div class="col">
							<label>ID Pelanggan</label>
							<select name="id_pelanggan" class="form-control">
								<option value="">-- Pilih Pelanggan --</option>
								<?php foreach ($datapelanggan as $key) { ?>
									<option value="<?= $key->Id_Pelanggan ?>" <?php if ($key->Id_Pelanggan == $datatransaksi->Id_Pelanggan) {
																					echo "selected";
																				} ?>><?= $key->Id_Pelanggan ?> | <?= $key->Nama ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col">
							<label>Model</label>
							<input type="text" class="form-control" name="model" value="<?= $datatransaksi->Model ?>">
						</div>
					</div>
					<div class="row" style="padding-top: 1rem;">
						<div class="col">
							<label>Tanggal masuk</label>
							<input type="date" class="form-control" name="tanggal_masuk" value="<?= $datatransaksi->Tanggal_Masuk ?>">
						</div>
						<div class="col">
							<label>Kelengkapan</label>
							<input type="text" class="form-control" name="kelengkapan" value="<?= $datatransaksi->Kelengkapan ?>">
						</div>
					</div>

					<div class="row" style="padding-top: 1rem;">
						<div class="col">
							<label>Kendala</label>
							<textarea name="kendala" cols="30" rows="5" class="form-control"><?= $datatransaksi->Kendala ?></textarea>
						</div>
						<div class="col">
						</div>
					</div>
					<div class="card-footer">
						<a href="<?= site_url('transaksi') ?>" class="btn btn-danger">Kembali</a>
						<input type="submit" class="btn btn-primary" name="ubah" value="Ubah Data">
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?= form_close() ?>
