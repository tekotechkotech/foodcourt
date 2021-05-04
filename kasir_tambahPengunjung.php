<?php
include 't_sidekasir.php';
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
                                    <input type="text" class="form-control" placeholder="NO. ID" name="id" Required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="nama" name="nama" Required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="Saldo" name="saldo" Required>
                                </div>
                            </div>
                            <button type="submit" class=" btn btn-primary" name="button" id="button" value="Proses"><b>TAMBAH</b></button>
                        </form>
            </div>
        </div>
    </div>
    </div>

<?php include 't_foot.html'; ?>