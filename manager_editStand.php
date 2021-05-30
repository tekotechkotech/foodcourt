<?php
include 't_sideManager.php';

$id_stand=$_GET['id_stand'];
$result= mysqli_query($koneksi, "SELECT * FROM stand where id_stand='$id_stand'");

$bio= mysqli_fetch_array($result);
$nama = $bio['nama_stand'];
$pemilik = $bio['nama_penyewastand'];
$jenis = $bio['jenis_stand'];
?>

<title>
    manager Foodcourt
</title>

<div class="main">
    <div class="jumbotron"><div class="row">
        <h1 class="pl-5 pb-3"><b>Biodata <?= $nama?></b></h1></div>
        <div class="container row">
            <div class="col-md-6">
            <form action="C_managerstandEdit.php" method="post">
                <div class="row">
                    <div class="col">
                        <p class="pl-5">Nama Stand 
                    </div>
                <input type="text"  value="<?= $nama?>" name="nama_stand" required=>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="pl-5">Nama Penyewa
                    </div>
                    <input type="text"  value="<?= $pemilik?>" name="username_stand" required=>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="pl-5">Jenis Jualan Stand
                    </div>
                    <input type="text"  value="<?= $jenis?>" name="jenis_stand" required=>
                </div>
                <div class="pl-5">
                    <a class="btn btn-warning" href="manager_datastand.php">Kembali</a>
                <button type="submit" class=" btn btn-success" name="button" id="button" value="Proses"><b>Simpan</b></button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include 't_foot.html';
?>