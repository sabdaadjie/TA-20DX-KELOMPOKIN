		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
				<div class="sidebar-brand-icon rotate-n-15">
					<!-- Image -->
				</div>

				<img class="btn-circle elevation-3" src="<?= base_url() ?>/assets/img/bestnet.png" alt="AdminLTELogo" height="150" width="150">
				<div class="sidebar-brand-text mx-1">BESTNET COMPUTER</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item active">
				<a class="nav-link" href="<?= site_url('welcome') ?>">
					<i class="fas fa-fw fa-home"></i>
					<span>Dashboard</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="<?= site_url('pelanggan/add') ?>">
					<i class="fas fa-fw fa-plus"></i>
					<span>Tambah Pelanggan</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="<?= site_url('transaksi/add') ?>">
					<i class="fas fa-fw fa-plus"></i>
					<span>Tambah Transaksi</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Heading -->
			<div class="sidebar-heading">
				Pengguna
			</div>

			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
					<i class="fas fa-fw fa-users"></i>
					<span>Master Data User</span>
				</a>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="<?= site_url('user') ?>">Data Petugas</a>
						<a class="collapse-item" href="<?= site_url('pelanggan') ?>">Data Pelanggan</a>
					</div>
				</div>
			</li>

			<!-- Heading -->
			<div class="sidebar-heading">
				Transaksi
			</div>

			<li class="nav-item active">
				<a class="nav-link" href="<?= site_url('transaksi') ?>">
					<i class="fas fa-fw fa-table"></i>
					<span>Data Taransaksi</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="<?= site_url('detailtransaksi') ?>">
					<i class="fas fa-fw fa-table"></i>
					<span>Data Detail Transaksi</span></a>
			</li>

			<li class="nav-item active">
				<a class="nav-link" href="<?= site_url('pricelist') ?>">
					<i class="fas fa-fw fa-book"></i>
					<span>Data Pricelist Servis</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->
