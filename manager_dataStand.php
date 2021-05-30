<?php
include 't_sideManager.php';
$user = mysqli_query($koneksi,"SELECT * FROM stand");
?>

<title>
    Data Stand Foodcourt
</title>

<div class="main">
    <div class="jumbotron">
        <div class="navbar ml-auto">
        <h2 class="pt-3">Data Stand</h2>
        <a href="manager_tambahstand.php" class="btn btn-primary text-light " ><h6><i class="bi bi-person-plus"></i>Tambah Data</h6></a>
        </div>
        

       
        <?php foreach ($user as $row) : ?>
        <div class="card">
    <div class="card-body">
    <div class="row navbar ml-auto">
    <div class="col-1"><?= $row["id_stand"] ?></div>
    <div class="col-5"><strong> <?= $row["nama_stand"] ?></strong></div>
                    <div class="col-4 "><a class="btn btn-success pl-4 pr-4" href="manager_detailstand.php?id_stand=<?= $row["id_stand"]; ?>">Detail</a>
                    <a class="btn btn-success pl-4 pr-4" href="manager_editstand.php?id_stand=<?= $row["id_stand"]; ?>">Edit</a>
                    <a class="btn btn-danger pl-4 pr-4 " href="c_managerstandHapus.php?id_stand=<?= $row["id_stand"]; ?>">Hapus</a></div></div>
    </div>
</div>
<?php endforeach; ?>
    </div>
</div>



<?php 
include 't_foot.html';
?>

