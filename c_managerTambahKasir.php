<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = $_POST['password'];

// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO kasir (`id_kasir`,`nama_kasir`,`username_kasir`,`password_kasir`) VALUES ('$id','$nama', '$username', '$password')";
$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Tambah Data Berhasil.');window.location='manager_dataKasir.php';</script>";
    }
  ?>