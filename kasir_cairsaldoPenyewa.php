<?php
include 't_sidekasir.php';
?>

<title>
    CAIR SALDO PENYEWA
</title>


<div class="main">
    <div class="jumbotron p-5">
        <div class="container text-center p-5">
            <h1 class="text-center">CAIR SALDO PENYEWA</h1>
            <form action="C_kasirCairSaldoPenyewa.php" method="post">
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="id saldo keluar" name="id_cairsaldo" Required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="id penyewa" name="id_penyewa" Required>
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