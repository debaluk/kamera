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
	
	<!-- Start Product Area -->
	<div class="product-area section">
		<div class="container">
			<div class="col-12">
				<div class="section-title" id="kam">
					<h2>Kamera</h2>
				</div>
			</div>
			<div class="col-12">
				<div class="product-info">
					<div class="nav-main">
						<!-- Tab Nav -->
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<?php 
							$x=0;
							foreach ($merek as $m) : ?>
							<li class="nav-item"><a class="nav-link <?php if($x==0) { echo "active"; } ?>" data-toggle="tab" href="#<?php echo $m->id_merek;?>" role="tab"><?php echo $m->nama_merek;?></a></li>
							<?php
								$x++;
							endforeach; ?>
						</ul>
					</div>

					<div class="tab-content" id="myTabContent">
						
						<?php 
						$xtab=0;
						foreach ($merek as $tabm) : ?>
						<div class="tab-pane fade show <?php if($xtab==0) { echo "active"; } ?>" id="<?php echo $tabm->id_merek;?>" role="tabpanel">
							<div class="tab-single">
								<div class="row">
									<!--kamera per merek -->
									<?php			
									$kameraproduk = $this->db->select("*")
										->where('id_merek',$tabm->id_merek)
									  	->get("kamera");
									foreach ($kameraproduk->result() as $key => $datakamera) 
									{

								    ?>
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										<div class="single-product">
											<div class="product-img">
												<a href="<?= base_url("kamera/detail/" . $datakamera->id_kamera); ?>">
													<img class="default-img" src="<?php echo base_url("/assets/images/". $datakamera->gambar_utama) ?>" alt="#">
													
												</a>
												
											</div>
											<div class="product-content"> <div align="center">
												<h3><a href="<?= base_url("kamera/detail/" . $datakamera->id_kamera); ?>"><?php echo $datakamera->nama_kamera;?></a></h3>
												<div class="product-price">
													<span>Rp. <?php echo $datakamera->harga_sewa;?></span>
												</div>
									</div>
											</div>
										</div>
									</div>
									<?php } ?>
								</div>
							</div>
						</div>
						<?php
						$xtab++;
						endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Start Footer Area -->
	<?php $this->load->view("frontend/footer.php") ?>
		
</body>

</html>