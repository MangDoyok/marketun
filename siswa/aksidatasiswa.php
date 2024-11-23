<?php
include '../koneksi.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

// update data ke database
mysqli_query($koneksi,"insert into siswa values('','$nis','$nama','$kelas','$alamat','$no_telp')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>