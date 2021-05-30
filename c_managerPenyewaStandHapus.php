<?php 

include 'koneksi.php';

function hapus($id_stand){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM stand WHERE id_stand = $id_stand");

    return mysqli_affected_rows($koneksi);
}

$id_stand = $_GET["id_stand"];

if (hapus($id_stand) > 0 ) {
    echo "
            <script>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'manager_datastand.php';
            </script>
        ";
}
else {
    echo "
            <script>
                alert('Data Gagal Dihapus!');
                document.location.href = 'manager_datastand.php';
            </script>
        ";
}

?>