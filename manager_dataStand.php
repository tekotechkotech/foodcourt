<?php
include 't_sideManager.php';
$user = mysqli_query($koneksi,"SELECT * FROM stand where jenis_stand!=''");
$us = mysqli_query($koneksi,"SELECT * FROM stand where jenis_stand=''");
?>

<title>
    Data Stand Foodcourt
</title>

<div class="main">
    <div class="jumbotron">
    
    <div class="navbar ml-auto">
        <h2 class="pt-3">Data Stand</h2>
        <a href="manager_tambahStand.php" class="btn btn-primary text-light " ><h6>Tambah Stand</h6></a>
        </div>
        <table class="table table-hover">
        <thead class="table-dark">
            <tr>
            <th scope="col">No. Stand</th>
            <th scope="col">Ukuran</th>
            <th scope="col">Nama Stand</th>
            <th scope="col">Jenis Stand</th>
            <th scope="col">Nama Penyewa Stand</th>
            <th scope="col">Harga Sewa Stand</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <?php foreach ($user as $row) : ?>
        <tbody>
            <tr>
            <td><?= $row["id_stand"] ?></td>
            <td><?= $row["ukuran_stand"] ?></td>
            <td><?= $row["nama_stand"] ?></td>
            <td><?= $row["jenis_stand"] ?></td>
            <td><?= $row["nama_penyewastand"] ?></td>
            <td>Rp. <?= $row["hargasewa_stand"] ?></td>
                <td>
                    <a class="btn btn-danger" href="c_managerStandnonaktif.php?id_stand=<?= $row["id_stand"]; ?>">Non-Aktifkan</a>
                </td>
            </tr>
        </tbody>
                <?php endforeach; ?>
                <?php foreach ($us as $r) : ?>
        <tbody>
            <tr>
            <td><?= $r["id_stand"] ?></td>
            <td><?= $r["ukuran_stand"] ?></td>
            <td  colspan="3" ><center>Stand tidak tersewa / Non-Aktif</center></td>
            <td>Rp. <?= $r["hargasewa_stand"] ?></td>
                <td>
                    <a class="btn btn-success" href="manager_aktifStand.php?id_stand=<?= $r["id_stand"]; ?>">Sewa / Aktifkan</a>
                    <a class="btn btn-danger" href="C_managerstandhapus.php?id_stand=<?= $r["id_stand"]; ?>">Hapus</a>
                </td>
            </tr>
        </tbody>
                <?php endforeach; ?>
        </table>




<?php 
include 't_foot.html';
?>

