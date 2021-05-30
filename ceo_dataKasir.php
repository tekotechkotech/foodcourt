<?php
include 't_sideCEO.php';
$user = mysqli_query($koneksi,"SELECT * FROM kasir");
?>

<title>
    CEO Foodcourt
</title>

<div class="main">
    <div class="jumbotron ml-auto">
        <div class="navbar ml-auto">
        <h2 class="pt-3">Data Kasir</h2>
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
            <td><?= $row["id_kasir"] ?></td>
            <td><?= $row["nama_kasir"] ?></td>
                <td>
                    <a class="btn btn-success" href="ceo_detailKasir.php?id_kasir=<?= $row["id_kasir"]; ?>">Detail</a>
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

