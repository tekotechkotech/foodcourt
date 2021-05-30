
<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $id_tambahsaldo = $_POST['id_tambahsaldo'];
  $id_pengunjung = $_POST['id_pengunjung'];
  $saldo_masuk = $_POST['saldo_masuk'];
  

// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO tambahsaldopengunjung (`id_tambahsaldo`,`id_pengunjung`,`saldo_masuk`,`tgl_masuk`,`jam_masuk`) VALUES ('$id_tambahsaldo','$id_pengunjung','$saldo_masuk','now()', 'now()')";
$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Tambah Saldo Berhasil.');window.location='kasir_dataPengunjung.php';</script>";
    }
  ?>