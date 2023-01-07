<?= form_open('pelanggan/add') ?>
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
							<label>Jenis Pelanggan</label>
							<input type="text" class="form-control" name="nama_pelanggan" value="">
						</div>
						<div class="col">
							<label>Nama</label>
							<input type="text" class="form-control" name="nama" value="">
						</div>
					</div>
					<div class="row" style="padding-top: 1rem;">
						<div class="col">
							<label>Alamat</label>
							<textarea name="alamat" cols="30" rows="3" class="form-control"></textarea>
						</div>
						<div class="col">
							<label>No Wa</label>
							<input type="text" class="form-control" name="no_wa" value="">
						</div>
					</div>
					<div class="card-footer">
						<input type="submit" class="btn btn-primary" name="simpan" value="Simpan Data">
						<a href="<?= site_url('pelanggan') ?>" class="btn btn-danger">Kembali</a>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?= form_close() ?>
