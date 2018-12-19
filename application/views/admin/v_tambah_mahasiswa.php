<div class="col-md-6 offset-md-3">
	<div class="card">
		<div class="card-header" style="background-color:pink"> <?php echo $sub_judul ?> </div>
		<div class="card-body">

			<form action="" method="post">
				<div class="form-group">
					<label>Nim</label>
					<input type="text" class="form-control" name="nim">
				</div>
				<div class="form-group">
					<label>Nama Mahasiswa</label>
					<input type="text" class="form-control" name="nama_mahasiswa">
				</div>
				<div class="form-group">
					<label>Program Studi</label>
					<select class="form-control" name="program_Studi">
						<option value="D3 MI">D3 MI</option>
						<option value="D3 TI">D3 TI</option>
						<option value="S1 TI">SI TI</option>
						<option value="S1 DKV">S1 DKV</option>
					</select>
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Simpan</button>
				</div>
			</form>

			
		</div>
	</div>
</div> 