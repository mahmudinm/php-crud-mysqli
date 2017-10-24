<?php  
	include 'koneksi.php';

	$kode = $_GET["kode"];

	$query = "DELETE FROM matakuliah WHERE kode=$kode";

	mysqli_query($connect, $query);

	header("Location:index_matakuliah.php");

?>
