<?php
include 't_sideCEO.php';

$username=$_SESSION['username_ceo'];
// $ceo_id=$_SESSION['ceo_id'];
// $nama=$_SESSION['ceo_nama'];
$result= mysqli_query($koneksi, "SELECT * FROM ceo where username_ceo='$username'");

$bio= mysqli_fetch_array($result);
$nama=$bio["nama_ceo"];
$username=$bio["username_ceo"];
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
            <div class="col-md-4 ml-auto">
            <div class="container navbar-nav">
                            <a class="btn btn-primary p-3" href="ceo_ubah.php?ceo_username=<?=$bio["username_seo"]; ?>">Edit</a>
                        </div>
                
            </div>
        </div>
        </div>

<?php 
include 't_foot.html';
?>