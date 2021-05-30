<?php
include 't_sideKasir.php';
$user = mysqli_query($koneksi,"SELECT * FROM pengunjung");
?>

 
<title>
    DATA PENGUNJUNG
</title>

<div class="main">
    <div class="jumbotron">
        <h1 class="pt-5">Data Pengunjung</h1>
        <table class="table table-hover">
        <thead class="table-dark">

        <form action="kasir_dataPengungjung.php" method="get">
	<label>Cari : </label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
            
            <th scope="col">No.KTP</th>
            <th scope="col">Nama</th>
            <th scope="col">No Hp</th>
            <th scope="col">Email</th>
            <th scope="col">Saldo</th>
            <th scope="col"></th>
            </>
        </thead>
                <?php foreach ($user as $row) :  ?>
        <tbody>
            <tr>
            <td><?= $row["id_pengunjung"] ?></td>
            <td><?= $row["nama_pengunjung"] ?></td>
            <td><?= $row["no_hp_pengunjung"] ?></td>
            <td><?= $row["email_pengunjung"] ?></td>
            <td><?= $row["saldo_pengunjung"] ?></td>
            <td>
                <a class="btn btn-primary" href="kasir_tambahsaldoPengunjung.php?id_pengunjung=<?=$row["id_pengunjung"]; ?>">Tambah Saldo</a>
                <a class="btn btn-danger" href="kasir_cairsaldoPengunjung.php?id_pengunjung=<?=$row["id_pengunjung"]; ?>">Cairkan Saldo</a></td>
            </tr></td>
            </tr>

            </tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysql_query("select * from pengunjung where nama_pengunjung like '%".$cari."%'");				
	}else{
		$data = mysql_query("select * from pengunjung");		
	}
    ?>
    

        </tbody>
                <?php endforeach; ?>
        </table>
    </div>
</div>


<?php 
include 't_foot.html';
?>