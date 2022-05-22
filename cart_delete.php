<?php
session_start();
$quantity = 0;  
$name ="";
        if($_SESSION["role"]=="m"){
            $conn = new PDO("mysql:host=localhost;dbname=enet888;charset=utf8","root","");
            $sql2 = "SELECT * FROM cart where cart_id =$_GET[id]";
            $result = $conn->query($sql2);
            $row=$result->fetch();
            $quantity = $row['quantity'];
            $name =$row['item_id'];
            $conn=null;

            $sum=0;

            $conn = new PDO("mysql:host=localhost;dbname=enet888;charset=utf8","root","");
            $sql1 = "SELECT instock FROM item where item_id =$name";
            $result = $conn->query($sql1);
            $row=$result->fetch();
            $sum = $row[0]+$quantity;
            $conn=null;

            $conn = new PDO("mysql:host=localhost;dbname=enet888;charset=utf8","root","");
            $sql4 = "UPDATE item SET instock=$sum WHERE item_id=$name"; 
            $pdoResult = $conn->prepare($sql4);
            $pdoExec = $pdoResult->execute(array(":instock"=>$sum));
            $conn=null;

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
