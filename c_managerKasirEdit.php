<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form

$id_kasir=$_POST['id_kasir'];

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


// (id tidak perlu karena dibikin otomatis)
$query = "UPDATE kasir SET nama_kasir='$nama',username_kasir='$username',
password_kasir='$password',tempatlahir_kasir='$tempatlahir',tgllahir_kasir='$tanggallahir',
jk_kasir='$jk',agama_kasir='$agama',alamat_kasir='$alamat',email_kasir='$email',
no_hp_kasir='$no_hp' WHERE id_kasir='$id_kasir'";

if (mysqli_query($koneksi,$query) == true) {
  echo "
          <script>
              alert('Data Berhasil Diupdate!');
              document.location.href = 'manager_dataKasir.php';
          </script>
      ";
} else {
  echo "
          <script>
              alert('Data Gagal Diupdate!');
              document.location.href = 'manager_editKasir.php';
          </script>
      ";
}
?>
