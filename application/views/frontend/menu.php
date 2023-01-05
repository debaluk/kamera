<div class="header-inner">
	<div class="container">
		<div class="cat-nav-head">
			<div class="row">
				<div class="col-lg-9 col-12">
					<div class="menu-area">
						<!-- Main Menu -->
						<nav class="navbar navbar-expand-lg">
							<div class="navbar-collapse">
								<div class="nav-inner">
									<ul class="nav main-menu menu navbar-nav">
										<li><a href="<?= base_url("welcome") ?>">Beranda</a></li>
										<li><a href="<?= base_url("profile") ?>">Profile</a></li>
										<li><a href="<?= base_url("kamera") ?>">Kamera</a></li>
										
										<li><a href="<?= base_url("kontak") ?>">Kontak Kami</a></li>
										<?php
										if ($this->session->userdata('id_pelanggan')) {
										?> <li><a href="<?= base_url("pesanan") ?>">Pesanan</a></li> <?php } ?>

									</ul>
								</div>
							</div>
						</nav>
						<!--/ End Main Menu -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>