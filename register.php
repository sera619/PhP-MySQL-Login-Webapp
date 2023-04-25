
<?php
    session_start();
    include("config.php");
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $query = $connection -> prepare("SELECT * FROM users WHERE email=:email");
        $query -> bindParam("email", $email, PDO::PARAM_STR);
        $query -> execute();
        if ($query -> rowCount() > 0) {
            echo '<p class="error">The email address is already registered!</p>';
        }
        if ($query -> rowCount() == 0) {
            $query = $connection -> prepare("INSERT INTO users(username,password,email) VALUES (:username,:password_hash,:email)");
            $query -> bindParam("username", $username, PDO::PARAM_STR);
            $query -> bindParam("password_hash", $password_hash, PDO::PARAM_STR);
            $query -> bindParam("email", $email, PDO::PARAM_STR);
            $result = $query -> execute();
            if ($result) {
                echo '<center><p class="success">Your registration was successfull!</p></center>';
            } else {
                echo '<center><p class="error">Something went wrong!</p></center>';
            }
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include("header.php"); ?>
        <title>Register Account</title>
    </head>
    <body>
        <center>
        <?php include("nav.php"); ?>
        <h1>Register Page</h1>
        <br>
            <div class="form-register">
                <form method="post" action="" name="register-form">
                    
                    <h2>Register a new Account</h2>
                    <label>Username:</label><br>
                    <input class="input-field" type="text" name="username" placeholder="Username here..." pattern="[a-zA-Z0-9]+" required /><br><br>
                    <label>E-Mail:</label><br>
                    <input class="input-field" type="email" name="email" placeholder="Your E-mail..." required /><br><br>
                    <label>Password:</label><br>
                    <input class="input-field" type="password" name="password" placeholder="Choose a password..." required /><br><br>
                    <button class="button" name="register" type="submit">Register</button>
                </form>
            </div>
        </center>
    </body>
</html>