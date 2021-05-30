<?php
include 't_sideCEO.php';

$id_sewastand=$_GET['id_sewastand'];
$result= mysqli_query($koneksi, "SELECT * FROM sewastand where id_sewastand='$id_sewastand'");

$bio= mysqli_fetch_array($result);
$nama = $bio['nama_sewastand'];
$username = $bio['username_sewastand'];
$password = $bio['password_sewastand'];
$tempatlahir = $bio['tempatlahir_sewastand'];
$tanggallahir = $bio['tgllahir_sewastand'];
$jk = $bio['jk_sewastand'];
$agama = $bio['agama_sewastand'];
$alamat = $bio['alamat_sewastand'];
$email = $bio['email_sewastand'];
$no_hp = $bio['no_hp_sewastand'];
$foto = $bio['foto_sewastand'];
// $id=$bio["id"];

// $hp=$bio["hp"];
?>

<title>
    CEO Foodcourt
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
                        <p class="pl-5">Username
                    </div>
                    <div class="col"> : <b><?= $username?></b></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <p class="pl-5">Password
                    </div>
                    <div class="col"> : <b><?= $password?></b></p>
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
                    <a class="btn btn-primary" href="ceo_dataPenyewaStand.php">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include 't_foot.html';
?>