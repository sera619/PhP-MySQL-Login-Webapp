<?php
    $current_page = $_SERVER['REQUEST_URI'];
?>

<nav class="nav">
    <a
    <?php if ($current_page=='/login/index.php') {
        echo 'class="nav-btn active"'; 
    } else {
        echo 'class="nav-btn"';
    } ?> href="index.php">Home</a>
    
    <a 
    <?php if ($current_page=='/login/register.php') {
        echo 'class="nav-btn active"'; 
    } else {
        echo 'class="nav-btn"';
    } ?> href="register.php">Register</a>
    
    <a
    <?php if ($current_page=='/login/login.php') {
        echo 'class="nav-btn active"'; 
    } else {
        echo 'class="nav-btn"';
    } ?> href="login.php">Login</a>
</nav>
<br>