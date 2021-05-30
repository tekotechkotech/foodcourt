<?php
include 't_sideKasir.php';
$user = mysqli_query($koneksi,"SELECT * FROM detailsaldopengunjung");
?>

 
<title>
    DETAIL SALDO PENGUNJUNG
</title>

<div class="main">
    <div class="jumbotron">
        <h1 class="pt-5">DETAIL SALDO PENGUNJUNG</h1>
        <table class="table table-hover">
        <thead class="table-dark">
            <tr>
            <th scope="col">Id Detail</th>
            <th scope="col">Id Pengunjung</th>
            <th scope="col">Id Sewa Stand</th>
            <th scope="col">Saldo Masuk</th>
            <th scope="col">Saldo Keluar</th>
            <th scope="col">Tgl Transaksi</th>
            <th scope="col">Jam Transaksi</th>
            </tr>
        </thead>
                <?php foreach ($user as $row) : ?>
        <tbody>
            <tr>
            <td><?= $row["id_detail"] ?></td>
            <td><?= $row["id_pengunjung"] ?></td>
            <td><?= $row["id_sewastand"] ?></td>
            <td><?= $row["saldo_masuk"] ?></td>
            <td><?= $row["saldo_keluar"] ?></td>
            <td><?= $row["tgl_transaksi"] ?></td>
            <td><?= $row["jam_transaksi"] ?></td>
            <td>
                
            </tr>
        </tbody>
                <?php endforeach; ?>
        </table>
    </div>
</div>


<?php 
include 't_foot.html';
?>