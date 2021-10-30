<section id="basic-examples">
	<div class="row">
		<div class="col-xs-12 mt-1 mb-3">
			<h4 class="">
				Detail Surat Masuk 
			</h4>
			<hr>
		</div>
	</div>
	<br>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css') ?>">
	<div class="row" style="margin-top: -30px;">
		<div class="col-12">
			<div class="card">
				<div class="container">
					<div class="card-body">
						<div class="col-md-12" style="padding-bottom: 20px;">
							<div class="table-responsive">
								<table class="display nowrap table  table-striped table-bordered">
									<tr>
										<th style="width: 20%">Tanggal</th>
										<th  style="width: 5%">:</th>
										<th><span style="font-weight: bold;"><?= $tanggal; ?></span></th>
									</tr>
									<tr>
										<th style="width: 20%">Nama Partner</th>
										<th  style="width: 5%">:</th>
										<th><span style="font-weight: bold;"><?= $nama_partner; ?></span></th>
									</tr>
									<tr>
										<th style="width: 20%">Nama Supervisor</th>
										<th  style="width: 5%">:</th>
										<th><span style="font-weight: bold;"><?= $nama_supervisor; ?></span></th>
									</tr>
									<tr>
										<th style="width: 20%">Ketua Tim</th>
										<th  style="width: 5%">:</th>
										<th><span style="font-weight: bold;"><?= $ketua_tim; ?></span></th>
									</tr>
									<tr>
										<th style="width: 20%">Nama Anggota 1</th>
										<th  style="width: 5%">:</th>
										<th><span style="font-weight: bold;"><?= $nama_anggota_1; ?></span></th>
									</tr>
									<tr>
										<th style="width: 20%">Nama Anggota 2</th>
										<th  style="width: 5%">:</th>
										<th><span style="font-weight: bold;"><?= $nama_anggota_2; ?></span></th>
									</tr>
									<tr>
										<th style="width: 20%">Nama Klien</th>
										<th  style="width: 5%">:</th>
										<th><span style="font-weight: bold;"><?= $nama_klien; ?></span></th>
									</tr>
									<tr>
										<th style="width: 20%">Alamat Klien</th>
										<th  style="width: 5%">:</th>
										<th><span style="font-weight: bold;"><?= $alamat_klien; ?></span></th>
									</tr>
									<tr>
										<th style="width: 20%">Telp/Fax</th>
										<th  style="width: 5%">:</th>
										<th><span style="font-weight: bold;"><?= $telp; ?></span></th>
									</tr>
									<tr>
										<th style="width: 20%">Aktivitas Utama Klien</th>
										<th  style="width: 5%">:</th>
										<th><span style="font-weight: bold;"><?= $aktivitas_utama_klien; ?></span></th>
									</tr>
									<tr>
										<th style="width: 20%">Jenis Jas Profesi yang Diberikan</th>
										<th  style="width: 5%">:</th>
										<th><span style="font-weight: bold;"><?= $jenis_jasa_profesi; ?></span></th>
									</tr>
									<tr>
										<th style="width: 20%">Periode Pelaksanaan Perikatan</th>
										<th  style="width: 5%">:</th>
										<th><span style="font-weight: bold;"><?= $periode_pelaksanaan; ?></span></th>
									</tr>
									<tr>
										<th style="width: 20%">Scan surat</th>
										<th style="width: 5%">:</th>
										<th>
                      <a class="btn btn-outline-primary" style="margin-left: 10px;" data-toggle="tooltip" href="#" download title="Download">
                        <i class="fa fa-download"></i>
                      </a>
                    </th>
									</tr>
								</table>
								<a href="<?php echo base_url('kepala/surat_independen') ?>" class="btn btn-outline-danger">Kembali</a>
								<br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>