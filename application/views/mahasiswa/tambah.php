<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form tambah mahasiswa
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="form-group">
							<label for="nim">Nim</label>
							<input type="text" value="<?= set_value('nim'); ?>" name="nim" class="form-control" id="nim">
							<small id="emailHelp" class="form-text text-danger"><?= form_error('nim') ?></small>
						</div>
						<div class="form-group">
							<label for="nama">nama</label>
							<input type="text" value="<?= set_value('nama'); ?>" name="nama" class="form-control" id="nama">
							<small id="emailHelp" class="form-text text-danger"><?= form_error('nama') ?></small>
						</div>
						<div class="form-group">
							<label for="email">email</label>
							<input type="text" value="<?= set_value('email'); ?>" name="email" class="form-control" id="email">
							<small id="emailHelp" class="form-text text-danger"><?= form_error('email') ?></small>
						</div>
						<div class="form-group">
						<label for="jurusan">jurusan</label>
						<select class="form-control" name="jurusan" id="jurusan">
								<option value="">--PILIH--</option>
								<option value="Teknik Informatika">Teknik Informatika</option>
								<option value="Akutansi">Akutansi</option>
								<option value="Manajemen">Manajemen</option>
							</select>
							<small id="emailHelp" class="form-text text-danger"><?= form_error('jurusan') ?></small>
						</div>
						<a href="<?= base_url('mahasiswa') ?>" class="btn btn-secondary">Kembali</a>
						<button type="submit" class="btn btn-primary float-right">Tambah Mahasiswa</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>