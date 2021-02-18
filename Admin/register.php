<?php include('account server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="img/trac-icon.svg">
    <title>TRAC online fashion</title>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- STYLESHEET -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main-style.css">
</head>

<body>
    <div id="login-section">
        <div class="login-form-container">
            <div class="login-logo">
                <img src="../img/trac-logo.svg" alt="logo">
            </div>
            <h2>Register</h2>
            <form>
                <div class="mb-3">
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" id="username" placeholder="email">
                </div>
                <div class="mb-3">
                    <input type="password" name="password_1" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="mb-3">
                    <input type="password" name="password_2" class="form-control" id="password"
                        placeholder="Confirm Password">
                </div>
                <button type="submit" name="reg_user" class="btn login-form-submit">Register</button>

                <div class="login-register">Already a member? <a href="login.php">Log in</a></div>
            </form>
        </div>
    </div>

    <!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>

</html>
