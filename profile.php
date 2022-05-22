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
    <link rel="stylesheet" href="css/profile.css"> 
    <link href="css/style.css" rel="stylesheet">

    <!-- Icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>


<body>
    <?php include 'nav.php'; ?>
    <div class="container rounded mt-5 mb-5">
        <div class="row align-items-center">
            <div class="col-sm-4 ">
                <br><br><br>
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <?php 
                        $conn = new PDO("mysql:host=localhost; dbname=enet888; charset=utf8","root","");
                        $sql = "SELECT * FROM user WHERE username='$_SESSION[username]'";
                        $result=$conn->query($sql);
                        $row = $result->fetch();
                    ?>
        
                        <center>
                    <?php 
                        $conn = new PDO("mysql:host=localhost;dbname=enet888;charset=utf8","root","");
                            if($row['Icon']==""){
                    ?>
                                <img class="rounded-circle mt-5" src="img/default-profile.jpg" width="300px" height="300px" alt="avatar">
                    <?php
                            }else{
                    ?>
                                <img class="rounded-circle mt-5" src="image/Icon/<?php echo $row['Icon']?>" width="300px" height="300px" alt="avatar">
                    <?php
                            }
                    ?>      
                        </center>
                        <br>
                        <h1><?php echo $row["username"]; ?></h1>
                    </div>
            </div>
        

        
        <div class="col-sm-4">
            <br><br><br>
        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
         <div style="text-align: left;">
          
           <p>Name : <?php echo $row["name"]; ?>&nbsp;&nbsp;<?php echo $row["surname"]; ?></p><hr>
           <p>Email : <?php echo $row["email"]; ?></p><hr>
           <p>ID card : <?php echo $row["ID_card"]; ?></p><hr>
           <p>Address : <?php echo $row["address"]; ?></p><hr>
           <p>Tel. <?php echo $row["tel"]; ?></p><hr>
           <?php // echo $_SESSION["User_ID"]; ?>
           <?php $conn = new PDO("mysql:host=localhost; dbname=enet888; charset=utf8","root","");
                $sql2 = "SELECT * FROM bank_account as t1 INNER JOIN bank as b1 ON (t1.Bank_ID = b1.Bank_ID) WHERE User_ID='$_SESSION[User_ID]'";
                $result=$conn->query($sql2);
            ?>
        <div class="col-md-12">
            <p class="container"><b><u>บัญชีธนาคารที่บันทึกไว้</u></b> <br>
                <?php
                while($row=$result->fetch()){
                    echo $row['Name']."  ".$row['Account_Number']."<br>";
                }
                ?>
            <div class="checkmark"></div>
            </p>
        </div>
         </div>
         </div>
        </div>
        

        
        <div class="col-sm-4">
            <br><br><br><br><br><br><br><br><br>
            <a href="profile_edit.php" class="btn btn-primary profile-button text-align=right" >edit profile</a> 
            
        </div>
        </div>
    </div>

     <!-- Footer Start -->
     <div class="card-footer" style="background-color: #ffff ;">
        <div class="col-2" style="margin-top: 50px; margin-bottom: 100px; margin-left: 225px; margin-right: 200px;">
            <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">EnET</span>888</h1>
            <p class="mb-2" style="padding-left: 18px;"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, Bangkok, THAILAND</p>
            <p class="mb-2" style="padding-left: 18px;"><i class="fa fa-envelope text-primary mr-3"></i>wawhawawhly@gmail.com</p>
            <p class="mb-0" style="padding-left: 18px;"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
        </div>
        <div class="col-2" style="margin-left: 830px; margin-top: -255px; margin-bottom: 50px;">
            <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-dark mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-dark mb-2" href="cart.php"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                    <a class="text-dark mb-2" href="***"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                    <a class="text-dark" href="***"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
        </div>
        <div class="col-2" style="margin-left: 1400px; margin-top: -220px; margin-bottom: 50px;">
            <h5 class="font-weight-bold text-dark mb-4">Subscribe for promotion</h5>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0 py-4" placeholder="Your Email" required="required" />
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now</button>
                    </div>
                </form>
        </div>
    </div>
    <!-- Footer End -->

</body>
</html>