<?php 

include 'koneksi.php';

function hapus($id_menu){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM menu WHERE id_menu = $id_menu");

    return mysqli_affected_rows($koneksi);
}

$id_menu = $_GET["id_menu"];

if (hapus($id_menu) > 0 ) {
    echo "
            <script>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'stand_datamenu.php';
            </script>
        ";
}
else {
    echo "
            <script>
                alert('Data Gagal Dihapus!');
                document.location.href = 'stand_datamenu.php';
            </script>
        ";
}

?>