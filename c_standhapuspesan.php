<?php 

include 'koneksi.php';

function hapus($id_pesanan){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM pemesanan WHERE id_pesanan = $id_pesanan");

    return mysqli_affected_rows($koneksi);
}

$id_pesanan = $_GET["id_pesanan"];

if (hapus($id_pesanan) > 0 ) {
    echo "
            <script>
                alert('Data Berhasil Dihapus!');
                document.location.href = 'stand_datapesan.php';
            </script>
        ";
}
else {
    echo "
            <script>
                alert('Data Gagal Dihapus!');
                document.location.href = 'stand_datapesan.php';
            </script>
        ";
}

?>