<?php
include 't_sideManager.php';
?>

<title>
    TAMBAH KASIR
</title>

<div class="main">
    <div class="jumbotron p-5">
        <div class="container text-center p-5">
            <h1 class="text-center">TAMBAH KASIR</h1>
            <form action="C_managerTambahKasir.php" method="post">
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
                                    <input type="text" class="form-control" placeholder="username" name="username" Required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="password" class="form-control" placeholder="Password" name="password" id="textfield2" Required="">
                                </div>
                            </div>
                            <button type="submit" class=" btn btn-primary" name="button" id="button" value="Proses"><b>TAMBAH</b></button>
                        </form>
            </div>
        </div>
    </div>
    </div>

<?php include 't_foot.html'; ?>