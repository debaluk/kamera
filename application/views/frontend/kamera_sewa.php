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
							<li><a href="#">Detail Sewa</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
					<div class="row">
                        
						<thead>
							<tr class="main-hading">
								<th>NO</th>
								<th>Nama Kamera</th>
								<th class="text-center">Harga</th>
								<th class="text-center">Qty</th>
								<th class="text-center">Tgl. Pinjam</th>
								<th class="text-center">Jml. Hari</th>
								<th class="text-center">Sub-Total</th>
								
							</tr>
						</thead>
						<tbody>
								<tr>
										<td>1</td>
										<td class="id" hidden="">2</td>
										<td>Nikon Z50</td>
										<td><span>Rp. 50.000,00</span></td>
										<td style="text-align: center;">1</td>
										<td>
											<input class="form-control" type="date" id="tgl_pinjam" name="tgl_pinjam" value="" placeholder="Tanggal Pinjam" required="">
										</td>
										<td>
											<select class="form-control" id="durasi_peminjaman" name="durasi_peminjaman" required="">
												<option value="1">1 hari</option>
												<option value="2">2 hari</option>
												<option value="3">3 hari</option>
                                        	</select>
										</td>
										<td ><span>Rp. 50.000,00</span></td>
										
									</tr>
																
													</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-7 col-md-5 col-12">
								<div class="left">
									<div class="coupon">
										<form action="http://localhost/kamera1/frontend/cart/hitungDiskon" method="post">
											<input name="coupon" id="coupon" type="text" placeholder="Masukan Kode Promo" class="form-control">
											<button class="btn" type="submit">Cek</button>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-5 col-md-7 col-12">
								<div class="right">
									<ul>
																															<li>Sub Total<span>Rp. 50.000,00</span></li>
											<li>Promo<span>Rp. 0</span></li>
											<li class="last"><b>Total Pembayaran<span>Rp. 50.000,00</span></b></li>
																			</ul>
									<div class="button5">
										<a href="http://localhost/kamera1/frontend/cart/checkout" class="btn">Selesaikan Pesanan</a>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div> </div>        
	<!-- Start Footer Area -->
	<?php $this->load->view("frontend/footer.php") ?>
		
</body>

</html>