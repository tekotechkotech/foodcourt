<?php
include 't_sideManager.php';

$username=$_SESSION['username_manager'];
//$adm_id=$_SESSION['adm_id'];
// $nama=$_SESSION['adm_nama'];
$result= mysqli_query($koneksi, "SELECT * FROM manager where username_manager='$username'");

$bio= mysqli_fetch_array($result);
$nama=$bio["nama_manager"];
$username=$bio["username_manager"];
$id=$bio["id_manager"];
// $id=$bio["id"];

// $hp=$bio["hp"];
?>

<title>
    Manager Foodcourt
</title>

<div class="main">
    <div class="jumbotron" style="height: 10cm;">   

    <h2 class="pt-5 pl-5">Selamat datang, <h1 class="pl-5"><b><?= $nama?></b></h1></h2><br><br>
        
       

<?php 
include 't_foot.html';
?>