<?php
include 't_sideKasir.php';
$user = mysqli_query($koneksi,"SELECT * FROM Menu");
?>



<title>
    Admin Wisuda Mahasiswa
</title>

<div class="main">
    <div class="jumbotron">
        <h1 class="pt-5">Data Menu</h1>
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
            <td><?= $row["id_menu"] ?></td>
            <td><?= $row["nama_menu"] ?></td>
            <td><?= $row["harga_menu"] ?></td>
            <td>
                <a class="btn btn-primary" href="c_kasirTambahSaldoPengunjung.php?id_menu=<?=$row["id_menu"]; ?>">Edit</a>
                <a class="btn btn-danger" href="c_kasirCairSaldoPengunjung.php?id_menu=<?=$row["id_menu"]; ?>">Hapus</a></td>
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