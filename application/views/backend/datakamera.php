<?php $this->load->view('backend/header') ?>
<div id="content-wrapper" class="d-flex flex-column">
	<!-- Main Content/isi -->
	<div id="content">
		<?php $this->load->view('backend/topbar') ?>
		<div class="container-fluid">
			<div class="d-sm-flex align-items-center justify-content-between mb-4">
				<h1 class="h3 mb-0 text-gray-800">Data kamera </h1>

			</div>
			<div class="card row">
				<div class="card-body">
					<div class="pull-right">
						<a href="<?php echo base_url('admin/datakamera/tambahkamera'); ?>" class="btn btn-primary ">Tambah kamera</a>
					</div>
					<br>
					<table id="dataTable" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th width="50">No</th>
								<th>Merek</th>
								<th>Jenis Kamera</th>
								<th>Spesifikasi</th>
								<th>Stok</th>
								<th>Harga Sewa</th>
								<th>Status</th>
								<th width="130">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!empty($kamera)) :
								foreach ($kamera as $key => $datakamera) {
									$no = $key + 1;
									echo '<tr>';
									echo '<td>' . $no . '</td>';
									echo '<td>' . $datakamera->nama_merek . '</td>';
									echo '<td>' . $datakamera->nama_kamera . '</td>';
									echo '<td>' . $datakamera->spesifikasi . '</td>';
									echo '<td>' . $datakamera->stok . '</td>';
									echo '<td>' . $datakamera->harga_sewa . '</td>';
									echo '<td>' . $datakamera->status_tersedia . '</td>';
									echo '<td>
									<a href="' . base_url('admin/datakamera/editkamera/' . $datakamera->id_kamera) . '"class="btn btn-info btn-xs">Edit</a>
									<a href="' . base_url('admin/datakamera/hapus/' . $datakamera->id_kamera) . '" class="btn btn-danger btn-xs">Hapus</a>  
							</td>';
									echo '</tr>';
								}
							endif; ?>
						</tbody>
					</table>
				</div>
			</div>

		</div>
		

		<?php $this->load->view('backend/footer') ?>