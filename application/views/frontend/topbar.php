<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +62 822 6088 7371</li>
								<li><i class="ti-email"></i> pesonalens@gmail.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								
								<?php 
								if ($this->session->userdata('id_pelanggan') != null){ ?>
								<!--<li><i class="ti-user"></i><a href="<?= base_url('profilepelanggan') ?>"><?php echo $_SESSION['nama_user'] ?></a></li>-->
								<li><i class="ti-user"></i><a href="<?= base_url('akun') ?>"><?php echo $_SESSION['nama_user'] ?></a></li>
								<li><i class="ti-power-off"></i><a href="<?= base_url('akun/logout') ?>"> Logout</a>
								</li>
								<?php } else { ?>
								<li><i class="ti-user"></i><a href="<?= base_url('akun') ?>"><?php echo " Akun" ?></a></li>
								<li><i class="ti-power-off"></i><a href="<?= base_url('akun/login') ?>"> Login</a>
								</li>
								<?php } ?>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="<?= base_url('welcome')?>"><img src="<?= base_url("assets/") ?>images/logo2.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-10 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<form>
									<input name="search" placeholder="Cari Kamera....." type="search">
									<button class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		