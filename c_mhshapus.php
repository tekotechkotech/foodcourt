<?php 

include 'koneksi.php';

function hapus($mhs_nim){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM mhs WHERE mhs_nim = $mhs_nim");

    return mysqli_affected_rows($koneksi);
}

$mhs_nim = $_GET["mhs_nim"];

if (hapus($mhs_nim) > 0 ) {
    echo "
            <script>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'adm_blmterkonfirmasi.php';
            </script>
        ";
}
else {
    echo "
            <script>
                alert('Data Gagal Dihapus!');
                document.location.href = 'adm_blmterkonfirmasi.php';
            </script>
        ";
}

?>