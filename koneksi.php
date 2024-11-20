<?php
	$host = "localhost";		// IP Server
	$user = "root";				// Username untuk masuk ke MySQL
	$pass = "";					// Password untuk masuk ke MySQL
	$db   = "db_jadwal";			// Nama database yang akan diakses
	
	$conn  = mysqli_connect($host, $user, $pass, $db);
	
	 //TES KONEKSI
	
	// if($kon){
	// 	echo "DATA BASE TERKONEKSI<br>";
	// 	echo "Database $db siap digunakan";
	// }else{
	// 	echo "GAGAL TERKONEKSI";
	// }
	
?>