<?php
  // memanggil file koneksi.php untuk melakukan koneksi database
  include 'koneksi.php';
  
  session_start();
  $id_pesanan = $_POST['id_pesanan'];
  $id_pengunjung = $_POST['id_pengunjung'];
  $id_menu = $_POST['id_menu'];
  $nama = $_POST['nama_menu'];
  $harga = $_POST['harga_menu'];
  $jumlah = $_POST['jumlah_menu'];
  $total = $_POST['total_harga'];
 

  $query = "UPDATE pemesanan SET id_pesanan='$id_pesanan',id_pengunjung='$id_pengunjung' ,id_menu='$id_menu',nama_menu='$nama',harga_menu='$harga',jumlah_menu='$jumlah',total_harga='$total' WHERE id_pesanan='$id_pesanan'";

if (mysqli_query($koneksi,$query) == true) {
  echo "
          <script>
              alert('Data Berhasil Diupdate!');
              document.location.href = 'stand_datapesan.php';
          </script>
      ";
} else {
  echo "
          <script>
              alert('Data Gagal Diupdate!');
              document.location.href = 'stand_editpesan.php';
          </script>
      ";
}
?>