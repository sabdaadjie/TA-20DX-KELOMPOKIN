<!-- DataTales Example -->
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title"><?= $subjudul ?></h3>
	</div>
	<div class="card shadow mb-4">
		<div class="card-body">
			<!-- <a href="<?= site_url('transaksi/add') ?>" class="btn btn-success">Tambah Data</a>
			<hr> -->
			<div class="table-responsive">
				<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<th>No.</th>
						<th>ID User</th>
						<th>ID Pel</th>
						<th>Tanggal Masuk</th>
						<th>Tipe</th>
						<th>Model</th>
						<th>Kelengkapan</th>
						<th>Kendala</th>
						<th>Aksi</th>
					</thead>
					</tr>
					<tbody>
						<?php $Id_Transaksi = 1; ?>
						<?php foreach ($datatransaksi as $key) {
						?>
							<tr>
								<td><?= $Id_Transaksi++; ?></td>
								<td><?php echo $key->Id_User ?></td>
								<td><?php echo $key->Id_Pelanggan ?></td>
								<td><?php echo $key->Tanggal_Masuk ?></td>
								<td><?php echo $key->Tipe ?></td>
								<td><?php echo $key->Model ?></td>
								<td><?php echo $key->Kelengkapan ?></td>
								<td><?php echo $key->Kendala ?></td>
								<td>
									<a href="<?= site_url('transaksi/edit/' . $key->Id_Transaksi) ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
									<a href="<?= site_url('transaksi/hapus/' . $key->Id_Transaksi) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
