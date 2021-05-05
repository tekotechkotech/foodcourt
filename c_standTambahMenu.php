<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $id_menu = $_POST['id_menu'];
  $id_sewastand = $_POST['id_sewastand'];
  $kategori = $_POST['kategori_menu'];
  $nama = $_POST['nama_menu'];
  $harga = $_POST['harga_menu'];

// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO menu (`id_menu`,`id_sewastand`,`kategori_menu`,`nama_menu`,`harga_menu`) VALUES ('$id_menu','$id_sewastand', '$kategori','$nama','$harga')";
$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Tambah Data Berhasil.');window.location='stand_datamenu.php';</script>";
    }
  ?>