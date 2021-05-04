<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

session_start();
$usename=$_SESSION['username'];
$adm_id=$_SESSION['adm_id'];

  // membuat variabel untuk menampung data dari form
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "UPDATE adm SET adm_nama='$nama',adm_username='$username' ,adm_email='$email',adm_password='$password' WHERE adm_id='$adm_id'";

if (mysqli_query($koneksi,$query) == true) {
  echo "
          <script>
              alert('Data Berhasil Diupdate!');
              document.location.href = 'adm_page.php';
          </script>
      ";
} else {
  echo "
          <script>
              alert('Data Gagal Diupdate!');
              document.location.href = 'adm_ubah.php';
          </script>
      ";
}
?>