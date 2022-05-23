<?php 
    session_start();
   // if(isset($_SESSION["User_ID"])){
   //     header("location:http://localhost/work/SEEnEt888/index.php");
    //  die();
   // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- gg css icon -->
    <link href='https://css.gg/trash.css' rel='stylesheet'>
    <!-- font awesome icon -->
    <script src="https://kit.fontawesome.com/f7b93d372f.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="image/icon_200x200.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <title>Enet888 Login</title>
    <script>
        $('i').click(function (){
            if($('#password').attr('type') == 'password'){
                $('#password').attr('type','text');
                $(this).removeClass('fa-eye-slash');
                $(this).addClass('fa-eye');
            } else {
                $('#password').attr('type','password');
                $(this).removeClass('fa-eye');
                $(this).addClass('fa-eye-slash');
            }       
        });
    </script>
</head>
<body>
<?php include 'nav.php'; ?>
<script src="js/login.js"></script>
<br>
<div class="container">
    <div class="frame">
        <div class="nav">
            <ul class="links">
                <li class="signin-active"><a class="btn">Sign in</a></li>
                <li class="signup-inactive"><a class="btn">&nbsp;Sign up</a></li>
            </ul>
        </div>

        <div ng-app ng-init="checked = false">
            <form class="form-signin" action="login_verify.php" method="post" name="form"> 
                <label for="username">Username</label>
                <input class="form-styling" type="text" name="username" placeholder="" /> 
                
                <label for="password">Password</label>
                <input class="form-styling" type="password" name="password" id="password" placeholder="" />
                
                
                
                <button type="submit" class="form-control button-form mt-4" style="background-color:#ffdda8; border-color:#000;border-radius:10px; color:#a06300 ">Sign In</button>
               <!-- <div class="btn-animate"> <a class="btn-signin text-white">Login to your account</a> </div> -->
            </form>

            <form class="form-signup" action="signup_verify.php" method="post" name="form"> 
                <label for="username">Username</label> 
                <input class="form-styling" type="text" name="username" placeholder="" />
                <label for="email">Email</label> 
                <input class="form-styling" type="text" name="email" placeholder="" /> 
                <label for="password">password</label> 
                <input class="form-styling" type="password" name="password"  placeholder="" /> 
                

                <button type="submit" class="form-control button-form mt-4" style="background-color:#ffdda8 ;border-color:#000; border-radius:10px; color:#a06300" >SIGN UP</button>
            </form>
        </div>

      <!--  <div class="forgot"> <a href="#">Forgot your password?</a> </div>   -->
    </div> 

    <a id="refresh" value="Refresh" onClick="history.go()"> <svg class="refreshicon" version="1.1" id="Capa_1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 322.447 322.447" style="enable-background:new 0 0 322.447 322.447;" xml:space="preserve">
    <path d="M321.832,230.327c-2.133-6.565-9.184-10.154-15.75-8.025l-16.254,5.281C299.785,206.991,305,184.347,305,161.224 c0-84.089-68.41-152.5-152.5-152.5C68.411,8.724,0,77.135,0,161.224s68.411,152.5,152.5,152.5c6.903,0,12.5-5.597,12.5-12.5 c0-6.902-5.597-12.5-12.5-12.5c-70.304,0-127.5-57.195-127.5-127.5c0-70.304,57.196-127.5,127.5-127.5 c70.305,0,127.5,57.196,127.5,127.5c0,19.372-4.371,38.337-12.723,55.568l-5.553-17.096c-2.133-6.564-9.186-10.156-15.75-8.025 c-6.566,2.134-10.16,9.186-8.027,15.751l14.74,45.368c1.715,5.283,6.615,8.642,11.885,8.642c1.279,0,2.582-0.198,3.865-0.614 l45.369-14.738C320.371,243.946,323.965,236.895,321.832,230.327z" /> </svg> </a>
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
