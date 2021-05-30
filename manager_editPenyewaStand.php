<?php
include 't_sideManager.php';

$id_sewastand=$_GET['id_sewastand'];
$result= mysqli_query($koneksi, "SELECT * FROM sewastand where id_sewastand='$id_sewastand'");

$bio= mysqli_fetch_array($result);
$nama = $bio['nama_sewastand'];
$username = $bio['username_sewastand'];
$password = $bio['password_sewastand'];
$tempatlahir = $bio['tempatlahir_sewastand'];
$tanggallahir = $bio['tgllahir_sewastand'];
$jk = $bio['jk_sewastand'];
$agama = $bio['agama_sewastand'];
$alamat = $bio['alamat_sewastand'];
$email = $bio['email_sewastand'];
$no_hp = $bio['no_hp_sewastand'];
$foto = $bio['foto_sewastand'];
?>

<title>
    Edit Data Penyewa Stand
</title>

<div class="main">
    <div class="jumbotron p-5">
        <div class="container p-3">
            <h3 class="text-center p-4">Edit Data Penyewa Stand</h3>
            <form action="c_managerPenyewaStandEdit.php" method="post">
            <input type="hidden" name="id_sewastand" value="<?= $id_sewastand; ?> >

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" name="foto_kasir" for="inputGroupFile01">Pilih File</label>
                            </div>
                        </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" value="<?= $nama; ?>" placeholder="Nama Lengkap" name="nama_sewastand" Required>
                                </div>  
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" value="<?= $username; ?>" placeholder="Username" name="username_sewastand" Required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="password" class="form-control" value="<?= $password; ?>" placeholder="Password" name="password_sewastand" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" value="<?= $tempatlahir; ?>" placeholder="Tempat Lahir" name="tempatlahir_sewastand" Required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="date" class="form-control" value="<?= $tanggallahir; ?>" placeholder="Tanggal Lahir" name="tgllahir_sewastand" Required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <select class="form-control" value="<?= $jk; ?>" placeholder="Jenis Kelamin" name="jk_sewastand" Required="">
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <select class="form-control" value="<?= $agama; ?>" placeholder="Agama" name="agama_sewastand" Required="">
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
                                    <input type="text" class="form-control" value="<?= $email; ?>" placeholder="Email" name="email_sewastand" Required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" value="<?= $no_hp; ?>" placeholder="No. HP" name="no_hp_sewastand" Required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" value="<?= $alamat; ?>" placeholder="Alamat" name="alamat_sewastand" Required="">
                                </div>
                            </div>
                            <br><button type="submit" class=" btn btn-success" name="button" id="button" value="Proses"><b>Simpan</b></button>
                            <a class="btn btn-danger" href="manager_dataPenyewaStand.php">Batal</a>
                        </form>
            </div>
        </div>
    </div>
    </div>

<?php include 't_foot.html'; ?>