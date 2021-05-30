<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $id_pesanan = $_POST['id_pesanan'];
  $id_pengunjung = $_POST['id_pengunjung'];
  $id_menu = $_POST['id_menu'];
  $nama = $_POST['nama_menu'];
  $harga = $_POST['harga_menu'];
  $jumlah = $_POST['jumlah_menu'];
  $total = $_POST['total_harga'];
// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO pemesanan (`id_pesanan`,`id_pengunjung`,`id_menu`,`nama_menu`,`harga_menu`,`jumlah_menu`,`total_harga`) VALUES ('$id_pesanan','$id_pengunjung','$id_menu','$nama','$harga','$jumlah','$total')";
$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Tambah Data Berhasil.');window.location='stand_datapesan.php';</script>";
    }
  ?>