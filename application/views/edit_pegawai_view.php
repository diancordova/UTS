<?php include('header.php'); ?>
	<div class="container-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php echo form_open_multipart('pegawai/update/'.$this->uri->segment(3)); ?>
						<legend>Edit Data Pegawai</legend>
						<?php echo validation_errors(); ?>
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php echo $pegawai[0]->nama ?>">
							<label for="">Nip</label>
							<input type="text" class="form-control" id="nip" name="nip" placeholder="Nip" value="<?php echo $pegawai[0]->nip ?>">
							<label for="">Tanggal Lahir</label>
							<input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" placeholder="Input field" value="<?php echo $pegawai[0]->tanggalLahir ?>">
							<label for="">Alamat</label>
							<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Input field" value="<?php echo $pegawai[0]->alamat ?>">
							<td><img width="100" height="100" src="<?=base_url()?>assets/uploads/<?=$pegawai[0]->foto?>"></td>
							<div class="form-group">
							<label for="">Foto</label>
							<input type="file" name="userfile" size="20">
						</div>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
			<?php echo form_close(); ?>
		</div>
	</div>
