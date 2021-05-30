<?php
include 't_sidekasir.php';
?>

<title>
    CAIR SALDO PENGUNJUNG
</title>


<div class="main">
    <div class="jumbotron p-5">
        <div class="container text-center p-5">
            <h1 class="text-center">CAIR SALDO PENGUNJUNG</h1>
            <form action="C_kasirCairSaldoPengunjung.php" method="post">
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="id cair saldo" name="id_cairsaldo" Required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="id pengunjung" name="id_pengunjung" Required>
                                </div>
                                </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="saldo keluar" name="saldo_keluar" Required>
                                </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary center-block" name="button" id="button" value="Proses"><b>CAIRKAN</b></button>
                        </form>
            </div>
        </div>
    </div>
    </div>

<?php include 't_foot.html'; ?>