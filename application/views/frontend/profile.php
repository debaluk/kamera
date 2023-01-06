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
							<li><a href="#">Profile</a></li>
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
	</section>	
	<!--/ End Single Slider -->
	
	<section class="blog-single section">
        <div class="container">
            <div class="">
                <div class="col-lg-12 col-12">
                    <div class="blog-single-main">                       
						<div class="col-12">
							<div class="blog-detail">
								<h2 class="blog-title">Profile</h2>
								
								<div class="content">
									<p>
									<?php echo $profile->profile;?>
									</p>
									
									<div class="contact">
										<ul>
											<li><?php echo $profile->alamat;?></li>
											<li><a href="#"><i class="ti-facebook"></i><?php echo $profile->alamat_fb;?></a></li>
											<li><a href="#"><i class="ti-instagram"></i><?php echo $profile->alamat_ig;?></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<!-- Start Footer Area -->
	<?php $this->load->view("frontend/footer.php") ?>
		
</body>

</html>