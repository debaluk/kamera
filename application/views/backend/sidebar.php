<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3">Admin Panel</sup></div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item active">
		<a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Nav Item - Pages Collapse Menu -->

	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('admin/datapeminjaman') ?>">
			<i class="fas fa-fw fa-table"></i>
			<span>Data Peminjaman</span></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('admin/datapelanggan') ?>">
			<i class="fas fa-fw fa-table"></i>
			<span>Data pelanggan</span></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('admin/datamerek') ?>">
			<i class="fas fa-fw fa-table"></i>
			<span>Data Merek</span></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('admin/datakamera') ?>">
			<i class="fas fa-fw fa-table"></i>
			<span>Data kamera</span></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('admin/dataprofile') ?>">
			<i class="fas fa-fw fa-table"></i>
			<span>Data Profile</span></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?php echo base_url('admin/logout') ?>">
			<i class="fas fa-fw fa-table"></i>
			<span>Logout</span></a>
	</li>
	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>


</ul>