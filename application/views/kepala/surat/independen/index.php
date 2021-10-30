<section id="basic-examples">
	<div class="row">
		<div class="col-xs-12 mt-1 mb-3">
			<h4 class="">
				Surat Independen
			</h4>
			<hr>
		</div>
		<div class="col-xs-12">
			<?php 
			if ($this->session->error) {
				?>
				<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?= $this->session->error; ?>
				</div>
				<?php
			}

			if ($this->session->success) {
				?>
				<div class="alert alert-success">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?= $this->session->success; ?>
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
        <div class="card-header">
          <a href="<?= base_url(); ?>kepala/surat_independen/tambah" class="btn btn-primary">Tambah</a>
        </div>
        <div class="container">
          <div class="card-body">
            <div class="table-responsive m-t-40" style="margin-bottom: 15px;">
              <table cellspacing="0" class="display nowrap table table-hover table-striped table-bordered tableku" width="100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama Partner</th>
                    <th>Nama Supervisor</th>
                    <th>Ketua Tim</th>
                    <th>Nama Anggota 1</th>
                    <th>Nama Anggota 2</th>
                    <th>Nama Klien</th>
                    <th>Alamat Klien</th>
                    <th>Telp/Fax</th>
                    <th>Aktivitas Utama Klien</th>
                    <th>Jenis Jasa Profesi yang Diberikan</th>
                    <th>Periode Pelaksanaan Perikatan</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody id="isi">
                  <?php 
                    $no = 0; 
                    foreach ($independen as $key):?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $key['tanggal'];  ?></td>
                        <td><?= $key['nama_partner'];  ?></td>
                        <td><?= $key['nama_supervisor'];  ?></td>
                        <td><?= $key['ketua_tim']; ?></td>
                        <td><?= $key['nama_anggota_1'];  ?></td>
                        <td><?= $key['nama_anggota_2'];  ?></td>
                        <td><?= $key['nama_klien'];  ?></td>
                        <td><?= $key['alamat_klien'];  ?></td>
                        <td><?= $key['telp'];  ?></td>
                        <td><?= $key['aktivitas_utama_klien'];  ?></td>
                        <td><?= $key['jenis_jasa_profesi'];  ?></td>
                        <td><?= $key['periode_pelaksanaan'];  ?></td>
                        <td></td>
                      </tr>
                    <?php endforeach 
                  ?>
              </tbody>
            </table>
          </div>
        </div>
			</div>
		</div>
	</div>
</section>
