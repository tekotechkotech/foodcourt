<?php
include 'config.php';
?>
 

 
<form action="index.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>No KTP</th>
		<th>Nama</th>
        <th>No Hp</th>
		<th>Email</th>
        <th>Saldo</th>
		<th> </th>

	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysql_query("select * from pengunjung where nama like '%".$cari."%'");				
	}else{
		$data = mysql_query("select * from pengunjung");		
	}
	
	?>
	

</table>