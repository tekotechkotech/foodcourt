<?php
include 't_sideStand.php';

$username=$_SESSION['username'];
$adm_id=$_SESSION['adm_id'];
// $nama=$_SESSION['adm_nama'];
$result= mysqli_query($koneksi, "SELECT * FROM adm where adm_username='$username'");

$bio= mysqli_fetch_array($result);
$nama=$bio["adm_nama"];
$username=$bio["adm_username"];
$email=$bio["adm_email"];
// $id=$bio["id"];

// $hp=$bio["hp"];
?>

<title>
    Penyewa Stand Foodcourt
</title>

<div class="main">
    <div class="jumbotron" style="height: 10cm;">   


    <h2 class="pt-5 pl-5">Selamat datang, <h1 class="pl-5"><b><?= $nama?></b></h1></h2><br><br>
        
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col">
                        <p class="pl-5">Username</div><div class="col"> : <b><?= $username?></b></p>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col">
                        <p class="pl-5">Email   </div><div class="col"> : <b><?= $email?></b></p>
                    </div>
                </div>
                        
            </div>
            <div class="col-md-4 ml-auto">
            <div class="container navbar-nav">
                            <a class="btn btn-primary p-3" href="adm_ubah.php?adm_username=<?=$bio["adm_username"]; ?>">Edit</a>
                        </div>
                
            </div>
        </div>
        </div>



<?php 
include 't_foot.html';
?>