<?php
include 't_sideKasir.php';
$user = mysqli_query($koneksi,"SELECT * FROM pengunjung");
?>



<title>
    Admin Wisuda Mahasiswa
</title>

<div class="main">
    <div class="jumbotron">
        <h1 class="pt-5">Data Pengunjung</h1>
        <table class="table table-hover">
        <thead class="table-dark">
            <tr>
            <th scope="col">No. ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Saldo</th>
            <th scope="col"></th>
            </tr>
        </thead>
                <?php foreach ($user as $row) : ?>
        <tbody>
            <tr>
            <td><?= $row["id_pengunjung"] ?></td>
            <td><?= $row["nama_pengunjung"] ?></td>
            <td><?= $row["saldo_pengunjung"] ?></td>
            <td>
                <a class="btn btn-primary" href="c_kasirTambahSaldoPengunjung.php?id_pengunjung=<?=$row["id_pengunjung"]; ?>">Tambah Saldo</a>
                <a class="btn btn-danger" href="c_kasirCairSaldoPengunjung.php?id_pengunjung=<?=$row["id_pengunjung"]; ?>">Cairkan Saldo</a></td>
            </tr></td>
            </tr>
        </tbody>
                <?php endforeach; ?>
        </table>
    </div>
</div>


<?php 
include 't_foot.html';
?>