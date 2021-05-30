<?php
include 't_sideCEO.php';
$user = mysqli_query($koneksi,"SELECT * FROM manager");
?>

<title>
    Ceo Foodcourt
</title>

<div class="main">
    <div class="jumbotron ml-auto">
        <div class="navbar ml-auto">
        <h2 class="pt-3">Data Manager</h2>
        <a href="ceo_TambahManager.php" class="btn btn-primary text-light " ><h6><i class="bi bi-person-plus"></i>Tambah Data</h6></a>
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
            <td><?= $row["id_manager"] ?></td>
            <td><?= $row["nama_manager"] ?></td>
                <td>
                    <a class="btn btn-success" href="ceo_detailManager.php?id_manager=<?= $row["id_manager"]; ?>">Detail</a>
                    <a class="btn btn-success" href="ceo_editManager.php?id_manager=<?= $row["id_manager"]; ?>">Edit</a>
                    <a class="btn btn-danger " href="c_ceoHapusManager.php?id_manager=<?= $row["id_manager"]; ?>">Hapus</a>
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

