
<?php
include 't_sideManager.php';

?>

<title>
    manager Foodcourt
</title>

<div class="main">
    <div class="jumbotron"><div class="row">
        <h1 class="pl-5 pb-3"><b>Tambah Stand</b></h1></div>
        <div class="container row">
            <div class="col-md-6">
            <form action="C_managerStandtambah.php" method="post">
                <div class="row">
                    <div class="col">
                        <p class="pl-5">No. Stand
                    </div>
                <input type="text"   name="id_stand" required=>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="pl-5">Ukuran
                    </div>
                    <input type="text"   name="ukuran_stand" required=>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="pl-5">Harga Sewa Stand
                    </div>
                    <input type="text"   name="hargasewa_stand" required=>
                </div>
                <div class="pl-5">
                    <a class="btn btn-warning" href="manager_datastand.php">Kembali</a>
                <button type="submit" class=" btn btn-success" name="button" id="button">Tambah</b></button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include 't_foot.html';
?>