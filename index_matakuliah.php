<?php  
	include('koneksi.php');
	$sql = "SELECT * FROM matakuliah";
	$res = $connect->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List Matakuliah</title>
	<style>
		.link {
		    text-decoration: none;
		    font-weight: bold;
		    color: cornflowerblue;
		    border: 3px solid cornflowerblue;
		    padding: 6px;
		    border-radius: 5px;			
		}
		.link-delete {
		    text-decoration: none;
		    font-weight: bold;
		    color: indianred;
		    border: 3px solid indianred;
		    padding: 6px;
		    border-radius: 5px;			
		}
		th {
			background: #eee;
			border: 1px solid #eee 
		}
	</style>
</head>
<body>

	<center>
	 	<br>

		<a href="add_matakuliah.php" class="link">Tambah Data</a> 
		<a href="index.php" class="link">View Mahasiswa</a> 

		<br>
		<br>
		<br>

		<table cellpadding="20">
			<tr>
				<th>Kode</th>
				<th>Nama</th>
				<th>Fakultas</th>
				<th>Jam</th>
				<th>Dosen</th>
				<th>Opsi</th>
			</tr>
			<?php while ($row = $res->fetch_assoc()) { ?>
				<tr>
					<td><?= $row["kode"]; ?></td>
					<td><?= $row["nama"]; ?></td>
					<td><?= $row["fakultas"]; ?></td>
					<td><?= $row["jam"]; ?></td>
					<td><?= $row["dosen"]; ?></td>
					<td>
						<a href="edit_matakuliah.php?kode=<?= $row["kode"]; ?>" class='link'>Edit</a>
						<a href="delete_matakuliah.php?kode=<?= $row["kode"]; ?>" onclick="return confirm('Yakin Ingin Hapus ?')" class='link-delete'>Hapus</a>
					</td>
				</tr>	
			<?php } ?>
		</table>		
	</center>


</body>
</html>