<?php
include 't_sideManager.php';

$id_manager=$_GET['id_manager'];
$result= mysqli_query($koneksi, "SELECT * FROM manager where id_manager='$id_manager'");

$bio= mysqli_fetch_array($result);
$nama = $bio['nama_manager'];
$username = $bio['username_manager'];
$password = $bio['password_manager'];
$tempatlahir = $bio['tempatlahir_manager'];
$tanggallahir = $bio['tgllahir_manager'];
$jk = $bio['jk_manager'];
$agama = $bio['agama_manager'];
$alamat = $bio['alamat_manager'];
$email = $bio['email_manager'];
$no_hp = $bio['no_hp_manager'];
$foto = $bio['foto_manager'];
?>

<title>
    Edit Data Kasir
</title>

<div class="main">
    <div class="jumbotron p-5">
        <div class="container p-3">
            <h3 class="text-center p-4">Edit Data Kasir</h3>
            <form action="c_ceoEditManager.php" method="post">
                <input type="hidden" name="id_manager" value="<?= $id_manager; ?>>
                
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" name="foto_manager" for="inputGroupFile01">Pilih File</label>
                            </div>
                        </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" value="<?= $nama; ?>" placeholder="Nama Lengkap" name="nama_manager" Required>
                                </div>  
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" value="<?= $username; ?>" placeholder="Username" name="username_manager" Required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="password" class="form-control" value="<?= $password; ?>" placeholder="Password" name="password_manager" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" value="<?= $tempatlahir; ?>" placeholder="Tempat Lahir" name="tempatlahir_manager" Required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="date" class="form-control" value="<?= $tanggallahir; ?>" placeholder="Tanggal Lahir" name="tgllahir_manager" Required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <select class="form-control" value="<?= $jk; ?>" placeholder="Jenis Kelamin" name="jk_manager" Required="">
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <select class="form-control" value="<?= $agama; ?>" placeholder="Agama" name="agama_manager" Required="">
                                    <option>Islam</option>
                                    <option>Kristen</option>
                                    <option>Hindu</option>
                                    <option>Budha</option>
                                    <option>Konghuchu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" value="<?= $email; ?>" placeholder="Email" name="email_manager" Required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" value="<?= $no_hp; ?>" placeholder="No. HP" name="no_hp_manager" Required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" value="<?= $alamat; ?>" placeholder="Alamat" name="alamat_manager" Required="">
                                </div>
                            </div>
                            <br><button type="submit" class=" btn btn-success" name="button" id="button" value="Proses"><b>Simpan</b></button>
                            <a class="btn btn-danger" href="ceo_dataManager.php">Batal</a>
                        </form>
            </div>
        </div>
    </div>
    </div>

<?php include 't_foot.html'; ?>