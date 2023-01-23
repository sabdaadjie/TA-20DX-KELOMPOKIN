<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nota Tanda Terima</title>
	<link href="<?= base_url() ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

	<style>
		body {
			font-family: monospace, sans-serif;
		}

		ul {
			list-style: none;
			padding: 0;
			overflow-x: hidden;
		}

		.outer {
			width: 100%;
		}

		.inner {
			padding-left: 20px;
		}

		li:not(.nested):before {
			float: left;
			width: 0;
			white-space: nowrap;
			content: "..........................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................";
		}

		li span:first-child {
			padding-right: 0.33em;
			background: #FAFAFA;
		}

		span+span {
			float: right;
			padding-left: 0.33em;
			background: #FAFAFA;
		}

		@media print {
			.hilang-diprint {
				display: none;
			}
		}
	</style>

</head>


<body onload="window.print()">
	<div class="border border-dark my-2 p-4 px-5 mt-4">
		<hr>
		<div class="col text-center">
			<h4>Nota Tanda Terima</h4>
		</div>
		<hr>
		<table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<th>Kode Invoice</th>
				<th>Nama</th>
				<th>No Wa</th>
				<th>Alamat</th>
				<th>Tipe</th>
				<th>Model</th>
				<th>Kelengkapan</th>
				<th>Kendala</th>
				<th>Tanggal Masuk</th>
			</thead>
			</tr>
			<tbody>
				<tr>
					<td><?= $datadetailtransaksi->Kode_Invoice ?></td>
					<td><?= $datadetailtransaksi->Nama ?></td>
					<td><?= $datadetailtransaksi->No_Wa ?></td>
					<td><?= $datadetailtransaksi->Alamat ?></td>
					<td><?= $datadetailtransaksi->Tipe ?></td>
					<td><?= $datadetailtransaksi->Model ?></td>
					<td><?= $datadetailtransaksi->Kelengkapan ?></td>
					<td><?= $datadetailtransaksi->Kendala ?></td>
					<td><?= $datadetailtransaksi->Tanggal_Masuk ?></td>
				</tr>
			</tbody>
		</table>
		<div class="mx-n5 my-2" style="border: 1px black solid"></div>
		<div class="row mt-5 pt-5">
			<div class="col font-weight-bold">...........................</div>
			<div class="col-3 font-weight-bold text-right">...........................</div>
		</div>
		<div class="row">
			<div class="col">
				<h5 class="ml-1 font-weight-bold">Tanda Terima</h5>
			</div>
			<div class="col-3">
				<h5 class="ml-1 font-weight-bold">Hormat Kami</h5>
			</div>
		</div>
		<div class="mt-5" style="border: 1px black dashed"></div>
		<p class="text-center mt-4 text-dark">Terima Kasih Sudah Servis diTempat Kami</p>
		<p class="text-center mt-4 text-dark">Bestnet Computer</p>
	</div>
</body>

</html>
