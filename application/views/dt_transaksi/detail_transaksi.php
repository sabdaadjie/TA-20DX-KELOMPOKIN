<div class="row">
	<div class="col-md-9">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title"><?= $subjudul ?></h3>
			</div>
			<div class="card-body">

				<table class="table table-striped table-bordered">
					<tr>
						<td>ID Pelanggan</td>
						<td>: <?= $datapelanggan->Id_Pelanggan ?></td>
					</tr>
					<tr>
						<td>Nama_Pelanggan</td>
						<td>: <?= $datapelanggan->Nama_Pelanggan ?></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>: <?= $datapelanggan->Nama ?></td>
					</tr>
					<tr>
						<td>No Wa</td>
						<td>: <?= $datapelanggan->No_Wa ?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>: <?= $datapelanggan->Alamat ?></td>
					</tr>
				</table>
			</div>
			<div class="card-footer">
				<a href="<?= site_url('pelanggan') ?>" class="btn btn-danger">Kembali</a>
			</div>
		</div>
	</div>
