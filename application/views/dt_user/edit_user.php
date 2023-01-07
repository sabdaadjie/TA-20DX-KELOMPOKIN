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
			<input type="text" class="form-control" name="username" value="<?= $datauser->Username ?>">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="text" class="form-control" name="password" value="<?= $datauser->Password ?>" disabled>
		</div>
		<div class="form-group">
			<label for="level">Level</label>
			<select name="level" id="level" class="form-control">
				<option value="<?= $datauser->Level; ?>"><?= $datauser->Level ?></option>
				<option value="Administrator">Administrator</option>
				<option value="User">User</option>
				<option value="Teknisi">Teknisi</option>
			</select>
		</div>
		<div class="form-group">
			<label>Nama</label></label>
			<input type="text" class="form-control" name="nama" value="<?= $datauser->Nama ?>">
		</div>

	</div>
	<div class="card-footer">
		<a href="<?= site_url('user') ?>" class="btn btn-danger">Kembali</a>
		<input type="submit" class="btn btn-primary" name="ubah" value="Ubah Data">
	</div>

</div>
<?= form_close() ?>
