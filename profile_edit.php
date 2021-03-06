<?php
session_start();
//if(!isset($_SESSION["User_ID"])){
//    header("location:login.php");
//    die();
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/profile.css">
    <link href="css/style.css" rel="stylesheet">
    <!-- Icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>
<body>
<?php include 'nav.php'; ?>
<?php $conn = new PDO("mysql:host=localhost; dbname=enet888; charset=utf8","root","");
    $sql = "SELECT * FROM user WHERE User_ID='$_SESSION[User_ID]'";
    $result=$conn->query($sql);
    $row = $result->fetch();
?>
<form action="profile_save.php" method="post" enctype="multipart/form-data">
    <div class="container rounded mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
            <br><br>
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <?php
                        if($row['Icon']==""){  
                            ?>
                                <img class="rounded-circle mt-5" width="300px" height="300px" src="img/default-profile.jpg">
                            <?php 
                        }else {
                            ?>
                                <img class="rounded-circle mt-5" width="300px" height="300px" src="image/Icon/<?php echo $row['Icon'] ?>">
                            <?php
                        }
                        ?>
                    <span class="font-weight-bold"><?php echo $row['username']; ?></span>
                    <input type="file" name="icon">
                </div>
            </div>
            <div class="col-md-5 border-right">
            <br><br>
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="<?php echo $row['name']; ?>" name="name"></div>
                        <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="<?php echo $row['surname']; ?>" name="surname"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Email</label><input type="email" class="form-control" placeholder="<?php echo $row['email']; ?>" value="" name="email"></div>
                        <div class="col-md-12"><label class="labels">ID card number</label><input type="int" min="0" class="form-control" placeholder="<?php echo $row['ID_card']; ?>" value="" name="ID_card_number" maxlength="13"></div>
                        <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="<?php echo $row['address']; ?>" value="" name="address"></div>
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input type="int" min="0" class="form-control" placeholder="<?php echo $row['tel']; ?>" value="" name="phone" maxlength="10"></div>
                        
                        
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label for="bank">Choose a bank:</label>
                            <select id="bank" name="bank">
                            <option value="1">???????????????????????????????????????</option>
                            <option value="2">??????????????????????????????????????????</option>
                            <option value="3">???????????????????????????????????????</option>
                            <option value="4">??????????????????????????????????????????????????????</option>
                            <option value="5">????????????????????????????????????????????????</option>
                            <option value="6">?????????????????????????????????????????????????????????</option>
                            <option value="7">????????????????????????????????????</option>
                            </select>
                        </div>
                        <div class="col-md-12"><label class="labels">Bank Number</label><input type="text" class="form-control" value="" name="bank_number" maxlength="16"></div>
                    </div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit" name="save">Save Profile</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 border-right">
                <br><br><br><br><br>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Your bank account</label></div>
                    <?php $conn = new PDO("mysql:host=localhost; dbname=enet888; charset=utf8","root","");
                        $sql2 = "SELECT * FROM bank_account as t1 INNER JOIN bank as b1 ON (t1.Bank_ID = b1.Bank_ID) WHERE User_ID='$_SESSION[User_ID]'";
                        $result=$conn->query($sql2);
                        ?>
                        <div class="col-md-12"><label class="labels container"><?php
                        while($row=$result->fetch()){
                            ?>
                            <input type="checkbox" name="chkDel[]" value="<?php echo $row['Account_Number'];?>">
                            <?php
                            echo $row['Name']."  ".$row['Account_Number']."<br>";
                        }?>
                        <div class="checkmark"></div>
                        </label></div>
                        <label class="labels text-danger"><b>*checked for delete bank account</b></label>
                </div>
            </div>
        </div>
    </div>
</form>

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