<?php
include 't_sidetambahMenu.php';
$user = mysqli_query($koneksi,"SELECT * FROM menu");
?>



<title>
    stand
</title>

<div class="main">
    <div class="jumbotron">
        <h1 class="pt-5">Data menu </h1>
        <table class="table table-hover">
        <thead class="table-dark">
            <tr>
            <th scope="col">ID MENU</th>
            <th scope="col">ID STAND</th>
            <th scope="col">KATEGORI</th>
            <th scope="col">NAMA</th>
            <th scope="col">HARGA</th>
            <th scope="col"></th>
            </tr>
        </thead>
                <?php foreach ($user as $row) : ?>
        <tbody>
            <tr>
            <td><?= $row["id_menu"] ?></td>
            <td><?= $row["id_sewastand"] ?></td>
            <td><?= $row["kategori_menu"] ?></td>
            <td><?= $row["nama_menu"] ?></td>
            <td><?= $row["harga_menu"] ?></td>
            <td>
                <a class="btn btn-primary" href="stand_tambahMenu.php?id_menu=<?=$row["id_menu"]; ?>">Tambah Menu</a>
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