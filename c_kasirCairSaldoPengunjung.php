
<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $id_cairsaldo = $_POST['id_cairsaldo'];
  $id_pengunjung = $_POST['id_pengunjung'];
  $saldo_keluar = $_POST['saldo_keluar'];


// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "INSERT INTO cairsaldopengunjung (`id_cairsaldo`,`id_pengunjung`,`saldo_keluar`,`tgl_keluar`,`jam_keluar`) VALUES ('$id_cairsaldo','$id_pengunjung','$saldo_keluar','now()', 'now()')";
$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Cair Saldo Berhasil.');window.location='kasir_dataPengunjung.php';</script>";
    }
  ?>