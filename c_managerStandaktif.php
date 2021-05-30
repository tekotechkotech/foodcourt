<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
 
  $id = $_POST['id_stand'];
  $nama = $_POST['nama_stand'];
  $namapenyewa = $_POST['nama_penyewastand'];
  $jenis = $_POST['jenis_stand'];

// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "UPDATE `stand` SET `nama_stand`='$nama',`nama_penyewastand`='$namapenyewa',`jenis_stand`='$jenis' WHERE `id_stand`='$id' ";


$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Tambah Data Berhasil.');window.location='manager_datastand.php';</script>";
    }
  ?>