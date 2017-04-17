<?php 											
	include('header.php');
	//include('pegawai.php')
 ?>
 <head>
<script language="javascript">
	$("document").ready(function(){
			alert("Update data Sukses");
		});

</script>
</head>
</html>

 </head>
 <body>
    <div class="container-fluid">
    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    	 		<a href="<?php echo site_url('pegawai/update')?>" type="button" class="btn btn-primary">UPDATE PEGAWAI INI LAGI</a>	

    	 		<br>
    	 		<br>
    	 		<a href="<?php echo site_url('pegawai/')?>" type="button" class="btn btn-success">KEMBALI KE DATA PEGAWAI</a>	
    	</div>
    </div>
 </body>