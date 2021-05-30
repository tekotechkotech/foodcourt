<?php
include 't_sideManager.php';

$id_stand=$_GET['id_stand'];
$result= mysqli_query($koneksi, "SELECT * FROM stand where id_stand='$id_stand'");

$bio= mysqli_fetch_array($result);
$nama = $bio['nama_stand'];
$username = $bio['username_stand'];
$pemilik = $bio['nama_penyewastand'];
$idpemilik = $bio['id_penyewastand'];
$ukuran = $bio['ukuran_stand'];
$foto = $bio['foto_stand'];
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
                        <p class="pl-5">Username Stand
                    </div>
                    <div class="col"> : <b><?= $username?></b></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p class="pl-5">ID Pemilik
                    </div>
                    <div class="col"> : <b><?= $idpemilik?></b></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p class="pl-5">Nama Pemilik
                    </div>
                    <div class="col"> : <b><?= $pemilik?></b></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p class="pl-5">Ukuran Stand
                    </div>
                    <div class="col"> : <b><?= $ukuran?></b></p>
                    </div>
                </div>
                <div class="navbar ml-auto pl-5">
                    <a class="btn btn-primary" href="manager_datastand.php">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include 't_foot.html';
?>