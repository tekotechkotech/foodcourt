<?php
include 't_login.php';
include 't_head.html';
include 't_topPage.html';

$mhs_username=$_SESSION['mhs_username'];
// $nama=$_SESSION['adm_nama'];
$result= mysqli_query($koneksi, "SELECT * FROM mhs where mhs_username='$mhs_username'");

$bio= mysqli_fetch_array($result);
$nama=$bio["mhs_nama"];
$email=$bio["mhs_email"];
$jurusan=$bio["mhs_jurusan"];
$nim=$bio["mhs_nim"];
$ipk=$bio["mhs_ipk"];
$TA=$bio["mhs_judulTA"];
$KO=$bio["mhs_konfirmasi"];
// $id=$bio["id"];

// $hp=$bio["hp"];
?>


<title>
    Wisuda Mahasiswa
</title>

    <div class="jumbotron" >   
        
    
    <h2 class="pt-5 pl-5">Selamat datang, <h1 class="pl-5"><b><?= $nama?></b></h1></h2><br><br>
        
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col">
                        <p class="pl-5">Nomor Induk Mahasiswa</div><div class="col"> : <b><?= $nim?></b></p>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col">
                        <p class="pl-5">email   </div><div class="col"> : <b><?= $email?></b></p>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col">
                        <p class="pl-5">jurusan   </div><div class="col"> : <b><?= $jurusan?></b></p>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col">
                        <p class="pl-5">ipk   </div><div class="col"> : <b><?= $ipk?></b></p>
                    </div>
                </div>
                    
                <div class="row">
                    <div class="col">
                        <p class="pl-5">judul Tugas Akhir     </div><div class="col"> : <b><?= $TA?></b></p>
                    </div>
                </div>
                        <div class="container navbar-nav">
                            <a class="btn btn-primary" href="mhs_ubah.php?mhs_nim=<?=$bio["mhs_nim"]; ?>">Edit</a>
                      </div>
            </div>
            <div class="col-md-6">
                <?php
                $c="btn btn-primary";
                if ($KO=="sudah") {
                    echo "<h1>Pendaftaran Wisuda sudah dikonfirmasi oleh admin</h1><br>
                    <p>silahkan masuk grup WhatsApp untuk informasi lebih lanjut</p><a class=btn href=https://chat.whatsapp.com/DPGFPoCOwynBp27dLjFlPG><b>Masuk Grup WhatsApp</b></a>";
                } else {
                    echo "Pendaftaran Wisuda belum dikonfirmasi, silahkan menghubungi admin untuk segera melakukaan konfirmasi";
                }
                ?>
                
            </div>
        </div>
        </div>
<?php 

include 't_foot.html';
?>