<?php
include 't_sideKasir.php';

$username=$_SESSION['username_kasir'];
// $ceo_id=$_SESSION['ceo_id'];
// $nama=$_SESSION['ceo_nama'];
$result= mysqli_query($koneksi, "SELECT * FROM kasir where username_kasir='$username'");

$bio= mysqli_fetch_array($result);
$nama=$bio["nama_kasir"];
$username=$bio["username_kasir"];
// $id=$bio["id"];

// $hp=$bio["hp"];
?>

<title>
    Kasir Foodcourt
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
                    
                        
            
        </div>
        </div>

<?php 
include 't_foot.html';
?>