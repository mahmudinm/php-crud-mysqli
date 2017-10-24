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

	<h1>Matakuliah Unis</h1>

	<form method="POST" action="">
		<table>
			<tr>
				<td>Kode</td>
				<td><input type="text" name="kode" class="input"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" class="input"></td>
			</tr>
			<tr>
				<td>Fakultas &nbsp;</td>
				<td><input type="text" name="fakultas" class="input"></td>
			</tr>
			<tr>
				<td>Jam</td>
				<td><input type="text" name="jam" class="input"></td>
			</tr>
			<tr>
				<td>Dosen</td>
				<td><input type="text" name="dosen" class="input"></td>
			</tr>

		</table> <br>
		
		<input type="submit" name="submit" value="Tambah data" class="submit">
	</form>
</body>

<?php  

	include("koneksi.php");

	if (isset($_POST['submit'])) {
		$kode = $_POST['kode'];
		$nama = $_POST['nama'];
		$fakultas = $_POST['fakultas'];
		$jam = $_POST['jam'];
		$dosen = $_POST['dosen'];
		$nomorhp = $_POST['nomorhp'];
		$tempattinggal = $_POST['tempattinggal'];

		$query = "INSERT INTO matakuliah VALUES('$kode','$nama','$fakultas','$jam','$dosen')";

		mysqli_query($connect, $query);

		header('location:index_matakuliah.php');
	} 

?>

</html>