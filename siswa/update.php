<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];
$no = $_POST['no_telp'];
 
// update data ke database
mysqli_query($koneksi,"update siswa set nis='$nis', nama='$nama', kelas='$kelas', alamat='$alamat', no_telp='$no' where id='$id'"); 

// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>