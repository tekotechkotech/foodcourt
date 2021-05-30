  <?php
  // memanggil file koneksi.php untuk melakukan koneksi database
  include 'koneksi.php';
  
  session_start();
  $id_menu = $_POST['id_menu'];
  $id_sewastand = $_POST['id_sewastand'];
  $kategori = $_POST['kategori_menu'];
  $nama = $_POST['nama_menu'];
  $harga = $_POST['harga_menu'];
 

  $query = "UPDATE menu SET id_menu='$id_menu',id_sewastand='$id_sewastand' ,kategori_menu='$kategori',nama_menu='$nama',harga_menu='$harga' WHERE id_menu='$id_menu'";

if (mysqli_query($koneksi,$query) == true) {
  echo "
          <script>
              alert('Data Berhasil Diupdate!');
              document.location.href = 'stand_datamenu.php';
          </script>
      ";
} else {
  echo "
          <script>
              alert('Data Gagal Diupdate!');
              document.location.href = 'stand_editmenu.php';
          </script>
      ";
}
?>