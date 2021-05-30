<?php
include 't_sideManager.php';

$id_stand=$_GET['id_stand'];
$result= mysqli_query($koneksi, "SELECT * FROM stand where id_stand='$id_stand'");

$bio= mysqli_fetch_array($result);
$nama = $bio['nama_stand'];
$namapenyewa = $bio['nama_penyewastand'];
$ukuran = $bio['ukuran_stand'];
$hargasewa = $bio['hargasewa_stand'];
// $id=$bio["id"];

// $hp=$bio["hp"];
?>

<title>
    manager Foodcourt
</title>

<div class="main">
    <div class="jumbotron"><div class="row">
        <h1 class="pl-5 pb-3"><b>Biodata <?= $nama?></b></h1></div>
        <div class="container row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col">
                        <p class="pl-5">Nama Stand
                    </div>
                    <div class="col"> : <b><?= $nama?></b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="pl-5">Nama Penyewa
                    </div>
                    <div class="col"> : <b><?= $namapenyewa?></b></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p class="pl-5">Ukuran Stand
                    </div>
                    <div class="col"> : <b><?= $ukuran?></b></div>
                </div>

                <div class="row">
                    <div class="col">
                        <p class="pl-5">Harga Sewa Stand
                    </div>
                    <div class="col"> : <b>Rp. <?= $hargasewa?></b></p></div>
                </div>
                    
                <div class="pl-5">
                    <a class="btn btn-primary" href="manager_datastand.php">Kembali</a>
                    <a class="btn btn-success" href="manager_datastand.php">Bayar Penyewaan Stand</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include 't_foot.html';
?>