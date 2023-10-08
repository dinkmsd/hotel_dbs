<?php require('inc/db_config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/common.css">
    <?php require('inc/links.php') ?>
    <?php require('inc/essentials.php') ?>
</head>

<body class="bg-light">
    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark text-white py-3"> Admin Login</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input type="text" name="username" class="form-control shadow-none text-center" placeholder="Username">
                </div>
                <div class="mb-4">
                    <input type="password" name="password" class="form-control shadow-none text-center" placeholder="Password">
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
            </div>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Query to fetch user data
        $query = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
        $result = mysqli_query($_GLOBALS['conn'], $query);

        if (!$result) {
            die("Database query failed: " . mysqli_error($connection));
        }

        if (mysqli_num_rows($result) == 1) {
            // User found, log them in
            session_start();
            $_SESSION["adminLogin"] = true;
            $_SESSION["username"] = $username;
            redirect('dashboard.php');
        } else {
            // User not found or invalid credentials
            alert('error', 'Login Failed! Username or password wrong!!!');
        }
    }
    ?>

    <?php require('inc/scripts.php') ?>
</body>

</html>