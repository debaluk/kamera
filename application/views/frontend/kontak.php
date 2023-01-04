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
							<li><a href="#">Kontak</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
	
		
		
	<div class="product-area section">
		<div class="container">
			
		</div>
	</div>
		
	<?php $this->load->view("frontend/footer.php") ?>
		
</body>

</html>