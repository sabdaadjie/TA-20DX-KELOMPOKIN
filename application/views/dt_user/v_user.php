<!-- DataTales Example -->
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title"><?= $subjudul ?></h3>
	</div>
	<div class="card shadow mb-4">
		<div class="card-body">
			<a href="<?= site_url('user/add') ?>" class="btn btn-success">Tambah Data</a>
			<hr>
			<div class="table-responsive">
				<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<th>ID User</th>
						<th>Username</th>
						<th>Password</th>
						<th>Level</th>
						<th>Nama</th>
						</th>
						<th>Aksi</th>
					</thead>
					</tr>
					<tbody>
						<?php foreach ($datauser as $key) {
						?>
							<tr>
								<td><?php echo $key->Id_User ?></td>
								<td><?php echo $key->Username ?></td>
								<td><?php echo $key->Password ?></td>
								<td><?php echo $key->Level ?></td>
								<td><?php echo $key->Nama ?></td>
								<td>
									<a href="<?= site_url('user/edit/' . $key->Id_User) ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
									<a href="<?= site_url('user/hapus/' . $key->Id_User) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
