<?php 

include 'koneksi.php';

function hapus($adm_id){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM adm WHERE adm_id = $adm_id");

    return mysqli_affected_rows($koneksi);
}

$adm_id = $_GET["adm_id"];

if (hapus($adm_id) > 0 ) {
    echo "
            <script>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'adm_adm.php';
            </script>
        ";
}
else {
    echo "
            <script>
                alert('Data Gagal Dihapus!');
                document.location.href = 'adm_adm.php';
            </script>
        ";
}

?>