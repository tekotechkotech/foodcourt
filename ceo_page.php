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
    CEO Foodcourt
</title>

<div class="main">
    <div class="jumbotron" style="height: 10cm;">   

    <h2 class="pt-5 pl-5">Selamat datang <h1 class="pl-5"><b><?= $nama?></b></h1></h2><br><br>

<?php 
include 't_foot.html';
?>