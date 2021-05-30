<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
 
  $nama = $_POST['nama_manager'];
  $username = $_POST['username_manager'];
  $password = $_POST['password_manager'];
  $tempatlahir = $_POST['tempatlahir_manager'];
  $tanggallahir = $_POST['tgllahir_manager'];
  $jk = $_POST['jk_manager'];
  $agama = $_POST['agama_manager'];
  $alamat = $_POST['alamat_manager'];
  $email = $_POST['email_manager'];
  $no_hp = $_POST['no_hp_manager'];


// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO manager (`nama_manager`,`username_manager`,`password_manager`,`tempatlahir_manager`,`tgllahir_manager`,`jk_manager`,`agama_manager`,`alamat_manager`,`email_manager`,`no_hp_manager`) 
VALUES ('$nama', '$username', '$password', '$tempatlahir', '$tanggallahir',
'$jk', '$agama', '$alamat', '$email', '$no_hp')";

$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Tambah Data Berhasil.');window.location='ceo_dataManager.php';</script>";
    }
  ?>