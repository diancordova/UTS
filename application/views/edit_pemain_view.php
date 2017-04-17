<?php include('header.php'); ?>
	<div class="container-fluid">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<?php echo form_open_multipart('pemain/update/'.$this->uri->segment(3)); ?>
						<legend>Edit Data Pegawai</legend>
						<?php echo validation_errors(); ?>
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php echo $pemain[0]->nama ?>">
							<label for="">Posisi</label>
							<input type="text" class="form-control" id="posisi" name="posisi" placeholder="posisi" value="<?php echo $pemain[0]->posisi ?>">
							<label for="">Tanggal Lahir</label>
							<input type="date" class="form-control" id="tanggal_lahir" name="tanggalLahir" placeholder="Input field" value="<?php echo $pemain[0]->tanggal_lahir ?>">
						</div>
						
						<button type="submit" class="btn btn-primary">Submit</button>
						</div>
			<?php echo form_close(); ?>
		</div>
	</div>
