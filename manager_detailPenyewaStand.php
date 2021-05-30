<?php
include 't_sideManager.php';

$id_penyewastand=$_GET['id_penyewastand'];
$result= mysqli_query($koneksi, "SELECT * FROM penyewastand where id_penyewastand='$id_penyewastand'");

$bio= mysqli_fetch_array($result);
$nama = $bio['nama_penyewastand'];
$tempatlahir = $bio['tempatlahir_penyewastand'];
$tanggallahir = $bio['tgllahir_penyewastand'];
$jk = $bio['jk_penyewastand'];
$agama = $bio['agama_penyewastand'];
$alamat = $bio['alamat_penyewastand'];
$email = $bio['email_penyewastand'];
$no_hp = $bio['no_hp_penyewastand'];
$foto = $bio['foto_penyewastand'];
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
                        <p class="pl-5">Nama
                    </div>
                    <div class="col"> : <b><?= $nama?></b></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="pl-5">Tempat Lahir
                    </div>
                    <div class="col"> : <b><?= $tempatlahir?></b></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p class="pl-5">Tanggal Lahir
                    </div>
                    <div class="col"> : <b><?= $tanggallahir?></b></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p class="pl-5">Jenis Kelamin
                    </div>
                    <div class="col"> : <b><?= $jk?></b></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p class="pl-5">Agama
                    </div>
                    <div class="col"> : <b><?= $agama?></b></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p class="pl-5">Alamat
                    </div>
                    <div class="col"> : <b><?= $alamat?></b></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p class="pl-5">Email
                    </div>
                    <div class="col"> : <b><?= $email?></b></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p class="pl-5">No. HP
                    </div>
                    <div class="col"> : <b><?= $no_hp?></b></p>
                    </div>
                </div>
                <div class="navbar ml-auto pl-5">
                    <a class="btn btn-primary" href="manager_datapenyewastand.php">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include 't_foot.html';
?>