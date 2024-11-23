<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

// update data ke database
mysqli_query($koneksi,"insert into admin values('','$nama','$email','$password','')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>