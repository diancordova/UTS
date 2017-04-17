<?php include('header.php');
 ?>
	<div class="container-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<?php echo form_open_multipart('klub/create'); ?>
					<legend>Tambah Data Klub</legend>
					<?php echo validation_errors(); ?>
					<div class="form-group">
						<label for="">Nama Klub</label>
						<input type="text" class="form-control" id="nama" name="nama" placeholder="Insert Nama Klub">
						<div class="form-group">
							<label for="">Logo</label>
							<input type="file" name="userfile" size="20">
						</div>
						<!--  -->
						
					</div>
				
					
				
					<button name="input" type="submit" class="btn btn-primary">Submit</button>
		<?php echo form_close(); ?>
		</div>
		</div>
	</div>
