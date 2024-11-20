<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jadwal</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
	<?php
	if (isset($_GET['p'])) {
		if ($_GET['p'] == "jadwal_ujian") {
			include "jadwal_ujian.php";
		} else if ($_GET['p'] == "jadwal_kuliah") {
			include "jadwal_kuliah.php";
		} else if ($_GET['p'] == "add_ujian") {
			include "add_ujian.php";
		} else if ($_GET['p'] == "add_matkul") {
			include "add_matkul.php";
		} else {
			include "home.php";
		}
	} else {
		include "home.php";
	}
	?>
</body>
</html>
