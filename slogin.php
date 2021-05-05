<?php include 't_head.html'; ?>

<title>
    Login
</title>

<?php include 't_topLogin.html'; ?>

    <div class="jumbotron p-5">
        <div class="container p-5">
            <h1 class="text-center">LOGIN SEBAGAI MAHASISWA</h1>
            <div class="jumbotron p-5 text-center">
                <form action="c_mhslogin.php" method="POST">
                
                    <div class="mb-3 col-6">
                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                    </div>
                    <div class="mb-3 col-6">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>

                    <div class="mb-3 col-6">
                        <select class="form-control form-select" placeholder="Level"  name="level">
                        <option value="1">CEO</option>
                        <option value="2">Manager</option>
                        <option value="3">Kasir</option>
                        <option value="4">Penyewa Stand</option>
                        </select>
                    </div><div class="col-6">
                    <button type="submit" class="btn btn-block btn-primary">LOGIN</button>
                
                    </div>
                </form>
            </div>
        </div>
    </div>

    
		<?php if(isset($_GET['pesan'])) { ?>
			<div class="container card bg-danger text-center text-light">
				<label><?php echo $_GET['pesan']; ?></label>
			</div>
		<?php } ?>
    
<?php include 't_foot.html'; ?>