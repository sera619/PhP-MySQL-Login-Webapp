<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location: login.php");
    exit;
} else {
    
}    
?>
<!DOCTYPE html>
<html>
<head>
    <?php include("header.php"); ?>
    <title>Memberpage</title>
</head>
<body>
    <center>
            <?php include("nav.php"); ?>
            <h1>Home - Page</h1>
            <br>
            <div class="form">
                <h2>You logged in.</h2>
                <br>
                <?php echo '<p style="color:white;">Your id: '.$_SESSION['user_id'].'</p>'?>
            <br>
            <a href="logout.php"><button class="button">Logout</button></a>
        </div>
    </center>
</body>

</html>