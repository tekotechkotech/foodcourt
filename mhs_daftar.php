<?php include 't_head.html'; ?>

<title>
    Login
</title>

<?php include 't_topLogin.html'; ?>

    <div class="jumbotron p-5">
        <div class="container p-5">
            <h1 class="text-center">MENDAFTAR CALON WISUDA</h1>
            <div class="jumbotron p-5">
            <form action="C_mhsdaftar.php" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <input type="text" class="form-control" placeholder="NIM" name="NIM" id="textfield0" Required="">
                                </div>
                                <div class="form-group col-md-5">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" id="textfield" Required="">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="password" class="form-control" placeholder="Password" name="password" id="textfield2" Required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <input type="email" class="form-control" name="email" placeholder="Email" Required="">    
                                </div>
                                <div class="form-group col-md-4">
                                <input type="text" class="form-control" placeholder="jurusan" name="jurusan" id="textfield3" Required="" >
                                </div>
                                <div class="form-group col-md-4">
                                <input type="text" class="form-control" placeholder="IPK" name="IPK" id="textfield3" Required="" >
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                <input type="text" class="form-control" placeholder="Judul TA" name="judulTA" id="textfield3" Required="" >
                                </div>
                            </div>
                            <button type="submit" class="btn-block btn btn-primary" name="button" id="button" value="Proses"><b>DAFTAR</b></button>
                            
                        </form>
            </div>
        </div>
    </div>

<?php include 't_foot.html'; ?>