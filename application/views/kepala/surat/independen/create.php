<section id="basic-examples">
	<div class="row">
		<div class="col-xs-12 mt-1 mb-3">
			<h4 class="">
				Tambah Surat Independen
			</h4>
			<hr>
		</div>
		<div class="col-xs-12">
			<?php 
			if ($this->session->flashdata('error')!==null) {
				?>
				<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php echo $this->session->flashdata('error') ?>
				</div>
				<?php
			}

			if ($this->session->flashdata('success')!==null) {
				?>
				<div class="alert alert-success">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php echo $this->session->flashdata('success') ?>
				</div>
				<?php
			}
			?>
		</div>
	</div>
	<br>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css') ?>">
	<div class="row" style="margin-top: -30px;">
		<div class="col-12">
			<div class="card">
				<div class="card-block">
					<form action="<?= base_url(); ?>kepala/surat_independen/tambah" method="post">
						<div class="form-group">
							<label for="">Tanggal</label>
							<input type="date" class="form-control" placeholder="mm/dd/yyyy" required name="tanggal">
						</div>
						<div class="form-group">
							<label for="">Nama Partner</label>
							<input type="text" class="form-control" placeholder="Nama Partner" required name="nama_partner">
						</div>
						<div class="form-group">
							<label for="">Nama Supervisor</label>
							<input type="text" class="form-control" placeholder="Nama Supervisor" required name="nama_supervisor">
						</div>
						<div class="form-group">
							<label for="">Ketua Tim</label>
							<input type="text" class="form-control" placeholder="Ketua Tim" required name="ketua_tim">
						</div>
						<div class="form-group">
							<label for="">Nama Anggota 1</label>
							<input type="text" class="form-control" placeholder="Nama Anggota 1" required name="nama_anggota_1">
						</div>
						<div class="form-group">
							<label for="">Nama Anggota 2</label>
							<input type="text" class="form-control" placeholder="Nama Anggota 2" required name="nama_anggota_2">
						</div>
						<div class="form-group">
							<label for="">Nama Klien</label>
							<input type="text" class="form-control" placeholder="Nama Klien" required name="nama_klien">
						</div>
						<div class="form-group">
							<label for="">Alamat Klien</label>
							<input type="text" class="form-control" placeholder="Alamat Klien" required name="alamat_klien">
						</div>
						<div class="form-group">
							<label for="">Telp/Fax</label>
							<input type="text" class="form-control" placeholder="Telp/Fax" required name="telp">
						</div>
						<div class="form-group">
							<label for="">Aktivitas Utama Klien</label>
							<input type="text" class="form-control" placeholder="Aktivitas Utama Klien" required name="aktivitas_utama_klien">
						</div>
						<div class="form-group">
							<label for="">Jenis Jasa Profesi</label>
							<input type="text" class="form-control" placeholder="Jenis Jasa Profesi" required name="jenis_jasa_profesi">
						</div>
						<div class="form-group">
							<label for="">Periode Pelaksanaan Perikatan</label>
							<input type="text" class="form-control" placeholder="Periode Pelaksanaan Perikatan" required name="periode_pelaksanaan">
						</div>
						<div class="form-group">
							<button class="btn btn-outline-primary">Tambah</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


