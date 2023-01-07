<!-- DataTales Example -->
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title"><?= $subjudul ?></h3>
	</div>
	<div class="card shadow mb-4">
		<div class="card-body">
			<a href="<?= site_url('detailtransaksi/add') ?>" class="btn btn-success">Tambah Data</a>
			<hr>
			<div class="table-responsive">
				<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<th>No.</th>
						<th>Id Trans</th>
						<th>Kode Invoice</th>
						<th>Biaya</th>
						<th>Garansi</th>
						<th>Status Transaksi</th>
						<th>Status Service</th>
						<th>Tanggal Keluar</th>
						<th>Konfirmasi</th>
						<th>Aksi</th>
					</thead>
					</tr>
					<tbody>
						<?php $Id_Detailtrans = 1; ?>
						<?php foreach ($datadetailtransaksi as $key) {
						?>
							<tr>
								<td><?= $Id_Detailtrans++; ?></td>
								<td><?php echo $key->Id_Transaksi ?></td>
								<td><?php echo $key->Kode_Invoice ?></td>
								<td><?php echo $key->Harga ?></td>
								<td><?php echo $key->Garansi ?></td>
								<td><?php echo $key->Status_Transaksi ?></td>
								<td><?php echo $key->Status_Servis ?></td>
								<td><?php echo $key->Tanggal_Keluar ?></td>
								<td><?php echo $key->Konfirmasi ?></td>
								<td>
									<a href="<?= site_url('detailtransaksi/edit/' . $key->Id_Detailtrans) ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
									<a href="<?= site_url('detailtransaksi/hapus/' . $key->Id_Detailtrans) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
