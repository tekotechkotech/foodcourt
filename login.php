<?php include 't_head.html'; ?>

<title>
    Login
</title>

<?php include 't_topLogin.html'; ?>

<body style="background-image: url('background/resto.jpg');background-repeat: no-repeat;
  background-size: cover;">

    <div class="vertical-alignment-helper">
            <h2 class="text-center text-bold">Login</h2>
            <div class="p-3">
                
                <form action="c_login.php" method="POST">
                
                    <div class="mb-2 col-40">
                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                    </div>
                    
                    <div class="mb-2 col-40">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                    </div>

                    <div class="mb-2 col-40">
                        <select class="form-control form-select" placeholder="Level"  name="level">
                        <option value="1">CEO</option>
                        <option value="2">Manager</option>
                        <option value="3">Kasir</option>
                        <option value="4">Stand</option>
                        </select>
                    </div><div class="col-40">
                    <button type="submit" class="btn btn-block btn-warning">Sign-in</button>
                
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

</body>
<?php include 't_foot.html'; ?>