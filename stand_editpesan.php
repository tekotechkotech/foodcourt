<?php
include 't_sideStand.php';
?>

<title>
    TAMBAH PESANAN
</title>

<div class="main">
    <div class="jumbotron p-5">
        <div class="container text-center p-5">
            <h1 class="text-center">EDIT PESANAN</h1>
            <form action="c_standubahpesan.php" method="post">
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="id_pesanan" name="id_pesanan" Required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="id_pengunjung" name="id_pengunjung" Required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="id_menu" name="id_menu" Required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="nama" name="nama_menu" Required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="harga" name="harga_menu" Required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="jumlah" name="jumlah_menu" Required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="total" name="total_harga" Required>
                                </div>
                            </div>
                            <button type="submit" class=" btn btn-primary" name="button" id="button" value="Proses"><b>PROSES</b></button>
                            <a class="btn btn-danger" href="stand_datapesan.php">Batal</a>
                        </form>
            </div>
        </div>
    </div>
    </div>

<?php include 't_foot.html'; ?>