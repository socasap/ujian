<?php 
  include 'koneksiku.php';
  if(isset($_POST["input"]))
  {
      if (input($_POST) > 0 ) {
      	# code...
      	echo "

      	<script>
      	alert('data berhasil ditambahkan !');
      	document.location.href = 'dashboard.php'
      	</script>

      	";
      }
      else{
      	echo "

      	<script>
      	alert('data gagal ditambahkan !');
     	</script>

      	";
      }
  }

  if(isset($_POST["tekan"]))
  {
      if (tekan($_POST) > 0 ) {
      	# code...
      	echo "

      	<script>
      	alert('data berhasil ditambahkan !');
      	document.location.href = 'dashboard.php'
      	</script>

      	";
      }
      else{
      	echo "

      	<script>
      	alert('data gagal ditambahkan !');
     	</script>

      	";
      }
  }


 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.js">
  	<link rel="stylesheet" type="text/css" href="css/admin.css">
  	<link rel="stylesheet" type="text/css" href="css/dsphp.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
	<title>Uts Pemrograman Web</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="countainer text center">
		<div class="row">
			<!-- Form -->
			<div class="col-sm-4">
				<h4 class="text-align"> Form Data Oprator</h4>
				<form action="" method="post">
					<select id="wilayah" name="wilayah">
							<div class="dropdown">
							  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							    Wilayah
							    <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		
							  	<option><li><a href="#">DKI Jakarta</a></li></option>
							    <option><li><a href="#">Jawa Barat</a></li></option>
							    <option><li><a href="#">Banten</a></li></option>
							    <option><li><a href="#">Jawa Tengah</a></li></option>
							  	
							  </ul>
							</div>
							</select>
						<div class="form-group">
						    <label for="exampleInputEmail1">Nama Oprator</label>
						    <input type="text" class="form-control" id="nama_op" name="nama_op">
						</div>		
						<div class="form-group">
						    <label for="exampleInputEmail1">NIM</label>
						    <input type="text" class="form-control" id="nim" name="nim">
						</div>
						<button type="submit" class="btn btn-block btn btn-primary" name="tekan">Input</button>	
				</form>



				<h4 class="text-align"> Form Data Pasien</h4>
				<div class="formku">
					<form action="" method="post">													
						<div class="form-group">
						    <label for="exampleInputEmail1">Jumlah Positif</label>
						    <input type="text" class="form-control" id="p_positif" name="p_positif">
						</div>
						<div class="form-group">
						    <label for="exampleInputEmail1">Jumlah Dirawat</label>
						    <input type="text" class="form-control" id="p_dirawat" name="p_dirawat">
						</div>	
						<div class="form-group">
						    <label for="exampleInputEmail1">Jumlah Sembuh</label>
						    <input type="text" class="form-control" id="p_sembuh" name="p_sembuh">
						</div>	
						<div class="form-group">
						    <label for="exampleInputEmail1">Jumlah Meninggal</label>
						    <input type="text" class="form-control" id="p_meninggal" name="p_meninggal">
						</div>
						<button type="submit" class="btn btn-block btn btn-primary" name="input">Input</button>								
					</form>
				</div>
			</div>
			<!-- end form -->

			<!-- Table -->
			<div class="col-sm-8">
				<?php foreach($datapemantau as $row) :?>
				<h1 class="text-align">
					Data Pemantaun Covid19 <?php echo $row ["wilayah"];?>
					Per 18 April 2020 21:38:16 (Waktu dan Jam Sekarang)
					<?php echo $row ["op_nama"];?>/<?php echo $row ["nim"];?>
				</h1>
				<?php endforeach; ?>	





				<table class="table">

					<tr class="warning text-center">
                                    <td>No</td>
                                    <td>Positif</td>
                                    <td>Dirawat</td>
                                    <td>Sembuh</td>
                                    <td>Meninggal</td>
                    </tr>


					 <?php foreach($datapasien as $row) :?>
					<tr class="text-align">
						<td class="text-align"> <?php echo $row ["id"];         ?></td>
						<td class="text-align"> <?php echo $row ["p_positif"];  ?></td>
						<td class="text-align"> <?php echo $row ["p_dirawat"];  ?></td>
						<td class="text-align"> <?php echo $row ["p_sembuh"];   ?></td>
						<td class="text-align"> <?php echo $row ["p_meninggal"];?></td>

					</tr>
					<?php endforeach; ?>
				</table>
				

			</div>
			<!-- endtable -->
		</div>
	</div>

</body>
</html>