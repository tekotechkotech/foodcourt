<?php include 't_head.html'; ?>

<title>
    Login
</title>

<?php include 't_topLogin.html'; ?>

    <div class="jumbotron p-5">
        <div class="container p-5">
            <h1 class="text-center">LOGIN SEBAGAI ADMIN</h1>
            <div class="jumbotron p-5">
                <form action="c_admlogin.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control " name="username" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">LOGIN</button>
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