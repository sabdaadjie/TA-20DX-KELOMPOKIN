<?= form_open('pelanggan/edit/' . $datapelanggan->Id_Pelanggan) ?>
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
							<label>ID Pelanggan</label>
							<input type="text" class="form-control" name="id_pelanggan" value="<?= $datapelanggan->Id_Pelanggan ?>" disabled>
						</div>
						<div class="col">
							<label>Nama</label>
							<input type="text" class="form-control" name="nama" value="<?= $datapelanggan->Nama ?>">
						</div>
					</div>
					<div class="row" style="padding-top: 1rem;">
						<div class="col">
							<label>Jenis Pelanggan</label>
							<input type="text" class="form-control" name="nama_pelanggan" value="<?= $datapelanggan->Nama_Pelanggan ?>">
						</div>
						<div class="col">
							<label>No Wa</label>
							<input type="text" class="form-control" name="no_wa" value="<?= $datapelanggan->No_Wa ?>">
						</div>
					</div>
					<div class="row" style="padding-top: 1rem;">
						<div class="col">
							<label>Alamat</label>
							<textarea name="alamat" cols="30" rows="3" class="form-control"><?= $datapelanggan->Alamat ?></textarea>
						</div>
						<div class="col">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" class="btn btn-primary" name="ubah" value="Ubah Data">
						<a href="<?= site_url('pelanggan') ?>" class="btn btn-danger">Kembali</a>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?= form_close() ?>
