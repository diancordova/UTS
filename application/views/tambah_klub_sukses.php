 <?php include('header.php'); 
?>
 <head>
<script language="javascript">
	$("document").ready(function(){
			alert("Tambah Data Sukses");
		});

</script>

 </head>
 <body>
    <div class="container-fluid">
    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href="<?php echo site_url('klub/create')?>" type="button" class="btn btn-primary">TAMBAHKAN DATA KLUB LAGI</a>	
    	 		<a href="<?php echo site_url('klub/')?>" type="button" class="btn btn-success">KEMBALI KE DATA KLUB</a>	
    	</div>
    </div>
 </body>