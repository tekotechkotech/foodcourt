<?php
include 't_sideManager.php';

$id_stand=$_GET['id_stand'];
// $result= mysqli_query($koneksi, "SELECT * FROM stand where id_stand='$id_stand'");

// $bio= mysqli_fetch_array($result);
// $id = $bio['id_stand'];
// $nama = $bio['nama_stand'];
// $pemilik = $bio['nama_penyewastand'];
// $jenis = $bio['jenis_stand'];
?>

<title>
    manager Foodcourt
</title>

<div class="main">
    <div class="jumbotron"><div class="row">
        <h1 class="pl-5 pb-3"><b>Aktifkan Stand</b></h1></div>
        <div class="container row">
            <div class="col-md-6">
            <form action="C_managerStandaktif.php" method="post">
                <div class="row">
                    <div class="col">
                        <p class="pl-5">Nama Stand
                    </div>
                <input type="text"   name="nama_stand" required=>
                <input type="hidden" value="<?= $id_stand; ?>"   name="id_stand" required=>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="pl-5">Nama Penyewa
                    </div>
                    <input type="text"   name="nama_penyewastand" required=>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="pl-5">Jenis Jualan Stand
                    </div>
                    <input type="text"   name="jenis_stand" required=>
                </div>
                <div class="pl-5">
                    <a class="btn btn-warning" href="manager_datastand.php">Kembali</a>
                <button type="submit" class=" btn btn-success" name="button" id="button">Simpan</b></button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include 't_foot.html';
?>