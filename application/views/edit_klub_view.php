<?php include('header.php'); ?>
	<div class="container-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php echo form_open_multipart('klub/update/'.$this->uri->segment(3)); ?>
						<legend>Edit Data Klub</legend>
						<?php echo validation_errors(); ?>
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" value="<?php echo $klub[0]->nama ?>">
							<td><img width="100" height="100" src="<?=base_url()?>assets/uploads/<?=$klub[0]->logo?>"></td>
							<div class="form-group">
							<label for="">Foto</label>
							<input type="file" name="userfile" size="20">
						</div>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
			<?php echo form_close(); ?>
		</div>
	</div>
