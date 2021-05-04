<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$result = mysqli_query($koneksi,"SELECT * FROM adm where adm_username='$username' and adm_password='$password'");
$cek = mysqli_num_rows($result);

$bio= mysqli_fetch_array($result);
$adm_id=$bio["adm_id"];
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id 
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	$_SESSION['adm_id']=$adm_id;
	$_SESSION['status'] = "sudah_login";
	header("location:adm_page.php");
} else {
	header("location:adm_login.php?pesan=Login gagal, data tidak ditemukan.");
}
?>