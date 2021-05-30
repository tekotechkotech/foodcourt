<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
 
  $nama = $_POST['nama_sewastand'];
  $username = $_POST['username_sewastand'];
  $password = $_POST['password_sewastand'];
  $tempatlahir = $_POST['tempatlahir_sewastand'];
  $tanggallahir = $_POST['tgllahir_sewastand'];
  $jk = $_POST['jk_sewastand'];
  $agama = $_POST['agama_sewastand'];
  $alamat = $_POST['alamat_sewastand'];
  $email = $_POST['email_sewastand'];
  $no_hp = $_POST['no_hp_sewastand'];
  $foto = $_POST['foto_sewastand'];

// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO sewastand (`nama_sewastand`,`username_sewastand`,`password_sewastand`,`tempatlahir_sewastand`,`tgllahir_sewastand`,`jk_sewastand`,`agama_sewastand`,`alamat_sewastand`,`email_sewastand`,`no_hp_sewastand`,`foto_sewastand`) 
VALUES ('$nama', '$username', '$password', '$tempatlahir', '$tanggallahir',
'$jk', '$agama', '$alamat', '$email', '$no_hp', '$foto')";

$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Tambah Data Berhasil.');window.location='manager_dataPenyewaStand.php';</script>";
    }
  ?>