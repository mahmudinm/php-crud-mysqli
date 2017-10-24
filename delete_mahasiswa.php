<?php  
	include 'koneksi.php';

	$nim = $_GET["nim"];

	$query = "DELETE FROM mahasiswa WHERE nim=$nim";

	mysqli_query($connect, $query);

	header("Location:index.php");

?>
