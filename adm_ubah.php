<?php
include 't_side.php';

$username=$_SESSION['username'];
$adm_id=$_SESSION['adm_id'];
// $nama=$_SESSION['adm_nama'];
$result= mysqli_query($koneksi, "SELECT * FROM adm where adm_id='$adm_id'");

$bio= mysqli_fetch_array($result);
$nama=$bio["adm_nama"];
$username=$bio["adm_username"];
$email=$bio["adm_email"];
// $id=$bio["id"];

?>

<title>
    Login
</title>

<div class="main">
    <div class="jumbotron p-5">
        <div class="container p-5">
            <h1 class="text-center">EDIT</h1>
            <div class="jumbotron p-5">
            <form action="C_admubah.php" method="post">
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="<?=$nama?>" name="nama" id="textfield0" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="<?=$username?>" name="username" id="textfield" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="email" class="form-control" name="email" placeholder="<?=$email?>" Required="">    
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="password" class="form-control" placeholder="**********" name="password" id="textfield2" Required="">
                                </div>
                            </div>
                            <button type="submit" class=" btn btn-primary" name="button" id="button" value="Proses"><b>UBAH</b></button>
                        </form>
            </div>
        </div>
    </div>
    </div>
<?php include 't_foot.html'; ?>