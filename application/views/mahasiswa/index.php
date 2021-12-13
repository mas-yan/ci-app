<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">

			<!-- <?php if ($this->session->flashdata('flash')):?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash') ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif ?> -->

			<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>

			<a href="<?= base_url('mahasiswa/tambah') ?>" class="btn btn-primary">Tambah data mahasiswa</a>

			<form action="" method="post">
				<div class="input-group mt-3">
					<input type="text" name="keyword" class="form-control" placeholder="Cari...">
					<div class="input-group-append">
						<button class="btn btn-primary" type="button">Cari</button>
					</div>
				</div>
			</form>

			<div class="card mt-3">
				<div class="card-header">
					Mahasiswa
				</div>

				<ul class="list-group list-group-flush">
					<?php foreach ($mahasiswa as $mhs):?>
						<li class="list-group-item"><?= $mhs['nama'] ?>
							<a href="<?= base_url() ?>mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger float-right tombol-hapus">Hapus</a>

							<a href="<?= base_url() ?>mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge badge-success float-right" style="margin-right: 5px">Ubah</a>

							<a href="<?= base_url() ?>mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-primary float-right" style="margin-right: 5px">Detail</a>
						</li>
					<?php endforeach ?>
				</ul>
				
			</div>
		</div>
	</div>
</div>