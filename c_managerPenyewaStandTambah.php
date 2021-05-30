<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
 
  $nama = $_POST['nama_penyewastand'];
  $tempatlahir = $_POST['tempatlahir_penyewastand'];
  $tanggallahir = $_POST['tgllahir_penyewastand'];
  $jk = $_POST['jk_penyewastand'];
  $agama = $_POST['agama_penyewastand'];
  $alamat = $_POST['alamat_penyewastand'];
  $email = $_POST['email_penyewastand'];
  $no_hp = $_POST['no_hp_penyewastand'];
  $foto = $_POST['foto_penyewastand'];

// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO penyewastand (`nama_penyewastand`,`tempatlahir_penyewastand`,`tgllahir_penyewastand`,`jk_penyewastand`,`agama_penyewastand`,`alamat_penyewastand`,`email_penyewastand`,`no_hp_penyewastand`,`foto_penyewastand`) 
VALUES ('$nama', '$tempatlahir', '$tanggallahir', '$jk', '$agama', '$alamat', '$email', '$no_hp', '$foto')";

$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Tambah Data Berhasil.');window.location='manager_datapenyewastand.php';</script>";
    }
  ?>