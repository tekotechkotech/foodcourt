<?php 

include 'koneksi.php';

function hapus($id_kasir){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM kasir WHERE id_kasir = $id_kasir");

    return mysqli_affected_rows($koneksi);
}

$id_kasir = $_GET["id_kasir"];

if (hapus($id_kasir) > 0 ) {
    echo "
            <script>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'manager_dataKasir.php';
            </script>
        ";
}
else {
    echo "
            <script>
                alert('Data Gagal Dihapus!');
                document.location.href = 'manager_dataKasir.php';
            </script>
        ";
}

?>