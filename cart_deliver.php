<?php
session_start();
$a =2;
        $conn = new PDO("mysql:host=localhost;dbname=enet888;charset=utf8","root","");
        $sql4 = "UPDATE cart SET checkout=$a WHERE cart_id=$_GET[id]"; 
        $pdoResult = $conn->prepare($sql4);
        $pdoExec = $pdoResult->execute(array(":checkout"=>$a));
        header("location:cart.php")
    ?>