<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
 
  $nama = $_POST['nama_kasir'];
  $username = $_POST['username_kasir'];
  $password = $_POST['password_kasir'];
  $tempatlahir = $_POST['tempatlahir_kasir'];
  $tanggallahir = $_POST['tgllahir_kasir'];
  $jk = $_POST['jk_kasir'];
  $agama = $_POST['agama_kasir'];
  $alamat = $_POST['alamat_kasir'];
  $email = $_POST['email_kasir'];
  $no_hp = $_POST['no_hp_kasir'];
  $foto = $_POST['foto_kasir'];

// (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO kasir (`nama_kasir`,`username_kasir`,`password_kasir`,
`tempatlahir_kasir`,`tgllahir_kasir`,`jk_kasir`,`agama_kasir`,`alamat_kasir`,
`email_kasir`,`no_hp_kasir`,`foto_kasir`) VALUES ('$nama', '$username', '$password', '$tempatlahir', '$tanggallahir',
'$jk', '$agama', '$alamat', '$email', '$no_hp', '$foto')";

$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Edit Data Berhasil.');window.location='manager_dataKasir.php';</script>";
    }
  ?>