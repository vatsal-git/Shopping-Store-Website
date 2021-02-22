<?php include('../admin/server/account_server.php'); ?>
<?php include('../admin/partials/header.php'); ?>

    <div id="user-section">

        <div class="user-form">
            <div class="form-logo">
                <a href="index.php"><img src="../img/trac-logo.svg" alt="logo"></a>
            </div><br><br>
            <h2>Register</h2><br>
            <form method="post" action="register.php">

<?php include('../admin/error/error.php'); ?>

                <div class="mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="email" value="<?php echo $email; ?>">
                </div>
                <div class="mb-3">
                    <input type="password" name="password_1" class="form-control" placeholder="Password">
                </div>
                <div class="mb-3">
                    <input type="password" name="password_2" class="form-control" placeholder="Confirm Password">
                </div><br>
                <button type="submit" class="btn btn-lg form-submit" name="reg_user">Register</button><br><br>

                Already a member? <a href="login.php"> <u>Log in</u></a>

            </form>
        </div>
    </div>

<?php include('../admin/partials/footer.php'); ?>