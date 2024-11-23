<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="table-container">
		<p class="selamat-datang">Selamat datang <?php echo $_SESSION['nama']; ?></p>
		<p>Anda Login pada: <?php echo $_SESSION['waktu_login']; ?></p>
		<div class="logout-container">
		<a href="../index.php"><button class="logout-button">Logout</button></a>
    	</div>
		<table border="1">
			<tr>
				<th>No</th>
				<th>Nis</th>
				<th>Nama</th>
				<th>Kelas</th>
				<th>Alamat</th>
				<th>No. Telp</th>
				<th class="tableopsi">Opsi</th>
			</tr>
			<?php 
			include '../koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from siswa");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nis']; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['kelas']; ?></td>
					<td><?php echo $d['alamat']; ?></td>
					<td><?php echo $d['no_telp']; ?></td>   
					<td class="button-cell">
					<a href="edit.php?id=<?php echo $d['id']; ?>"><button class="edit-button">Edit</button></a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>"><button class="hapus-button">Hapus</button></a>
					</td>
				</tr>
				<?php 
			}
			?>
		</table>
		<a href="datasiswa.php"><button class="plus-button">Tambah</button></a>
		
	</div>
</body>
</html>