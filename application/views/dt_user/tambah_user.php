<?= form_open('user/add') ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title"><?= $subjudul ?></h3>
	</div>
	<div class="card-body">

		<div class="form-group">
			<label>ID User</label>
			<input type="text" class="form-control" name="id_user" value="">
		</div>
		<div class="form-group">
			<label>UserName</label>
			<input type="text" class="form-control" name="username" value="">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="text" class="form-control" name="password" value="">
		</div>
		<div class="form-group">
			<label>ID Jabatan</label>
			<select name="id_jabatan" class="form-control">
				<option value="">-- Pilih Jabatan --</option>
				<?php foreach ($datajabatan as $key) { ?>
					<option value="<?= $key->Id_Jabatan ?>"><?= $key->Id_Jabatan ?> | <?= $key->Nama_Jabatan ?></option>
				<?php } ?>
			</select>
		</div>

	</div>
	<div class="card-footer">
		<input type="submit" class="btn btn-primary" name="simpan" value="Simpan Data">
		<a href="<?= site_url('user') ?>" class="btn btn-danger">Kembali</a>
	</div>

</div>
<?= form_close() ?>
