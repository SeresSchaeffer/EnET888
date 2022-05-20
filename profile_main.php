<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="profile.css"> 
    
</head>


<body>
    
    <div class="container rounded mt-5 mb-5">
        <div class="row align-items-center">
            <div class="col-sm-4 ">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <?php 
                        $conn = new PDO("mysql:host=localhost; dbname=enet888; charset=utf8","root","");
                        $sql = "SELECT * FROM user WHERE username='$_SESSION[username]'";
                        $result=$conn->query($sql);
                        $row = $result->fetch();
                    ?>
        
                        <center>
                    <?php 
                        $conn = new PDO("mysql:host=localhost;dbname=bitmeta;charset=utf8","root","");
                            if($row['Icon']==""){
                    ?>
                                <img class="rounded-circle mt-5" src="default-profile.jpg" width="300px" height="300px" alt="avatar">
                    <?php
                            }else{
                    ?>
                                <img class="rounded-circle mt-5" src="image/Icon/<?php echo $row['Icon']?>" width="300px" height="300px" alt="avatar">
                    <?php
                            }
                    ?>      
                        </center>
                        <br>
                        <h1><?php echo $row["Username"]; ?></h1>
                    </div>
            </div>
        

        
        <div class="col-sm-4">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
         <div style="text-align: left;">
          
           <p>Name : <?php echo $row["Name"]; ?>&nbsp;&nbsp;<?php echo $row["Surname"]; ?></p>
           <p>Email : <?php echo $row["Email"]; ?></p>
           <p>ID card : <?php echo $row["ID_card_number"]; ?></p>
           <p>Address : <?php echo $row["Address"]; ?></p>
           <p>Tel. <?php echo $row["phone"]; ?></p>
           <?php $conn = new PDO("mysql:host=localhost; dbname=bitmeta; charset=utf8","root","");
                $sql2 = "SELECT * FROM bank_account as t1 INNER JOIN bank as b1 ON (t1.Bank_ID = b1.Bank_ID) WHERE User_ID='$_SESSION[User_ID]'";
                $result=$conn->query($sql2);
            ?>
           <div class="col-md-12"><p class="container">บัญชีธนาคารที่บันทึกไว้ <br><?php
                while($row=$result->fetch()){
                    echo $row['Name']."  ".$row['Account_Number']."<br>";
                }?>
            <div class="checkmark"></div>
            </p></div>
         </div>
         </div>
        </div>
        

        
        <div class="col-sm-4">  
            <a href="profile_edit.php" class="btn btn-primary profile-button text-align=right" >edit profile</a> 
        </div>
        </div>
    </div>

</body>
</html>