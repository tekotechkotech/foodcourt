<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $id_pengunjung = $_POST['id_pengunjung'];
  $nama_pengunjung = $_POST['nama_pengunjung'];
  $no_hp_pengunjung = $_POST['no_hp_pengunjung'];
  $email_pengunjung = $_POST['email_pengunjung'];
  $saldo_pengunjung = $_POST['saldo_pengunjung'];
// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO pengunjung (`id_pengunjung`,`nama_pengunjung`,`no_hp_pengunjung`,`email_pengunjung`,`saldo_pengunjung`) VALUES ('$id_pengunjung','$nama_pengunjung', '$no_hp_pengunjung', '$email_pengunjung','$saldo_pengunjung')";
$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Tambah Data Berhasil.');window.location='kasir_dataPengunjung.php';</script>";
    }
  ?>