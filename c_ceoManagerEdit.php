<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
 
  
  $id = $_POST['id_penyewastand'];
  $nama = $_POST['nama_penyewastand'];
  $username = $_POST['username_penyewastand'];
  $password = $_POST['password_penyewastand'];
  $tempatlahir = $_POST['tempatlahir_penyewastand'];
  $tanggallahir = $_POST['tgllahir_penyewastand'];
  $jk = $_POST['jk_penyewastand'];
  $agama = $_POST['agama_penyewastand'];
  $alamat = $_POST['alamat_penyewastand'];
  $email = $_POST['email_penyewastand'];
  $no_hp = $_POST['no_hp_penyewastand'];
  $foto = $_POST['foto_penyewastand'];

// (id tidak perlu karena dibikin otomatis)
$query = "UPDATE `penyewastand` SET `nama_penyewastand`='$nama',`username_penyewastand`='$username',`password_penyewastand`='$password',`tempatlahir_penyewastand`='$tempatlahir',`tgllahir_penyewastand`='$tanggallahir',`jk_penyewastand`='$jk',`agama_penyewastand`='$agama',`alamat_penyewastand`='$alamat',`email_penyewastand`='$email',`no_hp_penyewastand`='$no_hp',`foto_penyewastand`='$' WHERE `id_penyewastand`='$id' ";

$result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
          " - ".mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman index.php
      //silahkan ganti index.php sesuai halaman yang akan dituju
      echo "<script>alert('Edit Data Berhasil.');window.location='ceo_datapenyewastand.php';</script>";
    }
  ?>