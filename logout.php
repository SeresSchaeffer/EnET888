<?php echo "Logout OK" ?>
<?php
    session_start();
    session_destroy();
     header("location: login.php");
     die(); 
?>