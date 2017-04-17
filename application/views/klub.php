<?php include('header.php'); ?>
	<div><div class="container-fluid">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h1>Daftar Pegawai</h1>	
			<div class="table-responsive">
				<table class="table table-hover" id="example">
					<thead>
						<tr>
							<th>Nama Club</th>
							<th>Logo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php echo anchor("Klub/create",'Create',['class'=>'btn btn-primary'])?>
					<?php foreach ($klub_list as $key) { ?>
						<tr>
							<td><?php echo $key->nama ?></td>
							<td><img width="100" height="100" src="<?=base_url()?>assets/uploads/<?=$key->logo?>"></td>
	

							<td>
								<a href="<?php echo site_url('pemain/create/').$key->id ?>" type="button" class="btn btn-info">Pemain</a>
								<a href="<?php echo site_url('klub/update/').$key->id ?>" type="button" class="btn btn-warning">Edit</a>
								<button type="delete" name="hapus" class="btn btn-danger" data-toggle="modal" href='<?php echo "#".$key->id; ?>'>Hapus</button>
								<div class="modal fade" id="<?php echo "".$key->id ?>">
								<div class="modal-dialog">
								<div class="modal-content">
								<div class="modal-header"> 
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h4 class="modal-title">Apakah anda yakin menghapus data pegawai dengan nama "<?php echo $key->nama ?>"</h4>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<a href="<?php echo site_url('klub/delete/').$key->id ?>" type="button" class="btn btn-danger">Ya, Hapus</a>
								</div>
								</div>
								</div>
								<?php } ?>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		</div>
	</div>
	</body>
</html>