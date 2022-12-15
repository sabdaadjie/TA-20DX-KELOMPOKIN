<?= form_open('user/edit/' . $datauser->Id_User) ?>
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title"><?= $subjudul ?></h3>
	</div>
	<div class="card-body">
		<div class="form-group">
			<label>ID User</label>
			<input type="text" class="form-control" name="id_user" value="<?= $datauser->Id_User ?>" disabled>
		</div>
		<div class="form-group">
			<label>UserName</label></label>
			<input type="text" class="form-control" name="username" value="<?= $datauser->UserName ?>">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="text" class="form-control" name="password" value="<?= $datauser->Password ?>">
		</div>
		<div class="form-group">
			<label>Jabatan</label>
			<select name="id_jabatan" class="form-control">
				<option value="">-- Pilih Jabatan --</option>
				<?php foreach ($datajabatan as $key) { ?>
					<option value="<?= $key->Id_Jabatan ?>" <?php if ($key->Id_Jabatan == $datauser->Id_Jabatan) {
																echo "selected";
															} ?>><?= $key->Nama_Jabatan ?></option>
				<?php } ?>
			</select>
		</div>

	</div>
	<div class="card-footer">
		<a href="<?= site_url('user') ?>" class="btn btn-danger">Kembali</a>
		<input type="submit" class="btn btn-primary" name="ubah" value="Ubah Data">
	</div>

</div>
<?= form_close() ?>
