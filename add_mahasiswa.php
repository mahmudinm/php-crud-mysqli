<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD PHP</title>
	<style>
		.input {
		    padding: 5px;
		    border: 1px solid #333;
		    border-radius: 2px;			
		}	
		.submit {
		    font-weight: bold;
		    font-size: 18px;
		    color: white;
		    background: cornflowerblue;
		    border: cyan;
		    padding: 10px;			
		}
	</style>
</head>
<body>

	<h1>Mahasiswa Unis</h1>

	<form method="POST" action="">
		<table>
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim" class="input"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" class="input"></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td><input type="text" name="fakultas" class="input"></td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td><input type="text" name="prodi" class="input"></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td><input type="text" name="agama" class="input"></td>
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td><input type="text" name="nomorhp" class="input"></td>
			</tr>
			<tr>
				<td>Tempat Tinggal &nbsp;</td>
				<td><input type="text" name="tempattinggal" class="input"></td>
			</tr>

		</table> <br>
		
		<input type="submit" name="submit" value="Tambah data" class="submit">
	</form>
</body>

<?php  

	include("koneksi.php");

	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$fakultas = $_POST['fakultas'];
		$prodi = $_POST['prodi'];
		$agama = $_POST['agama'];
		$nomorhp = $_POST['nomorhp'];
		$tempattinggal = $_POST['tempattinggal'];

		$query = "INSERT INTO mahasiswa VALUES('$nim','$nama','$fakultas','$prodi','$agama','$nomorhp','$tempattinggal')";

		mysqli_query($connect, $query);

		header('location:index.php');
	} 

?>

</html>