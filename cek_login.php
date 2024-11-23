<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where email='$email' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$admin = mysqli_fetch_assoc($data);
	$_SESSION['nama'] = $admin['nama'];
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
    date_default_timezone_set('Asia/Jakarta');
    $waktu_login = date('Y-m-d H:i:s');
	$_SESSION['waktu_login'] = $waktu_login;
	mysqli_query($koneksi, "update admin set waktu_login='$waktu_login' where email='$email'");

	header("location:siswa/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>