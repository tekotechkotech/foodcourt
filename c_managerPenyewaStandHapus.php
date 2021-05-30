<?php 

include 'koneksi.php';

function hapus($id_sewastand){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM sewastand WHERE id_sewastand = $id_sewastand");

    return mysqli_affected_rows($koneksi);
}

$id_sewastand = $_GET["id_sewastand"];

if (hapus($id_sewastand) > 0 ) {
    echo "
            <script>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'manager_dataPenyewaStand.php';
            </script>
        ";
}
else {
    echo "
            <script>
                alert('Data Gagal Dihapus!');
                document.location.href = 'manager_dataPenyewaStand.php';
            </script>
        ";
}

?>