<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $id_sewastand=$_POST['id_sewastand'];

  $nama = $_POST['nama_sewastand'];
  $username = $_POST['username_sewastand'];
  $password = $_POST['password_sewastand'];
  $tempatlahir = $_POST['tempatlahir_sewastand'];
  $tanggallahir = $_POST['tgllahir_sewastand'];
  $jk = $_POST['jk_sewastand'];
  $agama = $_POST['agama_sewastand'];
  $alamat = $_POST['alamat_sewastand'];
  $email = $_POST['email_sewastand'];
  $no_hp = $_POST['no_hp_sewastand'];


//(id tidak perlu karena dibikin otomatis)
$query = "UPDATE sewastand SET nama_sewastand='$nama',username_sewastand='$username',
password_sewastand='$password',tempatlahir_sewastand='$tempatlahir',tgllahir_sewastand='$tanggallahir',
jk_sewastand='$jk',agama_sewastand='$agama',alamat_sewastand='$alamat',email_sewastand='$email',
no_hp_sewastand='$no_hp' WHERE id_sewastand='$id_sewastand'";

if (mysqli_query($koneksi,$query) == true) {
  echo "
          <script>
              alert('Data Berhasil Diupdate!');
              document.location.href = 'manager_dataPenyewaStand.php';
          </script>
      ";
} else {
  echo "
          <script>
              alert('Data Gagal Diupdate!');
              document.location.href = 'manager_editPenyewaStand.php';
          </script>
      ";
}
?>