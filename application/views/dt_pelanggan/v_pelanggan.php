<!-- DataTales Example -->
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title"><?= $subjudul ?></h3>
	</div>
	<div class="card shadow mb-4">
		<div class="card-body">
			<!-- <a href="<?= site_url('pelanggan/add') ?>" class="btn btn-success">Tambah Data</a> -->
			<!-- <hr> -->
			<div class="table-responsive">
				<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<th>No.</th>
						<th>Jenis Pelanggan</th>
						<th>Nama</th>
						<th>No Wa</th>
						<th>Alamat</th>
						</th>
						<th>Aksi</th>
					</thead>
					</tr>
					<tbody>
						<?php $Id_Pelanggan = 1; ?>
						<?php foreach ($datapelanggan as $key) {
						?>
							<tr>
								<td><?= $Id_Pelanggan++; ?></td>
								<td><?php echo $key->Nama_Pelanggan ?></td>
								<td><?php echo $key->Nama ?></td>
								<td><?php echo $key->No_Wa ?></td>
								<td><?php echo $key->Alamat ?></td>
								<td>
									<a href="<?= site_url('pelanggan/edit/' . $key->Id_Pelanggan) ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
									<a href="<?= site_url('pelanggan/hapus/' . $key->Id_Pelanggan) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
