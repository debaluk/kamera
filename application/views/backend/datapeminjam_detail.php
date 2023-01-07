<?php $this->load->view('backend/header') ?>
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content/isi -->

    <div id="content">
        <?php $this->load->view('backend/topbar') ?>
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Detail Data Peminjaman</h1>

            </div>
            <div class="card row">
                <div class="card-body">
                    <form data-parsley-validate action="<?php echo base_url('admin/profile/update') ?>" method="post" enctype="multipart/form-data">
                        <div class="col-sm-12">
                        <?php echo $this->session->flashdata('message'); ?>
                            <div class="form-group">
                            <input type="hidden" name="id_profile" id="id_profile" value="<?= $profile->id_profile ?>" class="form-control">
                            
                            <div class="form-group">
                                <label class="form-label">Profile</label>
                                <textarea style="white-space: pre-line;" rows="10" class="form-control" name="profile" required><?php echo $profile->profile;?></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="<?php echo $profile->alamat;?>" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">No. WA</label>
                                <input type="text" class="form-control" name="no_wa" value="<?php echo $profile->no_wa;?>" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Alamat Facebook</label>
                                <input type="text" class="form-control" name="alamat_fb" value="<?php echo $profile->alamat_fb;?>" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Alamat IG</label>
                                <input type="text" class="form-control" name="alamat_ig" value="<?php echo $profile->alamat_ig;?>" required>
                            </div>
                            <div class="form-group">
                                <label></label>
                                <button class="btn btn-info" type="submit">Simpan</button>
                                <a class="btn btn-default" href="<?php echo base_url('admin/profile') ?>">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div></div>
<?php $this->load->view('backend/footer') ?>