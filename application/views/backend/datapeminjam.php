<?php $this->load->view('backend/header') ?>
<div id="content-wrapper" class="d-flex flex-column">
	<!-- Main Content/isi -->
	<div id="content">
		<?php $this->load->view('backend/topbar') ?>
		<div class="container-fluid">
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">Data Sewa </h1>

			</div>
			<div class="card row">
				<div class="card-body">

				<table id="dataTable" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th width="50">No</th>
								<th>Tgl. Pinjam</th>
								<th>No. Invoice</th>
								<th>Nama Pelanggan</th>
								<th>Nama Kamera</th>
								<th>Harga Sewa</th>
								<th>Qty</th>
								<th>Jml. Hari</th>
								<th>Total</th>
								<th>Status</th>
								<th width="130">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!empty($datapeminjaman)) :
								foreach ($datapeminjaman as $key => $datasewa) {
									$no = $key + 1;
									echo '<tr>';
									echo '<td>' . $no . '</td>';
									echo '<td>' . $datasewa->tgl_pinjam . '</td>';
									echo '<td>' . $datasewa->no_invoice . '</td>';
									echo '<td>' . $datasewa->nama_lengkap . '</td>';
									echo '<td>' . $datasewa->nama_kamera . '</td>';
									echo '<td>' . $datasewa->harga_sewa . '</td>';
									echo '<td>' . $datasewa->qty . '</td>';
									echo '<td>' . $datasewa->jml_hari . '</td>';
									echo '<td>' . $datasewa->total_biaya_sewa . '</td>';
									echo '<td>' . $datasewa->status_peminjaman . '</td>';
									echo '<td>
									<a href="' . base_url('admin/datapeminjaman/detail/' . $datasewa->id_peminjaman) . '"class="btn btn-info btn-xs">Edit</a>
									<a href="' . base_url('admin/datapeminjaman/hapus/' . $datasewa->id_peminjaman) . '" class="btn btn-danger btn-xs">Hapus</a>  
							</td>';
									echo '</tr>';
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