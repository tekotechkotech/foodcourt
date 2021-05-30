<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
 
  
  $id = $_GET['id_stand'];

// (id tidak perlu karena dibikin otomatis)
$query = "UPDATE `stand` SET `nama_stand`='',`nama_penyewastand`='',`jenis_stand`='' WHERE `id_stand`='$id' ";

$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Non-Aktif Stand Berhasil.');window.location='manager_datastand.php';</script>";
    }
  ?>