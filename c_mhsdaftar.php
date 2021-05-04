<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $nim = $_POST['NIM'];
  $nama = $_POST['nama'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $jurusan = $_POST['jurusan'];
  $IPK = $_POST['IPK'];
  $judulTA = $_POST['judulTA'];

// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO mhs(`mhs_nim`,`mhs_nama`,`mhs_password`,`mhs_email`,`mhs_jurusan`,`mhs_ipk`,`mhs_judulTA`,`mhs_konfirmasi`) VALUES ('$nim', '$nama', '$password', '$email', '$jurusan', '$IPK','$judulTA','belum')";
$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Pendaftaran Berhasil, Silahkan Login.');window.location='mhs_login.php';</script>";
    }
  ?>