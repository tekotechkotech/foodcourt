<?php
include 't_sideManager.php';
?>

<title>
    Edit Data Penyewa Stand
</title>

<div class="main">
    <div class="jumbotron p-5">
        <div class="container p-3">
            <h3 class="text-center p-4">Tambah Penyewa Stand</h3>
            <form action="C_managerPenyewaStandTambah.php" method="post">
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
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control"  placeholder="Nama Lengkap" name="nama_penyewastand" Required>
                                    <input type="hidden"  name="id_penyewastand">
                                </div>  
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control"  placeholder="Tempat Lahir" name="tempatlahir_penyewastand" Required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="date" class="form-control"  placeholder="Tanggal Lahir" name="tgllahir_penyewastand" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <select class="form-control" placeholder="Jenis Kelamin" name="jk_penyewastand" Required="">
                                    <option selected>Jenis Kelamin</option>
                                    <option value="Laki-laki" >Laki-laki</option>
                                    <option value="Perempuan" >Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <select class="form-control"  placeholder="Agama" name="agama_penyewastand" Required="">
                                    <option selected>Agama</option>
                                    <option value="Islam" >Islam</option>
                                    <option value="Kristen" >Kristen</option>
                                    <option value="Hindu" >Hindu</option>
                                    <option value="Buddha" >Buddha</option>
                                    <option value="Konghuchu" >Konghuchu</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Email" name="email_penyewastand" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" placeholder="No. HP" name="no_hp_penyewastand" Required="">
                                </div>
                                <div class="form-group col-md-9">
                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat_penyewastand" Required="">
                                </div>
                            </div>
                            <br><button type="submit" class=" btn btn-success" name="button" id="button" value="Proses"><b>Tambah</b></button>
                            <a class="btn btn-danger" href="manager_datapenyewastand.php">Batal</a>
                        </form>
            </div>
        </div>
    </div>
    </div>

<?php include 't_foot.html'; ?>