<?php
include 't_sidekasir.php';
?>

<title>
    TAMBAH SALDO PENGUNJUNG
</title>


<div class="main">
    <div class="jumbotron p-5">
        <div class="container text-center p-5">
            <h1 class="text-center">TAMBAH SALDO PENGUNJUNG</h1>
            <form action="C_kasirTambahSaldoPengunjung.php" method="post">


</div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="id tambah saldo" name="id_tambahsaldo" Required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="id pengunjung" name="id_pengunjung" Required>
                                </div>
                                </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="saldo masuk" name="saldo_masuk" Required>
                                </div>
                            
                            </div>
                            <button type="submit" class=" btn btn-primary" name="button" id="button" value="Proses"><b>TAMBAH</b></button>
                        </form>
            </div>
        </div>
    </div>
    </div>
<?php include 't_foot.html'; ?>