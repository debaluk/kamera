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
                            <h3 class="text-center font-weight-light my-4">Pedaftaran Pelanggan</h3>
                        </div>

                        <div class="card-body">
                            <form class="user" method="post" action="<?= base_url('akun/proses_pendaftaran') ?>">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputNama">Nama</label>
                                    <input class="form-control py-4" id="nama_lengkap" type="text" name="nama_lengkap" value="" placeholder="Masukan Nama Lengkap" required="">
                                </div>

                                <div class="form-group">
                                    <label class="small mb-1" for="inputNIK">Alamat Lengkap</label>
                                    <input class="form-control py-4" id="alamat_lengkap" type="text" name="alamat_lengkap" value="" placeholder="Masukan Alamat Lengkap" required="">
                                </div>

                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmail">No. WA</label>
                                    <input class="form-control py-4" id="no_wa" type="text" name="no_wa" value="" placeholder="Masukan Nomor WA" required="">
                                </div>


                                <div class="form-group">
                                    <label class="small mb-1" for="inputAlamat">Email</label>
                                    <input class="form-control py-4" id="email" type="text" name="email" value="" placeholder="Masukan Email" required="">
                                                                    </div>

                                <div class="form-group">
                                    <label class="small mb-1" for="inputUsername">Nama User</label>
                                    <input class="form-control py-4" id="nama_user" type="text" name="nama_user" value="" placeholder="Masukan Nama User" required="">
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control py-4" id="password_user" type="password" name="password_user" placeholder="Enter password" required="">
                                         </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                            <input class="form-control py-4" id="re_password_user" type="password" name="re_password_user" placeholder="Confirm Password" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                                </div>
                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        
	<?php $this->load->view("frontend/footer.php") ?>
		
</body>

</html>