<?php
include 't_sideKasir.php';
?>

<title>
    TAMBAH PENGUNJUNG
</title>

<div class="main">
    <div class="jumbotron p-5">
        <div class="container text-center p-5">
            <h1 class="text-center">TAMBAH PENGUNJUNG</h1>
            <form action="C_kasirTambahPengunjung.php" method="post">
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="NO. KTP" name="id_pengunjung" Required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="Nama" name="nama_pengunjung" Required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="No Hp" name="no_hp_pengunjung" Required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="email" class="form-control" placeholder="Email" name="email_pengunjung" id="textfield2" Required="">
                                </div>
                                </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="Saldo" name="saldo_pengunjung" id="textfield2" Required="">
                                </div>
                            </div>
                            <button type="submit" class=" btn btn-primary" name="button" id="button" value="Proses"><b>TAMBAH</b></button>
                        </form>
            </div>
        </div>
    </div>
    </div>

<?php include 't_foot.html'; ?>