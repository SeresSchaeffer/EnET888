<?php
session_start();
$item_price =$_POST['item_price'];
$item_price_old = $_POST['item_price_old'];
$info = $_POST['info'];
$a = $_GET['id'];
$b = "";

$conn = new PDO("mysql:host=localhost; dbname=enet888; charset=utf8","root","");
$sql1 = "SELECT * FROM item WHERE item_id=$a";
$result=$conn->query($sql1);
$row = $result->fetch();
if($item_price=="")$item_price = $row['item_price'];
if($item_price_old=="")$item_price_old = $row['item_price_old'];
if($info=="")$info = $row['item_info'];
if($row['item_id']==1){
    $b='xs';
}
if($row['item_id']==2){
    $b='s';
}
if($row['item_id']==3){
    $b='m';
}
if($row['item_id']==4){
    $b='l';
}
if($row['item_id']==5){
    $b='xl';
}
if($row['item_id']==6){
    $b='xxl';
}


      //  $conn = new PDO("mysql:host=localhost;dbname=enet888;charset=utf8","root","");
        $sql4 = "UPDATE item SET item_price=$item_price,item_price_old=$item_price_old,item_info='$info' WHERE item_id=$a"; 
        $pdoResult = $conn->prepare($sql4);
        $pdoExec = $pdoResult->execute(array(":item_price"=>$item_price,":item_price_old"=>$item_price_old,":item_info"=>'$info'));
        echo "$a <br>";
        echo "$item_price <br>" ;
        echo "$item_price_old <br>";
        echo "$info <br>";
        echo "$sql4 <br>";
        header("location:$b.php")
    ?>