<?php
include 't_sideStand.php';
?>

<title>
    TAMBAH MENU
</title>

<div class="main">
    <div class="jumbotron p-5">
        <div class="container text-center p-5">
            <h1 class="text-center">EDIT MENU</h1>
            <form action="c_standUBAH.php" method="post">
                            <div class="form-row">
                                <div class="form-group col">
                                
                                    <input type="text" class="form-control" placeholder="id_menu" name="id_menu" Required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="id_stand" name="id_sewastand" Required>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                    <select class="form-control" placeholder="kategori" name="kategori_menu" Required="">
                                    <option>makanan</option>
                                    <option>minuman</option>
                                    </select>
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
                            <button type="submit" class=" btn btn-primary" name="button" id="button" value="Proses"><b>EDIT</b></button>
                            <a class="btn btn-danger" href="stand_datamenu.php">Batal</a>
                        </form>
            </div>
        </div>
    </div>
    </div>

<?php include 't_foot.html'; ?>