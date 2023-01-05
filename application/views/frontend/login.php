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
	
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Pelanggan Login</h3>
                        </div>

                        <div class="card-body">
                            <form class="user" method="post" action="<?= base_url('akun/proses_login') ?>">
                                <?php echo $this->session->flashdata('message'); ?>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Nama User</label>
                                    <input class="form-control py-4" id="inputEmailAddress" type="text" name="namusernamea_user" value="<?= set_value('username'); ?>" placeholder="Masukan Nama User" />
                                    <?= form_error('username', ' <small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1" for="inputPassword">Password</label>
                                    <input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Masukan password" />
                                    <?= form_error('password', ' <small class="text-danger">', '</small>') ?>
                                </div>
                                
                                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <!--<a class="small" href="password.html">Forgot Password?</a>-->
                                    <button class="btn btn-primary" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <div class="small"><a href="<?= base_url('akun/pendaftaran'); ?>">Belum terdaftar? Yuk daftar dulu disini!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
	<?php $this->load->view("frontend/footer.php") ?>
		
</body>

</html>