<!-- DataTales Example -->
<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title"><?= $subjudul ?></h3>
	</div>
	<div class="card shadow mb-4">
		<div class="card-body">
			<a href="<?= site_url('pricelist/add') ?>" class="btn btn-success">Tambah Data</a>
			<hr>
			<div class="table-responsive">
				<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<th>No.Id_Price</th>
						<th>Nama Servis</th>
						<th>Harga</th>
						</th>
						<th>Aksi</th>
					</thead>
					</tr>
					<tbody>
						<?php foreach ($datapricelist as $key) {
						?>
							<tr>
								<td><?php echo $key->Id_Pricelist ?></td>
								<td><?php echo $key->Nama_Servis ?></td>
								<td><?php echo $key->Harga ?></td>
								<td>
									<a href="<?= site_url('pricelist/edit/' . $key->Id_Pricelist) ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
									<a href="<?= site_url('pricelist/hapus/' . $key->Id_Pricelist) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
