<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

session_start();
$mhs_nim=$_SESSION['mhs_nim'];

  // membuat variabel untuk menampung data dari form
  $nama = $_POST['nama'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $jurusan = $_POST['jurusan'];
  $IPK = $_POST['IPK'];
  $judulTA = $_POST['judulTA'];

// jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
$query = "UPDATE mhs SET mhs_nama='$nama' ,mhs_password='$password',mhs_email='$email',mhs_jurusan='$jurusan', mhs_ipk='$IPK', mhs_judulTA='$judulTA' WHERE mhs_nim='$mhs_nim'";

if (mysqli_query($koneksi,$query) == true) {
  echo "
          <script>
              alert('Data Berhasil Diupdate!');
              document.location.href = 'mhs_page.php';
          </script>
      ";
} else {
  echo "
          <script>
              alert('Data Gagal Diupdate!');
              document.location.href = 'mhs_ubah.php';
          </script>
      ";
}
?>