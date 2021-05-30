<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

  // membuat variabel untuk menampung data dari form
  $id_manager=$_POST['id_manager'];

  $nama = $_POST['nama_manager'];
  $username = $_POST['username_manager'];
  $password = $_POST['password_manager'];
  $tempatlahir = $_POST['tempatlahir_manager'];
  $tanggallahir = $_POST['tgllahir_manager'];
  $jk = $_POST['jk_manager'];
  $agama = $_POST['agama_manager'];
  $alamat = $_POST['alamat_manager'];
  $email = $_POST['email_manager'];
  $no_hp = $_POST['no_hp_manager'];

//(id tidak perlu karena dibikin otomatis)
$query = "UPDATE manager SET nama_manager='$nama',username_manager='$username',
password_manager='$password',tempatlahir_manager='$tempatlahir',tgllahir_manager='$tanggallahir',
jk_manager='$jk',agama_manager='$agama',alamat_manager='$alamat',email_manager='$email',
no_hp_manager='$no_hp' WHERE id_manager='$id_manager'";

if (mysqli_query($koneksi,$query) == true) {
  echo "
          <script>
              alert('Data Berhasil Diupdate!');
              document.location.href = 'ceo_dataManager.php';
          </script>
      ";
} else {
  echo "
          <script>
              alert('Data Gagal Diupdate!');
              document.location.href = 'ceo_EditManager.php';
          </script>
      ";
}
?>