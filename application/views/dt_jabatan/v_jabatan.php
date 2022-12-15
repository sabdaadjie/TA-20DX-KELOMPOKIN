<!-- DataTales Example -->
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title"><?= $subjudul ?></h3>
	</div>
	<div class="card shadow mb-4">
		<div class="card-body">
			<a href="<?= site_url('jabatan/add') ?>" class="btn btn-success">Tambah Data</a>
			<hr>
			<div class="table-responsive">
				<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<th>ID Jabatan</th>
						<th>Nama jabatan</th>
						<th>Aksi</th>
					</thead>
					<tbody>
						<?php foreach ($datajabatan as $key) { ?>
							<tr>
								<td><?php echo $key->Id_Jabatan ?></td>
								<td><?php echo $key->Nama_Jabatan ?></td>
								<td>
									<a href="<?= site_url('jabatan/edit/' . $key->Id_Jabatan) ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
									<a href="<?= site_url('jabatan/hapus/' . $key->Id_Jabatan) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
