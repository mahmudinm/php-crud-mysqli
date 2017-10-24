<?php  
	include 'koneksi.php';
	
	$kode = $_GET['kode'];
	$sql   = "SELECT * FROM matakuliah WHERE kode = '$kode'";
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

	<h1>Matakuliah Unis</h1>

	<form method="POST" action="">
		<input type="hidden" name="kode">
		<table>
			<tr>
				<td>kode</td>
				<td><input type="text" name="kode" class="input" value="<?= $row['kode']; ?>" disabled></td>
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
				<td>Jam</td>
				<td><input type="text" name="jam" class="input" value="<?= $row['jam']; ?>"></td>
			</tr>
			<tr>
				<td>dosen</td>
				<td><input type="text" name="dosen" class="input" value="<?= $row['dosen']; ?>"></td>
			</tr>

		</table> <br>
		
		<input type="submit" name="submit" value="Update data" class="submit">
	</form>
</body>

<?php  

	include("koneksi.php");


	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$fakultas = $_POST['fakultas'];
		$jam = $_POST['jam'];
		$dosen = $_POST['dosen'];

		$query = "UPDATE matakuliah SET nama='$nama', fakultas='$fakultas', jam='$jam', dosen='$dosen' WHERE kode=$kode";

		if (mysqli_query($connect, $query)) {		
			header('location:index_matakuliah.php');
		} else {
			echo 'error';
		}

	} 

?>

</html>