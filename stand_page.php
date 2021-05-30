
<?php
include 't_sideStand.php';

$username=$_SESSION['username_sewastand'];
$id =$_SESSION['id_sewastand'];
// $nama=$_SESSION['adm_nama'];
$result= mysqli_query($koneksi, "SELECT * FROM sewastand where username_sewastand ='$username'");

$bio= mysqli_fetch_array($result);
$nama =$bio["nama_sewastand"];
$username =$bio["username_sewastand"];
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
            



