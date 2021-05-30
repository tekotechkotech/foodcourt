<?php
include 't_sideCEO.php';
?>

<title>
    TAMBAH DATA MANAGER
</title>

<div class="main">
    <div class="jumbotron p-5">
        <div class="container p-3">
            <h3 class="text-center p-4">Tambah Data Manager</h3>
            <form action="c_ceoTambahManager.php" method="post">
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
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_manager" Required>
                                </div>  
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" placeholder="Username" name="username_manager" Required>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="password" class="form-control" placeholder="Password" name="password_manager" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempatlahir_manager" Required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgllahir_manager" Required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <select class="form-control" placeholder="Jenis Kelamin" name="jk_manager" Required="">
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <select class="form-control" placeholder="Agama" name="agama_manager" Required="">
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
                                    <input type="text" class="form-control" placeholder="Email" name="email_manager" Required="">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" placeholder="No. HP" name="no_hp_manager" Required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat_manager" Required="">
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