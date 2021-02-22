<?php include('../admin/server/account_server.php'); ?>
<?php include('../admin/partials/header.php'); ?>

    <div id="user-section">

        <div class="user-form">
            <div class="form-logo">
                <a href="index.php"><img src="../img/trac-logo.svg" alt="logo"></a>
            </div><br><br>
            <h2>Log in</h2><br>
            <form method="post" action="login.php">

<?php include('../admin/error/error.php'); ?>
                
                <div class="mb-2">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="mb-2">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div><br>
                <button type="submit" class="btn btn-lg form-submit" name="login_user">Submit</button><br><br>

                Not a member yet? <a href="register.php"> <u>Register me</u></a>

            </form>
        </div>
    </div>

<?php include('../admin/partials/footer.php'); ?>