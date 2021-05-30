<?php
include 't_sideCEO.php';
$user = mysqli_query($koneksi,"SELECT * FROM stand");
?>

<title>
    CEO Foodcourt
</title>

<div class="main">
    <div class="jumbotron ml-auto">
        <div class="navbar ml-auto">
        <h2 class="pt-3">Data Stand</h2>
        <a href="CEO_tambahstand.php" class="btn btn-primary text-light " ><h6><i class="bi bi-person-plus"></i>Tambah Data</h6></a>
        </div>
        <table class="table table-hover">
        <thead class="table-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col"></th>
            </tr>
        </thead>
                <?php foreach ($user as $row) : ?>
        <tbody>
            <tr>
            <td><?= $row["id_stand"] ?></td>
            <td><?= $row["nama_stand"] ?></td>
                <td>
                    <a class="btn btn-success" href="CEO_detailstand.php?id_stand=<?= $row["id_stand"]; ?>">Detail</a>
                    <a class="btn btn-success" href="CEO_editstand.php?id_stand=<?= $row["id_stand"]; ?>">Edit</a>
                    <a class="btn btn-danger " href="c_CEOstandHapus.php?id_stand=<?= $row["id_stand"]; ?>">Hapus</a>
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

