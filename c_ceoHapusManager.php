<?php 

include 'koneksi.php';

function hapus($id_manager){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM manager WHERE id_manager = $id_manager");

    return mysqli_affected_rows($koneksi);
}

$id_manager = $_GET["id_manager"];

if (hapus($id_manager) > 0 ) {
    echo "
            <script>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'ceo_dataManager.php';
            </script>
        ";
}
else {
    echo "
            <script>
                alert('Data Gagal Dihapus!');
                document.location.href = 'ceo_dataManager.php';
            </script>
        ";
}

?>