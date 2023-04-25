<?php
    session_start();
    include("config.php");
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $connection -> prepare("SELECT * FROM users WHERE username=:username");
        $query -> bindParam("username", $username, PDO::PARAM_STR);
        $query -> execute();
        $result = $query -> fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            echo '<center><p class="error">Username or password is wrong!</p></center>';
        } else {
            if (password_verify($password, $result['password'])) {
                $_SESSION['user_id'] = $result['id'];
                header("location: index.php");
            } else {
                echo '<center><p class="error">Username or password is wrong!</p></center>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include("header.php"); ?>
        <title>Login Page</title>
    </head>
    <body>

        <center>
            <?php include("nav.php"); ?>

            <h1>Login - Page</h1>
            <br>
            <div class="form">
                
                <form method="post" action="" name="login-form">
                    <h2>Please Login</h2>
                    <p>You need to be logged in to see the<b class="big-text">very secure</b> information.</p>
                    <label>Username:</label>
                    <input class="input-field" type="text" name="username" required><br><br>
                    <label>Password:</label>
                    <input class="input-field" type="password" name="password" required><br><br>
                    <button class ="button" type="submit" name="login" value="Login">Login</button>
                </form>
                <!--
                    <br>
                    <a href="register.php"><button class="button">Register</button></a>
                -->
            </div>
        </center>
    </body>
</html>