<?php
include 't_head.html';
include 't_topPage.html';
include 't_login.php';

$mhs_nim=$_SESSION['mhs_nim'];
$result= mysqli_query($koneksi, "SELECT * FROM mhs where mhs_nim='$mhs_nim'");

$bio= mysqli_fetch_array($result);
$nama=$bio["mhs_nama"];
$email=$bio["mhs_email"];
$jurusan=$bio["mhs_jurusan"];
$password=$bio["mhs_password"];
$nim=$bio["mhs_nim"];
$ipk=$bio["mhs_ipk"];
$TA=$bio["mhs_judulTA"];
// $KO=$bio["mhs_konfirmasi"];
// $id=$bio["id"];

// $hp=$bio["hp"];
?>

<title>
    Login
</title>

<div class="main">
    <div class="jumbotron p-5">
        <div class="container p-5">
            <h1 class="text-center">UBAH PROFIL</h1>
            <div class="jumbotron p-5">
            <form action="c_mhsubah.php" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" placeholder="<?=$nim?>" name="NIM" id="textfield0" Required="" disabled>
                                </div>
                                <div class="form-group col-md-5">
                                    <input type="text" class="form-control" placeholder="<?=$nama?>" name="nama" id="textfield" Required="">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="password" class="form-control" placeholder="*******" name="password" id="textfield2" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="email" class="form-control" name="email" placeholder="<?=$email?>" Required="">    
                                </div>
                                <div class="form-group col-md-4">
                                <input type="text" class="form-control" placeholder="<?=$jurusan?>" name="jurusan" id="textfield3" Required="" >
                                </div>
                                <div class="form-group col-md-4">
                                <input type="text" class="form-control" placeholder="<?=$ipk?>" name="IPK" id="textfield3" Required="" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                <input type="text" class="form-control" placeholder="<?=$TA?>" name="judulTA" id="textfield3" Required="" >
                                </div>
                            </div>
                            <button type="submit" class="btn-block btn btn-primary" name="button" id="button" value="Proses"><b>UBAH</b></button>                            
                        </form>
            </div>
        </div>
    </div>
    </div>
<?php include 't_foot.html'; ?>