<?php
include 't_sideManager.php';
$user = mysqli_query($koneksi,"SELECT * FROM sewastand");
?>

<title>
    Manager Foodcourt
</title>

<div class="main">
    <div class="jumbotron ml-auto">
        <div class="navbar ml-auto">
        <h2 class="pt-3">Data Penyewa Stand</h2>
        <a href="manager_tambahPenyewaStand.php" class="btn btn-primary text-light " ><h6><i class="bi bi-person-plus"></i>Tambah Data</h6></a>
        </div>
        <table class="table table-hover">
        <thead class="table-dark">
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col"></th>
            </tr>
        </thead>
                <?php foreach ($user as $row) : ?>
        <tbody>
            <tr>
            <td><?= $row["id_sewastand"] ?></td>
            <td><?= $row["nama_sewastand"] ?></td>
                <td>
                    <a class="btn btn-success" href="manager_detailPenyewaStand.php?id_sewastand=<?= $row["id_sewastand"]; ?>">Detail</a>
                    <a class="btn btn-success" href="manager_editPenyewaStand.php?id_sewastand=<?= $row["id_sewastand"]; ?>">Edit</a>
                    <a class="btn btn-danger " href="c_managerPenyewaStandHapus.php?id_sewastand=<?= $row["id_sewastand"]; ?>">Hapus</a>
                </td>
            </tr>
        </tbody>
                <?php endforeach; ?>
        </table>
    </div>
</div>

<?php 
include 't_foot.html';
?>

