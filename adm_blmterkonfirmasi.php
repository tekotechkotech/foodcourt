<?php
include 't_side.php';
$user = mysqli_query($koneksi,"SELECT * FROM mhs where mhs_konfirmasi='belum'");
?>



<title>
    Admin Wisuda Mahasiswa
</title>

<div class="main">
    <div class="jumbotron">
        <h1 class="pt-5">Data Calon Wisuda</h1>
        <table class="table table-hover">
        <thead class="table-dark">
            <tr>
            <th scope="col">No.</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Jurusan</th>
            <th scope="col">IPK</th>
            <th scope="col">Judul Tugas Akhir</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <?php $i=1; ?>
                <?php foreach ($user as $row) : ?>
        <tbody>
            <tr>
            <th><?php echo $i ?></th>  
            <td><?= $row["mhs_nim"] ?></td>
            <td><?= $row["mhs_nama"] ?></td>
            <td><?= $row["mhs_jurusan"] ?></td>
            <td><?= $row["mhs_ipk"] ?></td>
            <td><?= $row["mhs_judulTA"] ?></td>
            <td>
                <a class="btn btn-primary" href="c_konfirmasi.php?mhs_nim=<?=$row["mhs_nim"]; ?>">Konfirmasi</a>
                <a class="btn btn-danger" href="c_mhshapus.php?mhs_nim=<?=$row["mhs_nim"]; ?>">Hapus</a></td>
            </tr>
            </tr>
        </tbody>
        <?php $i++; ?>
                <?php endforeach; ?>
        </table>
    </div>
</div>


<?php 
include 't_foot.html';
?>