<!DOCTYPE html>
<html lang="zxx">
<?php $this->load->view("frontend/head.php") ?>
<body class="js">

	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->


	<!-- Header -->
	<header class="header shop">
		<!-- Top bar -->
		<?php $this->load->view("frontend/topbar.php") ?>
		<?php $this->load->view("frontend/menu.php") ?>
		
	</header>
	<!--/ End Header -->
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="<?= base_url("welcome") ?>">Home </a><i class="ti-arrow-right"></i></li>
							<li><a href="#">Kamera</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		<div class="single-slider" style="background-image: url('https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1534396130/wbhx8zcawpdev96xmzra.jpg'); background-blend-mode: multiply; box-shadow: inset 0 0 0 1000px rgba(0,0,0,.2);">
			<div class="layer">
				<div class="container">
					<div class="row no-gutters">
						<div class="col-lg-9 offset-lg-3 col-12">
							<div class="text-inner">
								<div class="row">
									<div class="col-lg-7 col-12">
										<div class="hero-text">
											<h1 style="color: #d44648;"><span>PROMO KEMERDEKAAN </span> Rayakan Kemerdekaan dengan <br> Diskon 20%</h1>
											<p>Bebaskan dirimu dari tugas PADSI <br> diskon 20% setiap peminjaman kamera</p>
											<div class="button">
												<a class="btn">KODE PROMO: MERDEKATUGAS</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
		
		<!-- Start Product Area -->
		<div class="product-area section">
			<div class="container">
				
			</div>
		</div>
		
		<!-- Start Footer Area -->
		<?php $this->load->view("frontend/footer.php") ?>
		
</body>

</html>