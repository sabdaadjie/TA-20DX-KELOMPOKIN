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
			<label>Username</label>
			<input type="text" class="form-control" name="username" value="">
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="text" class="form-control" name="password" value="">
		</div>
		<div class="form-grup">
			<label for="level">Level</label>
			<select name="level" id="level" class="form-control">
				<option value="0">-- Pilih Level --</option>
				<option value="Administrator">Administrator</option>
				<option value="User">User</option>
				<option value="Teknisi">Teknisi</option>
			</select>
		</div>
		<div class="form-group">
			<label>Nama</label>
			<input type="text" class="form-control" name="nama" value="">
		</div>

	</div>
	<div class="card-footer">
		<input type="submit" class="btn btn-primary" name="simpan" value="Simpan Data">
		<a href="<?= site_url('user') ?>" class="btn btn-danger">Kembali</a>
	</div>

</div>
<?= form_close() ?>
