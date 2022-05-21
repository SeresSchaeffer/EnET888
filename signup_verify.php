<?php
  //   session_start();
  //   if(isset($_SESSION["username"])){
  //      header("location:../profile/profile_main.php");
  //      die();
  //  }

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $conn = new PDO("mysql:host=localhost;dbname=enet888;charset=utf8","root","");
    $password=sha1($password);

    $sql="SELECT * FROM user where username='$username'";
    $result=$conn->query($sql);
    if($result->rowCount()==1){
     //   $_SESSION["add_login"]="error";
     echo "error" ;
    }else{
        $sql1 = "INSERT INTO user (username, password, email, role) VALUES ('$username',
        '$password','$email','m')";
        $conn ->exec($sql1);
     //   $_SESSION["add_login"]="success";
    }

    
    $conn = null;
    header("location: login.php");
    die();
?>