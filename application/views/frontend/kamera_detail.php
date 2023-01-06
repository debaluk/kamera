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
							<li><a href="#">Detail Kamera</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
	<div class="container">
		<div class="row no-gutters">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <!-- Product Slider -->
                <div class="product-gallery">
                    <div class="quickview-slider-active owl-carousel owl-theme owl-loading">                        
                       
                    	<div class="owl-stage-outer">
							<div class="owl-stage owl-refresh" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
								<div class="owl-item cloned">
									<div class="single-slider">
										<img src="<?php echo base_url("/assets/images/". $detailkamera->gambar_utama) ?>" alt="<?php echo $detailkamera->nama_kamera;?>">
									</div>
								</div>
								<div class="owl-item">
									<div class="single-slider">
                            			<img src="<?php echo base_url("/assets/images/". $detailkamera->gambar_utama) ?>" alt="<?php echo $detailkamera->nama_kamera;?>">
                        			</div>
								</div>
								<div class="owl-item cloned">
									<div class="single-slider">
                            			<img src="<?php echo base_url("/assets/images/". $detailkamera->gambar_utama) ?>" alt="<?php echo $detailkamera->nama_kamera;?>">
                        			</div>
								</div>
							</div>
						</div>
					</div>
            	</div>
                <div class="product-gallery">
                    <div class="quickview-slider-active">
                        <div class="single-slider">
                            <img src="<?php echo base_url("/assets/images/". $detailkamera->gambar_utama) ?>" alt="<?php echo $detailkamera->nama_kamera;?>">
                        </div>
                       
                    </div>
                </div>
                <!-- End Product slider -->
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="quickview-content">
                    <h2><?php echo $detailkamera->nama_kamera;?></h2>
                    <div class="quickview-ratting-review">
                        <div class="quickview-stock">
                            <span><?php echo $detailkamera->nama_merek;?></span>
                        </div>
                        <div class="quickview-stock">
                            <span class="text-success"><i class="fa fa-check-circle-o"></i> 
							<?php 
							if ($detailkamera->status_tersedia==0) 
							{ 
								echo "Tersedia";
							} 
							else 
							{ 
								echo "Tidak Tersedia";
								} ?>
							</span>
                    	</div>
                                            </div>
                    <h3>Rp. <?php echo number_format($detailkamera->harga_sewa, 0, ',', '.'); ?></h3>
                    <div class="quickview-peragraph">
                        <p><?php echo $detailkamera->spesifikasi; ?></p>
                        <br>
                        
                    </div>
                    <br>
                   
                    <div class="add-to-cart">
                            <a href="<?= base_url("kamera/sewa/".$detailkamera->id_kamera) ?>"><div class="btn btn-primary"> Sewa </div></a>                            <!-- <a href="#" class="btn min"><i class="ti-heart"></i></a> -->
                    </div>
				</div>  
			</div>  
		</div>          
	</div>                           
	<!-- Start Footer Area -->
	<?php $this->load->view("frontend/footer.php") ?>
		
</body>

</html>