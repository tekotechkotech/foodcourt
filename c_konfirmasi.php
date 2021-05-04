<?php 

include 'koneksi.php';

function edit($mhs_nim){
    global $koneksi;
    mysqli_query($koneksi, "UPDATE mhs SET mhs_konfirmasi='sudah' WHERE mhs_nim = $mhs_nim");

    return mysqli_affected_rows($koneksi);
}

$mhs_nim = $_GET["mhs_nim"];

if (edit($mhs_nim) > 0 ) {
    echo "
            <script>
                alert('Data Berhasil DiKonfirmasi!');
                document.location.href = 'adm_blmterkonfirmasi.php';
            </script>
        ";
}
else {
    echo "
            <script>
                alert('Data Gagal DiKonfirmasi!');
                document.location.href = 'adm_blmterkonfirmasi.php';
            </script>
        ";
}

?>