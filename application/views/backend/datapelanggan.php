<?php $this->load->view('backend/header') ?>
<div id="content-wrapper" class="d-flex flex-column">
	<!-- Main Content/isi -->
	<div id="content">
		<?php $this->load->view('backend/topbar') ?>
		<div class="container-fluid">
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">Data Pelanggan </h1>

			</div>
			<div class="card row">
				<div class="card-body">

					<table id="dataTable" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th width="50">No</th>
								<th>Nama Lengkap</th>
								<th>Alamat</th>
								<th>No.WA</th>
								<th>Email</th>
								<th>Tanggal Daftar</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!empty($pelanggan)) :
								foreach ($pelanggan as $key => $datapelanggan) {
									$no = $key + 1;
									echo '<tr>';
									echo '<td>' . $no . '</td>';
									echo '<td>' . $datapelanggan->nama_lengkap . '</td>';
									echo '<td>' . $datapelanggan->alamat_lengkap . '</td>';
									echo '<td>' . $datapelanggan->no_wa . '</td>';
									echo '<td>' . $datapelanggan->email . '</td>';
									echo '<td>' . $datapelanggan->tgl_daftar . '</td>';
								}
							endif; ?>
						</tbody>
					</table>
				</div>
			</div>

		</div>
		<script type="text/javascript">
			function edit_kat(id) {
				$('#modal_kategori').modal('toggle');
				$('#kategori_id').val($('#' + id).data('id'));
				$('#nama_kategori').val($('#' + id).data('name'));
			}
		</script>

		<?php $this->load->view('backend/footer') ?>