<?php
session_start();
if(!isset($_SESSION["User_ID"])){
    header("location:login.php");
    die();
}

$name=$_POST['name'];
$surname=$_POST['surname'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$ID_card_number=$_POST['ID_card_number'];
$email=$_POST['email'];

$targetDir = "img/";
$fileName = basename($_FILES["icon"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$allowTypes = array('jpg','png','jpeg','gif','pdf');

$bank = $_POST['bank'];
$bank_number = $_POST['bank_number'];

$conn = new PDO("mysql:host=localhost; dbname=enet888; charset=utf8","root","");
$sql1 = "SELECT * FROM user WHERE User_ID='$_SESSION[User_ID]'";
$result=$conn->query($sql1);
$row = $result->fetch();
if($name=="")$name = $row['name'];
if($surname=="")$surname = $row['surname'];
if($phone=="")$phone = $row['tel'];
if($address=="")$address = $row['address'];
if($ID_card_number=="")$ID_card_number = $row['ID_card'];
if($email=="")$email = $row['email'];
if($fileName=="")$fileName = $row['Icon'];

if(in_array($fileType, $allowTypes) && $fileName!=""){
    if(move_uploaded_file($_FILES["icon"]["tmp_name"], $targetFilePath)){
        $sql2="UPDATE user SET Icon='$fileName' WHERE User_ID='$_SESSION[User_ID]'";
        $conn->exec($sql2);
    }
}

$sql="UPDATE user SET name='$name',surname='$surname',tel='$phone',address='$address',
      ID_card='$ID_card_number',email='$email' 
      WHERE User_ID='$_SESSION[User_ID]'";
$conn->exec($sql);

if($_POST['bank_number']!=""){
    $sql4="INSERT INTO `bank_account`(`Account_Number`, `User_ID`, `Bank_ID`) VALUES ('$bank_number','$_SESSION[User_ID]','$bank')";
    $conn->exec($sql4);
}


$x = $_POST["chkDel"];

for($i=0;$i<count($_POST["chkDel"]);$i++){
  //  echo "<br>".$_POST["chkDel"][$i];
    if($_POST["chkDel"][$i] != ""){
        
        $sql3 = "DELETE FROM `bank_account` WHERE Account_Number='$x[$i]'";
        $conn->exec($sql3);
    }
}

$_SESSION["save_profile"]="success";


$conn=null;

header("location:profile.php");
die();

?>