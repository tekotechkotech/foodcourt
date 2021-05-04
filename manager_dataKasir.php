<?php
include 't_sideManager.php';
$user = mysqli_query($koneksi,"SELECT * FROM kasir");
?>



<title>
    Admin Wisuda Mahasiswa
</title>

<div class="main">
    <div class="jumbotron ml-auto">
        <h1 class="pt-5">Data Kasir</h1>
        <a href="manager_tambahKasir.php" class="btn btn-primary">Tambah Kasir</a>
        <table class="table table-hover">
        <thead class="table-dark">
            <tr>
            <th scope="col">No. ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col"></th>
            </tr>
        </thead>
                <?php foreach ($user as $row) : ?>
        <tbody>
            <tr>
            <td><?= $row["id_kasir"] ?></td>
            <td><?= $row["nama_kasir"] ?></td>
            <td><?= $row["username_kasir"] ?></td>
            <td>
                <a class="btn btn-danger" href="c_managerKasirHapus.php?mhs_nim=<?=$row["id_kasir"]; ?>">Hapus</a></td>
            </tr>
            </tr>
        </tbody>
                <?php endforeach; ?>
        </table>
    </div>
</div>


<?php 
include 't_foot.html';
?>