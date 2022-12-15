		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
				<div class="sidebar-brand-icon rotate-n-15">
					<!-- Image -->
				</div>
				<div class="sidebar-brand-text mx-1">Bestnet Computer</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="<?= site_url('welcome') ?>">
					<i class="fas fa-fw fa-home"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Transaksi
			</div>

			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
					<i class="fas fa-fw fa-users"></i>
					<span>Master Data User</span>
				</a>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="<?= site_url('jabatan') ?>">Data Jabatan</a>
						<a class="collapse-item" href="<?= site_url('user') ?>">Data User</a>
						<a class="collapse-item" href="<?= site_url('pelanggan') ?>">Data Pelanggan</a>
					</div>
				</div>
			</li>

			<!-- Nav Item - Utilities Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
					<i class="fas fa-fw fa-table"></i>
					<span>Master Data Transaksi</span>
				</a>
				<div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="<?= site_url('pricelist') ?>">Data Pricelist Servis</a>
						<a class="collapse-item" href="<?= site_url('transaksi') ?>">Data Transaksi</a>
					</div>
				</div>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<!-- <div class="sidebar-heading">
				Laporan
			</div> -->

			<!-- Nav Item - Pages Collapse Menu -->
			<!-- <li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
					<i class="fas fa-fw fa-book"></i>
					<span>Laporan Transaksi</span>
				</a>
				<div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<h6 class="collapse-header">Rincian Transaksi:</h6>
						<a class="collapse-item" href="#">Transaksi Harian</a>
						<a class="collapse-item" href="#">Transaksi Mingguan</a>
						<a class="collapse-item" href="#">Transaksi Bulanan</a>
					</div>
				</div>
			</li> -->

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->
