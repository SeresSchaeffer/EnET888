<?php
    session_start();
   // if(isset($_SESSION["username"])){
   //     header("location: profile.php");
    //    die();
   // }

    $username = $_POST['username']; 
    $password = $_POST['password'];
    $conn = new PDO("mysql:host=localhost;dbname=enet888;charset=utf8","root","");
    $sql = "SELECT * FROM user where username='$username' and password = sha1('$password') ";
    $result = $conn->query($sql);
    if($result->rowCount()==1){
        $data = $result->fetch(PDO::FETCH_ASSOC);
        $_SESSION["username"]=$data["username"];
        $_SESSION["password"]=$data["password"];  
        $_SESSION["User_ID"]=$data["User_ID"];
        $_SESSION["role"]=$data["role"];
        header("location: profile.php");
        die();
    }else{
        header("location: login.php");
        die();
    }
?>
