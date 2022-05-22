<?php
session_start();
    
        if($_SESSION["role"]=="m"){
            $conn=new PDO("mysql:host=localhost;dbname=enet888;charset=utf8","root","");
            $sql="DELETE FROM cart where cart_id =$_GET[id]";
            $conn->exec($sql);
            $conn=null;
            header("location:cart.php");
            die();
        }else{
            header("location:index.php");
            die();
        }
        
?>
