<!doctype html>
<html lang="en">

<head>
	<title>Bestnet &mdash; Jual,service Komputer,Laptop,Printer & alat-alat Networikng</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Free-Template.co" />
	<link rel="shortcut icon" href="<?= base_url() ?>/assets/user/images/logo.png">

	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url() ?>/assets/user/fonts/icomoon/style.css">

	<link rel="stylesheet" href="<?= base_url() ?>/assets/user/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/user/css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/user/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/user/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/user/fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/user/css/aos.css">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>/assets/user/css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border text-primary" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>

	<div class="site-wrap" id="home-section">

		<div class="site-mobile-menu site-navbar-target">
			<div class="site-mobile-menu-header">
				<div class="site-mobile-menu-close mt-3">
					<span class="icon-close2 js-menu-toggle"></span>
				</div>
			</div>
			<div class="site-mobile-menu-body"></div>
		</div>

		<!-- Topbar -->
		<?php include "Topbar.php"; ?>
		<!-- End Topbar -->

		<!-- Cek servis -->
		<?php include "cekservis.php"; ?>
		<!-- end cek servis -->

		<!-- start pricelist sesion -->
		<div class="site-section bg-light" id="price-list-section">
			<div class="container">
				<div class="row mb-5 justify-content-center">
					<div class="col-md-7 text-center">
						<div class="block-heading-1">
							<h2>HARGA SERVICE</h2>
							<p>Price List Harga service di besnet computer bisa berubah sewaktu-waktu tergantung kesulitan dan sparepart yang di ganti.</p>
						</div>
					</div>
				</div>

				<table class="table">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Kerusakan</th>
							<th scope="col">Estimasi Pengerjaann</th>
							<th scope="col">Harga</th>
						</tr>
					</thead>
					<tbody class="table-group-divider">
						<tr>
							<th scope="row">1</th>
							<td>Install Windows All Versi</td>
							<td>3 Jam</td>
							<td>Rp. 70.000</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Install Software</td>
							<td>1 jam</td>
							<td>Rp. 30.000</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Laptop Mati Total</td>
							<td>3 Hari</td>
							<td>Est + - Rp.500.000 </td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- end price list -->


	

	<!--  footer start -->
	<?php include "footer.php"; ?>
	<!-- end footer -->

	</div>

	<script src="<?= base_url() ?>/assets/user/js/jquery-3.3.1.min.js"></script>
	<script src="<?= base_url() ?>/assets/user/js/popper.min.js"></script>
	<script src="<?= base_url() ?>/assets/user/js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>/assets/user/js/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>/assets/user/js/jquery.sticky.js"></script>
	<script src="<?= base_url() ?>/assets/user/js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url() ?>/assets/user/js/jquery.animateNumber.min.js"></script>
	<script src="<?= base_url() ?>/assets/user/js/jquery.fancybox.min.js"></script>
	<script src="<?= base_url() ?>/assets/user/js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url() ?>/assets/user/js/aos.js"></script>

	<script src="<?= base_url() ?>/assets/user/js/main.js"></script>


</body>

</html>
