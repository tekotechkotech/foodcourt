<?php
include 't_side.php';
$user = mysqli_query($koneksi,"SELECT * FROM mhs where mhs_konfirmasi='sudah'");
?>



<title>
    Admin Wisuda Mahasiswa
</title>

<div class="main">
    <div class="jumbotron ml-auto">
        <h1 class="pt-5">Data Wisudawan Terkonfirmasi</h1>
        <table class="table table-hover">
        <thead class="table-dark">
            <tr>
            <th scope="col">No.</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Jurusan</th>
            <th scope="col">IPK</th>
            <th scope="col">Judul Tugas Akhir</th>
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