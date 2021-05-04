<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$pass = $_POST['password'];
$lvl = $_POST['level'];

if ($lvl==1) {
	$result = mysqli_query($koneksi,"SELECT * FROM ceo where username_ceo='$username' and password_ceo='$pass'");
	$cek = mysqli_num_rows($result);
	
	$bio= mysqli_fetch_array($result);
	$id_ceo=$bio["id_ceo"];
	
	if($cek > 0) {
		$data = mysqli_fetch_assoc($result);
		//menyimpan session user, nama, status dan id 
		$_SESSION['username_ceo']=$username;
		$_SESSION['password_ceo']=$pass;
		$_SESSION['id_ceo']=$id_ceo;
		$_SESSION['status'] = "sudah_login";
		header("location:ceo_page.php");
	} else {
		header("location:login.php?pesan=Login gagal, data tidak ditemukan.");
	}
}elseif ($lvl==2) {
	$result = mysqli_query($koneksi,"SELECT * FROM manager where username_manager='$username' and password_manager='$pass'");
	$cek = mysqli_num_rows($result);
	
	if($cek > 0) {
		$data = mysqli_fetch_assoc($result);
		//menyimpan session user, nama, status dan id 
		$_SESSION['username_manager']=$username;
		$_SESSION['password_manager']=$pass;
		$_SESSION['id_manager']=$id_manager;
		$_SESSION['status'] = "sudah_login";
		header("location:manager_page.php");
	} else {
		header("location:login.php?pesan=Login gagal, data tidak ditemukan.");
	}
}elseif ($lvl==3) {
	$result = mysqli_query($koneksi,"SELECT * FROM kasir where username_kasir='$username' and password_kasir='$pass'");
	$cek = mysqli_num_rows($result);
	
	if($cek > 0) {
		$data = mysqli_fetch_assoc($result);
		//menyimpan session user, nama, status dan id 
		$_SESSION['username_kasir']=$username;
		$_SESSION['password_kasir']=$pass;
		$_SESSION['id_kasir']=$id_kasir;
		$_SESSION['status'] = "sudah_login";
		header("location:kasir_page.php");
	} else {
		header("location:login.php?pesan=Login gagal, data tidak ditemukan.");
	}
} else {
	$result = mysqli_query($koneksi,"SELECT * FROM sewastand where username_sewastand='$username' and password_sewastand='$pass'");
	$cek = mysqli_num_rows($result);
	
	if($cek > 0) {
		$data = mysqli_fetch_assoc($result);
		//menyimpan session user, nama, status dan id 
		$_SESSION['username_sewastand']=$username;
		$_SESSION['password_sewastand']=$pass;
		$_SESSION['id_sewastand']=$id_sewastand;
		$_SESSION['status'] = "sudah_login";
		header("location:stand_page.php");
	} else {
		header("location:login.php?pesan=Login gagal, data tidak ditemukan.");
	}
} 
 


// // menyeleksi data user dengan username dan password yang sesuai
// $result = mysqli_query($koneksi,"SELECT * FROM mhs where mhs_nim='$mhs_nim' and mhs_password='$mhs_password'");
// $cek = mysqli_num_rows($result);
 
?>