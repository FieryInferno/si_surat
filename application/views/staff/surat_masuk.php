<section id="basic-examples">
	<div class="row">
		<div class="col-xs-12 mt-1 mb-3">
			<h4 class="">
				Kelola Surat masuk 
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
				<div class="container">
					<div class="card-body">
						<button class="btn btn-outline-primary pull-right" data-toggle="modal" data-target="#tambah">Tambah</button>
						<div class="table-responsive m-t-40" style="margin-bottom: 15px;">
							<table cellspacing="0" class="display nowrap table table-hover table-striped table-bordered tableku" width="100%">
								<thead>
									<tr>
										<th>
											No
										</th>
										<th>
											No Surat
										</th>
										<th>
											Tanggal Masuk
										</th>
										<th>
											Perihal
										</th>
										<th>
											Pengirim
										</th>
										<th>
											Ditujukan
										</th>
										<th class="text-center">
											Aksi
										</th>
									</tr>
								</thead>
								<tbody id="isi">
									<?php $no = 0; foreach ($masuk->result() as $key): $no++;?>
									<tr>
										<td><?php echo $no ?></td>
										<td><?php echo $key->no_surat ?></td>
										<td><?php echo $key->tgl_masuk ?></td>
										<td><?php echo $key->perihal ?></td>
										<td><?php echo $key->pengirim ?></td>
										<td><?php echo $key->ditujukan ?></td>
										<td>
											<button class="btn btn-outline-success" data-toggle="modal" data-target="#update<?php echo $key->id_smasuk ?>"><i data-toggle="tooltip" title="Update masuk" class="fa fa-edit"></i></button>
											<a href="<?php echo base_url('staff/detailsuratmasuk/'.$key->id_smasuk) ?>" class="btn btn-outline-primary" data-toggle="tooltip" title="Detail Surat Masuk"><i class="fa fa-search"></i></a>
											<a href="<?php echo base_url('staff/delmasuk/'.$key->id_smasuk) ?>" class="btn btn-outline-danger" data-toggle="tooltip" onclick="return confirm('Hapus surat masuk?')" title="Hapus Surat Masuk"><i class="fa fa-trash"></i></a>
											
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<?php foreach ($masuk->result() as $e): ?>
<div class="modal fade text-xs-left" id="update<?php echo $e->id_smasuk ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel1">update surat masuk</h4>
			</div>
			<form method="post" action="<?php echo base_url('staff/updatemasuk/'.$e->id_smasuk) ?>" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">No Surat</label>
										<input type="text" value="<?php echo $e->no_surat ?>" id="no_surat<?php echo $e->id_smasuk ?>" onkeyup="carinosurat2(<?php echo $e->id_smasuk ?>)" class="form-control" required="" autocomplete="off" name="no_surat">
										<small id="msgsurat<?php echo $e->id_smasuk ?>" class="btn-danger hide">No surat telah digunakan sebelumnya</small>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Kode Surat</label>
										<input type="text" value="<?php echo $e->kode_surat ?>" class="form-control" required="" autocomplete="off" name="kode_surat">
									</div>
								</div>
							</div>

							<div class="form-group">
									<label for="">Kategori</label>
									<select name="kategori" class="form-control">
										<option value="">----</option>
										<option <?php if($e->kategori=="Undangan") echo "selected"; ?> value="Undangan">Undangan</option>
										<option <?php if($e->kategori=="Permohonan") echo "selected"; ?> value="Permohonan">Permohonan</option>
										<option <?php if($e->kategori=="Laporan") echo "selected"; ?> value="Laporan">Laporan</option>
										<option <?php if($e->kategori=="Pemberitahuan") echo "selected"; ?> value="Pemberitahuan">Pemberitahuan</option>
										<option <?php if($e->kategori=="Himbauan") echo "selected"; ?> value="Himbauan">Himbauan</option>
									</select>
								</div>


							<div class="form-group">
								<label for="timesheetinput1">Tanggal Masuk</label>
								<div class="position-relative has-icon-right">
									<input value="<?php echo $e->tgl_masuk ?>" type="text"autocomplete="off" class="form-control mydatepicker" placeholder="mm/dd/yyyy" name="tgl_masuk" required="">
									<div class="form-control-position">
										<i class="icon-android-calendar" style="font-size: 2em;margin-top: 5px;position: absolute;right: 0px"></i>
									</div>
								</div>
							</div>
							
								
									<div class="form-group">
										<label for="">Pengirim</label>
										<input value="<?php echo $e->pengirim ?>" type="text" class="form-control" autocomplete="off" required="" name="pengirim">
									</div>	
								
								
									<div class="form-group">
									<label for="">Ditujukan</label>
									<input value="<?php echo $e->ditujukan ?>" type="text" class="form-control" autocomplete="off" required="" name="ditujukan">
									</div>
							
							<div class="form-group">
								<label for="">Perihal</label>
								<textarea name="perihal" required="" id="" style="resize: none;height: 150px;" class="form-control"><?php echo $e->perihal ?></textarea>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Keterangan Surat</label>
								<textarea name="keterangan" required="" id="" style="resize: none;height: 150px;" class="form-control"><?php echo $e->keterangan ?></textarea>
							</div>
							<div class="form-group">
								<label for="">Scan Surat</label>
								<input type="file" data-default-file="<?php echo base_url('upload/masuk/'.$e->foto) ?>" class="dropify" name="foto">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Tutup</button>
					<button type="submit" id="btnsubmit<?php echo $e->id_smasuk ?>" class="btn btn-outline-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php endforeach ?>

<div class="modal fade text-xs-left" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel1">Tambah surat masuk</h4>
			</div>
			<form method="post" action="<?php echo base_url('staff/addmasuk') ?>" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="">No Surat</label>
										<input type="text"  id="no_surat" onkeyup="carinosurat()" class="form-control" required="" autocomplete="off" name="no_surat">
										<small id="msgsurat" class="btn-danger hide">No surat telah digunakan sebelumnya</small>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="">Kode Surat</label>
										<input type="text" class="form-control" required="" autocomplete="off" name="kode_surat">
									</div>
								</div>
							</div>

							<div class="form-group">
									<label for="">Kategori</label>
									<select name="kategori" class="form-control">
										<option value="">----</option>
												<option value="Undangan">Undangan</option>
												<option value="Permohonan">Permohonan</option>
												<option value="Laporan">Laporan</option>
												<option value="Pemberitahuan">Pemberitahuan</option>
												<option value="Himbauan">Himbauan</option>
											</select>
										</div>


							<div class="form-group">
								<label for="timesheetinput1">Tanggal Masuk</label>
								<div class="position-relative has-icon-right">
									<input type="text"autocomplete="off" class="form-control mydatepicker" placeholder="mm/dd/yyyy" name="tgl_masuk" required="">
									<div class="form-control-position">
										<i class="icon-android-calendar" style="font-size: 2em;margin-top: 5px;position: absolute;right: 0px"></i>
									</div>
								</div>
							</div>
							
								
									<div class="form-group">
										<label for="">Pengirim</label>
										<input type="text" class="form-control" autocomplete="off" required="" name="pengirim">
									</div>	
								
									<div class="form-group">
									<label for="">Ditujukan</label>
									<input type="text" class="form-control" autocomplete="off" required="" name="ditujukan">
									</div>

								
							<div class="form-group">
								<label for="">Perihal</label>
								<textarea name="perihal" required="" id="" style="resize: none;height: 150px;" class="form-control"></textarea>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Keterangan Surat</label>
								<textarea name="keterangan" required="" id="" style="resize: none;height: 150px;" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label for="">Scan Surat</label>
								<input type="file" class="dropify" required="" name="foto">
							</div>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Tutup</button>
					<button type="submit" id="btnsubmit" class="btn btn-outline-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	function carinosurat() {
		if ($("#no_surat").val()!=='') {
			$.ajax({
				type: "GET",
				url: "<?php echo base_url('kasubag/carinosurat/') ?>"+$("#no_surat").val(),
				success: function (data) {
					var dataa = data;
					if (dataa==1) {
						$("#btnsubmit").prop('disabled',true);
						$("#msgsurat").removeClass('hide');
					}else{
						$("#btnsubmit").prop('disabled',false);
						$("#msgsurat").addClass('hide');
					}
				}
			}); 
		}else{
			$("#msgsurat").addClass('hide');
			$("#btnsubmit").prop('disabled',false);
		}
	}

	function carinosurat2(id) {
		if ($("#no_surat"+id.toString()).val()!=='') {
			$.ajax({
				type: "GET",
				url: "<?php echo base_url('kasubag/carinosurat/') ?>"+$("#no_surat"+id.toString()).val(),
				success: function (data) {
					var dataa = data;
					if (dataa==1) {
						$("#btnsubmit"+id.toString()).prop('disabled',true);
						$("#msgsurat"+id.toString()).removeClass('hide');
					}else{
						$("#btnsubmit"+id.toString()).prop('disabled',false);
						$("#msgsurat"+id.toString()).addClass('hide');
					}
				}
			}); 
		}else{
			$("#msgsurat"+id_smasuk.toString()).addClass('hide');
			$("#btnsubmit"+id_smasuk.toString()).prop('disabled',false);
		}
	}

</script>