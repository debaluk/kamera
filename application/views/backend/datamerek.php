<?php $this->load->view('backend/header') ?>
<div id="content-wrapper" class="d-flex flex-column">
	<!-- Main Content/isi -->
	<div id="content">
		<?php $this->load->view('backend/topbar') ?>
		<div class="container-fluid">
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">Data merek </h1>

			</div>
			<div class="card row">
				<div class="card-body">
					<div class="pull-right">
						<a href="#" data-toggle="modal" data-target="#modal_merek" class="btn btn-primary ">Tambah Merek</a>
					</div>
					<br>
					<div align="center"><?php echo $this->session->userdata('sukses'); ?><br></div>
					<table id="dataTable" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th width="50">No</th>
								<th>Nama Merek</th>

								<th width="80">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!empty($merek)) :
								foreach ($merek as $key => $datamerek) {
									$no = $key + 1;
									echo '<tr>';
									echo '<td>' . $no . '</td>';
									echo '<td>' . $datamerek->nama_merek . '</td>';

									echo '<td width="150">
							
									<a class="btn btn-info btn-xs" href="#" id="' . $no . '" data-id="' . $datamerek->id_merek . '" data-name="' . $datamerek->nama_merek . '" onclick="edit_kat(\'' . $no . '\')">Edit</a>
									<a class="btn btn-danger btn-xs" href="' . base_url('admin/datamerek/hapus/' . $datamerek->id_merek) . '">Hapus</a>
									</td>';
									echo '</tr>';
								}
							endif; ?>
						</tbody>
					</table>
				</div>
			</div>

		</div>
		<div id="modal_merek" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Data Merek</h4>
					</div>
					<form class="" action="<?php echo base_url('admin/datamerek/simpan') ?>" method="post">
						<div class="modal-body">
							<div class="form-group">
								<label>Nama Merek</label>
								<input type="hidden" name="id_merek" id="id_merek" class="form-control">
								<input type="text" name="nama_merek" id="nama_merek" class="form-control" required>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-info">Simpan</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
						</div>
					</form>
				</div>

			</div>
		</div>

		<script type="text/javascript">
			function edit_kat(id) {
				$('#modal_merek').modal('toggle');
				$('#id_merek').val($('#' + id).data('id'));
				$('#nama_merek').val($('#' + id).data('name'));
			}
		</script>

		<?php $this->load->view('backend/footer') ?>