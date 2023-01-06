<?php $this->load->view('backend/header') ?>
<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content/isi -->

    <div id="content">
        <?php $this->load->view('backend/topbar') ?>
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Kamera</h1>

            </div>
            <div class="card row">
                <div class="card-body">
                    <form data-parsley-validate action="<?php echo base_url('admin/datakamera/simpan') ?>" method="post" enctype="multipart/form-data">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="form-label">Nama</label>
                                <input type="hidden" name="iduser" id="id_kamera" value="<?= $this->session->userdata('id_kamera') ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label">merek</label>
                                <select class="form-control" name="id_merek" required="required">
                                    <option value="">Pilih Merek</option>
                                    <?php foreach ($merek as $key => $datamerek) :

                                        if ($kid == $datamerek->merek_id) {
                                            echo '<option value="' . $kid . '" selected>' . $datamerek->nama_merek . '</option>';
                                        } else {
                                            echo '<option value="' . $datamerek->id_merek . '">' . $datamerek->nama_merek . '</option>';
                                        }
                                    endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Spesifikasi</label>
                                <textarea style="white-space: pre-line;" rows="10" class="form-control" name="spesifikasi" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Stok</label>
                                <input type="text" class="form-control" name="Stok" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Harga Sewa</label>
                                <input type="text" class="form-control" name="harga Sewa" required>
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" accept="image/*" required><br>
                                <?php if (!empty($data[0]->gambar)) : ?>
                                    <img src="<?php echo base_url('assets/images/' . $data[0]->gambar); ?>" width="100" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label></label>
                                <button class="btn btn-info" type="submit">Simpan</button>
                                <a class="btn btn-default" href="<?php echo base_url('admin/datakamera') ?>">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('backend/footer') ?>