<?php
include 't_sideStand.php';
$user = mysqli_query($koneksi,"SELECT * FROM pemesanan");
?>



<title>
    stand
</title>

<div class="main">
    <div class="jumbotron">
        <h1 class="pt-5">Data pesanan </h1>
        <form action="stand_riwayatpenjualan.php">
        <table class="table table-hover">
        <thead class="table-dark">
            <tr>
            <th scope="col">ID PESANAN</th>
            <th scope="col">ID PENGUNJUNG</th>
            <th scope="col">ID MENU</th>
            <th scope="col">NAMA</th>
            <th scope="col">HARGA</th>
            <th scope="col">jumlah</th>
            <th scope="col">total</th>
            <th scope="col"></th>
            </tr>
        </thead>
                <?php foreach ($user as $row) : ?>
        <tbody>
            <tr>
            <td><?= $row["id_pesanan"] ?></td>
            <td><?= $row["id_pengunjung"] ?></td>
            <td><?= $row["id_menu"] ?></td>
            <td><?= $row["nama_menu"] ?></td>
            <td><?= $row["harga_menu"] ?></td>
            <td><?= $row["jumlah_menu"] ?></td>
            <td><?= $row["total_harga"] ?></td>
            <td>
  
     
  

   <input type="checkbox" value="enter">

                <a class="btn btn-primary" href="c_standhapuspesan.php?id_pesanan=<?=$row["id_pesanan"]; ?>">hapus</a>
                <a class="btn btn-primary" href="stand_editpesan.php?id_pesanan=<?=$row["id_pesanan"]; ?>">edit</a>
            </tr></td>
            </tr>
        
        </tbody>
      
                <?php endforeach; ?>
        </table>
    
        <div class="text-center">  
        <input type="submit" value="confirm">
        </form>
        
        </div>
        
    </div>
</div>