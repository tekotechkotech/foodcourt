<?php
include 't_sideManager.php';
$user = mysqli_query($koneksi,"SELECT * FROM penyewastand");
?>

<title>
    Data Penyewa penyewastand Foodcourt
</title>

<div class="main">
    <div class="jumbotron">
        <div class="navbar ml-auto">
        <h2 class="pt-3">Data Penyewa penyewastand</h2>
        <a href="manager_tambahpenyewastand.php" class="btn btn-primary text-light " ><h6><i class="bi bi-person-plus"></i>Tambah Data</h6></a>
        </div>
        <!-- <table class="table table-hover">
        <thead class="table-dark">
            <tr>
            <th scope="col">No. ID</th>
            <th scope="col">Nama</th>
            <th scope="col"></th>
            </tr>
        </thead>
                <?php foreach ($user as $row) : ?>
        <tbody>
            <tr>
            <td><?= $row["id_penyewastand"] ?></td>
            <td><?= $row["nama_penyewastand"] ?></td>
                <td>
                    <a class="btn btn-success" href="manager_detailpenyewastand.php?id_penyewastand=<?= $row["id_penyewastand"]; ?>">Detail</a>
                    <a class="btn btn-success" href="manager_editpenyewastand.php?id_penyewastand=<?= $row["id_penyewastand"]; ?>">Edit</a>
                    <a class="btn btn-danger " href="c_managerpenyewastandHapus.php?id_penyewastand=<?= $row["id_penyewastand"]; ?>">Hapus</a>
                </td>
            </tr>
        </tbody>
                <?php endforeach; ?>
        </table> -->

       
        <?php foreach ($user as $row) : ?>
        <div class="card">
    <div class="card-body">
    <div class="row navbar ml-auto">
    <div class="col-1"><?= $row["id_penyewastand"] ?></div>
    <div class="col-5"><strong> <?= $row["nama_penyewastand"] ?></strong></div>
                    <div class="col-4 "><a class="btn btn-success pl-4 pr-4" href="manager_detailpenyewastand.php?id_penyewastand=<?= $row["id_penyewastand"]; ?>">Detail</a>
                    <a class="btn btn-success pl-4 pr-4" href="manager_editpenyewastand.php?id_penyewastand=<?= $row["id_penyewastand"]; ?>">Edit</a>
                    <a class="btn btn-danger pl-4 pr-4 " href="c_managerpenyewastandHapus.php?id_penyewastand=<?= $row["id_penyewastand"]; ?>">Hapus</a></div></div>
    </div>
</div>
<?php endforeach; ?>
    </div>
</div>



<?php 
include 't_foot.html';
?>

