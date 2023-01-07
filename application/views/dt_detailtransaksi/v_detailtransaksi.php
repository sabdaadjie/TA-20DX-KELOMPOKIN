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
						<?php $Id_DetailTransaksi = 1; ?>
						<?php foreach ($datadetailtransaksi as $key) {
						?>
							<tr>
	
								<td>
									<a href="<?= site_url('detailtransaksi/detail/' . $key->Id_DetailTransaksi) ?>" class="btn btn-primary"><i class="fa fa-list"></i></a>
									<a href="<?= site_url('detailtransaksi/edit/' . $key->Id_DetailTransaksi) ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
									<a href="<?= site_url('detailtransaksi/hapus/' . $key->Id_DetailTransaksi) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
