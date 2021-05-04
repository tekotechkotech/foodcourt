<?php
include 't_side.php';
$user = mysqli_query($koneksi,"SELECT * FROM adm");
?>



<title>
    Admin Wisuda Mahasiswa
</title>

<div class="main">
    <div class="jumbotron">
        <div class="container ml-auto">
        <table class="table">
        <h1 class="pt-5">Data Admin</h1>
        <thead class="table-dark">
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">username</th>
            <th scope="col">Email</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <?php $i=1; ?>
                <?php foreach ($user as $row) : ?>
        <tbody>
            <tr>
            <th><?php echo $i ?></th>  
            <td><?= $row["adm_nama"] ?></td>
            <td><?= $row["adm_username"] ?></td>
            <td><?= $row["adm_email"] ?></td>
            <td>
                <a class="btn btn-danger" href="c_admhapus.php?adm_id=<?=  $row["adm_id"]; ?>">Hapus</a></td>
            </tr>
        </tbody>
        <?php $i++; ?>
                <?php endforeach; ?>
        </table>
        <a class="btn btn-primary pl-5 pr-5" href="adm_tambah.php">Tambah</a>
    </div>
    </div>
</div>


<?php 
include 't_foot.html';
?>