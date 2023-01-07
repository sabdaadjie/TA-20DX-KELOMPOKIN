<?= form_open('transaksi/add') ?>
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
									<option value="<?= $key->Id_User ?>"><?= $key->Id_User ?> | <?= $key->Level ?> | <?= $key->Nama ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col">
							<label for="tipe">Tipe Barang</label>
							<select name="tipe" id="tipe" class="form-control">
								<option value="0">-- Pilih Tipe Barang --</option>
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
									<option value="<?= $key->Id_Pelanggan ?>"><?= $key->Id_Pelanggan ?> | <?= $key->Nama_Pelanggan ?> | <?= $key->Nama ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col">
							<label>Model</label>
							<input type="text" class="form-control" name="model" value="">
						</div>
					</div>
					<div class="row" style="padding-top: 1rem;">
						<div class="col">
							<label>Tanggal Masuk</label>
							<input type="date" class="form-control" name="tanggal_masuk" value="">
						</div>
						<div class="col">
							<label>Kelengkapan</label>
							<input type="text" class="form-control" name="kelengkapan" value="">
						</div>
					</div>

					<div class="row" style="padding-top: 1rem;">
						<div class="col">
							<label>Kendala</label>
							<textarea name="kendala" cols="30" rows="3" class="form-control"></textarea>
						</div>
						<div class="col">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" class="btn btn-primary" name="simpan" value="Simpan Data">
						<a href="<?= site_url('transaksi') ?>" class="btn btn-danger">Kembali</a>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?= form_close() ?>
