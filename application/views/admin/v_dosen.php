<div class="col-md-12">
	<div class="card">
		<div class="card-header" style="background-color: aqua"><?php echo $sub_judul; ?></div>
		<div class="card-body" style="background-color: pink">

			<a href= "<?php echo site_url('admin/Dosen/tambah') ?>" class="btn btn-primary btn-sm">Tambah Data</a>
			<hr>
			<table class="table table-bordered">
				<tr style="background-color: aqua">
					<th>NIK</th>
					<th>Nama Dosen</th>
					<th>Tgl Dibuat</th>
					<th>Aksi</th>
				</tr>
				<?php foreach ($isi_tabel as $key ) {
					# code...
				?>
				<tr style="background-color: white">
					<td><?php echo $key->nik; ?></td>
					<td><?php echo $key->nama_dosen; ?></td>
					<td><?php echo date('d M Y', strtotime($key->created_at)); ?></td>
					<td>
						<a href= "" class="btn btn-warning btn-sm">Edit</a>
						<a href= "" class="btn btn-danger btn-sm">Hapus</a>
					</td>
					
				</tr>
				<?php }  ?>
			</table>
		</div>
	</div>
</div>