<?php include('header.php') ?>
					<div class="container-fluid">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1>Daftar Pemain</h1>	
						<div class="table-responsive">
							<table class="table table-hover" id="example">
								<thead>
									<tr>
										<th>Nama Pemain</th>
										<th>Posisi</th>
										<th>Tanggal Lahir</th>
										<th>Action</th>

									</tr>
								</thead>
								<tbody>

								<?php foreach ($pemain_list as $key) { ?>
									<tr>
										<td><?php echo $key->namaPemain ?></td>
										<td><?php echo $key->posisi ?></td>
										<td><?php echo $key->tanggalLahir ?></td>
										<td>
								<a href="<?php echo site_url('pemain/update/').$key->id ?>" type="button" class="btn btn-warning">Edit</a>
								<button type="delete" name="hapus" class="btn btn-danger" data-toggle="modal" href='<?php echo "#".$key->id; ?>'>Hapus</button>
								<div class="modal fade" id="<?php echo "".$key->id ?>">
								<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-header"> 
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Apakah anda yakin menghapus data pegawai dengan nama "<?php echo $key->namaPemain ?>"</h4>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<a href="<?php echo site_url('pemain/delete/').$key->id ?>" type="button" class="btn btn-danger">Ya, Hapus</a>
								</div>
								</div>
								</div></td>

									</tr>

								<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<?php echo form_open_multipart('pemain/create/'.$this->uri->segment(3)); ?>
									<legend>Tambah Daftar Pemain</legend>
									<?php echo validation_errors(); ?>
									<div class="form-group">
										<label for="">Nama Pemain</label>
										<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Pemain" >
										<label for="">Posisi</label>
										<input type="text" class="form-control" id="posisi" name="posisi" placeholder="Input Field" >
										<label for="">Tanggal Lahir</label>
										<input type="date" class="form-control" id="tanggal_lahir" name="tanggalLahir" placeholder="Input Field">

									</div>
								
									<button type="submit" class="btn btn-primary">Submit</button>
						<?php echo form_close(); ?>
						</div>
					</div>
	</body>
</html>