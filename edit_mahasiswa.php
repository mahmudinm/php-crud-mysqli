<?php  
	include 'koneksi.php';
	$nim = $_GET['nim'];
	$sql   = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
	$res   = $connect->query($sql);
	if ($res->num_rows > 0) {
		$row = $res->fetch_assoc();
	}	
?>
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
		<input type="hidden" name="nim">
		<table>
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim" class="input" value="<?= $row['nim']; ?>" disabled></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" class="input" value="<?= $row['nama']; ?>"></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td><input type="text" name="fakultas" class="input" value="<?= $row['fakultas']; ?>"></td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td><input type="text" name="prodi" class="input" value="<?= $row['prodi']; ?>"></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td><input type="text" name="agama" class="input" value="<?= $row['agama']; ?>"></td>
			</tr>
			<tr>
				<td>Nomor HP</td>
				<td><input type="text" name="nomorhp" class="input" value="<?= $row['nomorhp']; ?>"></td>
			</tr>
			<tr>
				<td>Tempat Tinggal &nbsp;</td>
				<td><input type="text" name="tempattinggal" class="input" value="<?= $row['tempattinggal']; ?>"></td>
			</tr>

		</table> <br>
		
		<input type="submit" name="submit" value="Update data" class="submit">
	</form>
</body>

<?php  

	include("koneksi.php");


	if (isset($_POST['submit'])) {
		$nimUpdate = $_GET['nim'];
		$nama = $_POST['nama'];
		$fakultas = $_POST['fakultas'];
		$prodi = $_POST['prodi'];
		$agama = $_POST['agama'];
		$nomorhp = $_POST['nomorhp'];
		$tempattinggal = $_POST['tempattinggal'];

		$query = "UPDATE mahasiswa SET nama='$nama', fakultas='$fakultas', prodi='$prodi', agama='$agama', nomorhp='$nomorhp', tempattinggal='$tempattinggal' WHERE nim=$nimUpdate";

		if (mysqli_query($connect, $query)) {		
			header('location:index.php');
		} else {
			echo 'error';
		}

	} 

?>

</html>