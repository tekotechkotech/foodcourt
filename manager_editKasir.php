<?php
include 't_sideManager.php';

$id_penyewastand=$_GET['id_penyewastand'];
$result= mysqli_query($koneksi, "SELECT * FROM penyewastand where id_penyewastand='$id_penyewastand'");

$bio= mysqli_fetch_array($result);
$nama = $bio['nama_penyewastand'];
$username = $bio['username_penyewastand'];
$password = $bio['password_penyewastand'];
$tempatlahir = $bio['tempatlahir_penyewastand'];
$tanggallahir = $bio['tgllahir_penyewastand'];
$jk = $bio['jk_penyewastand'];
$agama = $bio['agama_penyewastand'];
$alamat = $bio['alamat_penyewastand'];
$email = $bio['email_penyewastand'];
$no_hp = $bio['no_hp_penyewastand'];
$foto = $bio['foto_penyewastand'];
?>

<title>
    Edit Data penyewastand
</title>

<div class="main">
    <div class="jumbotron p-5">
        <div class="container p-3">
            <h3 class="text-center p-4">Edit Data penyewastand</h3>
            <form action="C_managerpenyewastandEdit.php" method="post">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" name="foto_penyewastand" for="inputGroupFile01">Pilih File</label>
                            </div>
                        </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" value="<?= $nama; ?>" placeholder="Nama Lengkap" name="nama_penyewastand" Required>
                                </div>  
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" value="<?= $username; ?>" placeholder="Username" name="username_penyewastand" Required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="password" class="form-control" value="<?= $password; ?>" placeholder="Password" name="password_penyewastand" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" value="<?= $tempatlahir; ?>" placeholder="Tempat Lahir" name="tempatlahir_penyewastand" Required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="date" class="form-control" value="<?= $tanggallahir; ?>" placeholder="Tanggal Lahir" name="tgllahir_penyewastand" Required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <select class="form-control" value="<?= $jk; ?>" placeholder="Jenis Kelamin" name="jk_penyewastand" Required="">
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <select class="form-control" value="<?= $agama; ?>" placeholder="Agama" name="agama_penyewastand" Required="">
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
                                    <input type="text" class="form-control" value="<?= $email; ?>" placeholder="Email" name="email_penyewastand" Required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" value="<?= $no_hp; ?>" placeholder="No. HP" name="no_hp_penyewastand" Required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" value="<?= $alamat; ?>" placeholder="Alamat" name="alamat_penyewastand" Required="">
                                </div>
                            </div>
                            <br><button type="submit" class=" btn btn-success" name="button" id="button" value="Proses"><b>Simpan</b></button>
                            <a class="btn btn-danger" href="manager_datapenyewastand.php">Batal</a>
                        </form>
            </div>
        </div>
    </div>
    </div>

<?php include 't_foot.html'; ?>