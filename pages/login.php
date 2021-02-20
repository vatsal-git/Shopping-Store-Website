<?php include('../admin/server/account_server.php'); ?>
<?php include('../admin/partials/header.php'); ?>

    <div id="user-section">

        <div class="user-form">
            <div class="form-logo">
                <img src="../img/trac-logo.svg" alt="logo">
            </div>
            <h2 class="section-heading">Log in</h2>
            <form method="post" action="login.php">

<?php include('../admin/error/account_error.php'); ?>
                
                <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-lg form-submit" name="login_user">Submit</button><br>

                Not a member yet? <a href="register.php"> <u>Register me</u></a>

            </form>
        </div>
    </div>

<?php include('../admin/partials/footer.php'); ?>