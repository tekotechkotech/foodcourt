<?php
include 't_sideCEO.php';
$user = mysqli_query($koneksi,"SELECT * FROM sewastand");
?>

<title>
    CEO Foodcourt
</title>

<div class="main">
    <div class="jumbotron ml-auto">
        <div class="navbar ml-auto">
        <h2 class="pt-3">Data Penyewa Stand</h2>
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
                    <a class="btn btn-success" href="ceo_detailPenyewaStand.php?id_sewastand=<?= $row["id_sewastand"]; ?>">Detail</a>
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

