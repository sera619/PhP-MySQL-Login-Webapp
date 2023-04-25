<?php
    session_start();
    $_SESSION['user_id'] = null;
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("header.php"); ?>
        <meta http-equiv="refresh" content="6;url=index.php">
        <title>Logout</title>
        <script>
            var count = 5;
            setInterval(function() {
                count--;
                if (count<=0){
                    count =0;
                }
                document.getElementById("countdown").innerHTML = count;
            }, 1000);
        </script>        
    </head>

    <body>
        <center>
            <p class="success">You successfully logged out!</p>
            <br>
            <p class="success">You will be automaticly redirect in <span id="countdown">5</span> seconds...</p>
        </center>
    </body>

    </html>