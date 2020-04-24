<?php 
	$koneksi = mysqli_connect("localhost","root","","ujianku");
	$datapasien = query("SELECT * FROM tbcorona1 ORDER BY id DESC");
	$datapemantau = query("SELECT * FROM tbpemantau ORDER BY id DESC");

	 function query($query){
 	global $koneksi;
 	 $tmp = mysqli_query($koneksi, $query);

 	 $rows =[];

 	 while ($row = mysqli_fetch_assoc ($tmp)) {
 	 	# code...
 	 	$rows[] = $row;
 	 }

 	 return $rows;
 	}

	function input($data)
	{
		global $koneksi;

		$p_positif = htmlspecialchars($data["p_positif"]);
		$p_dirawat = htmlspecialchars($data["p_dirawat"]);
		$p_sembuh = htmlspecialchars($data["p_sembuh"]);
		$p_meninggal = htmlspecialchars($data["p_meninggal"]);

		$query = "INSERT INTO tbcorona1 VALUES ('','$p_positif','$p_dirawat','$p_sembuh','$p_meninggal')";

		mysqli_query($koneksi, $query);
		return mysqli_affected_rows($koneksi);

	}

	function tekan($data)
	{
		global $koneksi;
		$wilayah = htmlspecialchars($data["wilayah"]);
		$op_nama = htmlspecialchars($data["nama_op"]);
		$nim     = htmlspecialchars($data["nim"]);


		$query = "INSERT INTO tbpemantau VALUES ('','$op_nama','$nim','$wilayah')";

		mysqli_query($koneksi, $query);
		return mysqli_affected_rows($koneksi);
	}

 ?>