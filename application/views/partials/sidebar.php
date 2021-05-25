<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard') ?>">
				<div class="fas fa-user" style="font-size:60px">
                </i>
				</div>
				<li class="sidebar-brand-text mx-3">
				<?= $this->session->login['nama'] ?></span>
			</a>
			<hr class="sidebar-divider my-0">
			<li class="nav-item <?= $aktif == 'dashboard' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('dashboard') ?>">
	<i class="fas" style="font-size:15px"> &#xf52b; </i>
					<span>Beranda</span></a>
			</li>
			<hr class="sidebar-divider">

			<div class="sidebar-heading">
				Data Barang
			</div>

			<li class="nav-item <?= $aktif == 'barang' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('barang') ?>">
					<i class="fas fa-fw fa-box"></i>
					<span>Management Stock</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">
	
			<div class="sidebar-heading">
				Transaksi
			</div>

			<li class="nav-item <?= $aktif == 'penjualan' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('penjualan') ?>">
					<i class="fas fa-fw fa-file-invoice"></i>
					<span>Transaksi Penjualan</span></a>
			</li>

			<?php if ($this->session->login['role'] == 'admin'): ?>
				<!-- Heading -->
				<div class="sidebar-heading">
					Analisa Profit
				</div>

				<li class="nav-item <?= $aktif == 'dataset' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url('dataset') ?>">
						<i class="fa" style="font-size:14px"> &#xf201; </i>
						<span>Dataset</span></a>
				</li>

				<li class="nav-item <?= $aktif == 'belum jadi' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url('attribute') ?>">
						<i class="fa" style="font-size:14px"> &#xf201; </i>
						<span>Atribut</span></a>

				</li>
			
			    <li class="nav-item <?= $aktif == 'belum jadi' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url('belum jadi') ?>">
						<i class="fa" style="font-size:14px"> &#xf201; </i>
						<span>Perhitungan Profit</span></a>

				</li>

			<?php endif; ?>

			<hr class="sidebar-divider">
			<?php if ($this->session->login['role'] == 'admin'): ?>
				<!-- Heading -->
				<div class="sidebar-heading">
					Pengaturan
				</div>

				<li class="nav-item <?= $aktif == 'pengguna' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url('pengguna') ?>">
						<i class="fas fa-fw fa-users"></i>
						<span>Manajement Pengguna</span></a>
				</li>

				<li class="nav-item <?= $aktif == 'kasir' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= base_url('kasir') ?>">
					<i class="fas fa-fw fa-cash-register"></i>
					<span>Management Kasir</span></a>
			</li>

				<li class="nav-item <?= $aktif == 'toko' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= base_url('toko') ?>">
						<i class="fas fa-fw fa-building"></i>
						<span>Profil Toko</span></a>
				</li>

				<!-- Divider -->
				<hr class="sidebar-divider d-none d-md-block">
			<?php endif; ?>

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
