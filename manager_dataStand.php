<?php
include 't_sideManager.php';
$user = mysqli_query($koneksi,"SELECT * FROM stand where status_stand='Aktif'");
$us = mysqli_query($koneksi,"SELECT * FROM stand where status_stand='Non-Aktif'");
?>

<title>
    Data Stand Foodcourt
</title>

<div class="main">
    <div class="jumbotron">
        <h2 class="pt-3">Data Stand</h2>
        
        
        <table class="table table-hover">
        <thead class="table-dark">
            <tr>
            <th scope="col">No. Stand</th>
            <th scope="col">Ukuran</th>
            <th scope="col">Nama Stand</th>
            <th scope="col">Jenis Stand</th>
            <th scope="col">Nama Penyewa Stand</th>
            <th scope="col">Harga Sewa Stand</th>
            <th scope="col">Status Stand</th>
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
            <td><?= $row["hargasewa_stand"] ?></td>
            <td><?= $row["status_stand"] ?></td>
                <td>
                    <a class="btn btn-primary" href="manager_detailstand.php?id_stand=<?= $row["id_stand"]; ?>">Edit</a>
                    <a class="btn btn-success" href="manager_pembayaran stand.php?id_stand=<?= $row["id_stand"]; ?>">Pembayaran</a>
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
            <td><?= $r["hargasewa_stand"] ?></td>
            <td><?= $r["status_stand"] ?></td>
                <td>
                    <a class="btn btn-success" href="manager_editstand.php?id_stand=<?= $r["id_stand"]; ?>">Sewa / Aktifkan</a>
                    <a class="btn btn-danger" href="manager_hapusstand.php?id_stand=<?= $r["id_stand"]; ?>">Hapus</a>
                </td>
            </tr>
        </tbody>
                <?php endforeach; ?>
        </table>




<?php 
include 't_foot.html';
?>

