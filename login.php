<?php 
    session_start();
    if(isset($_SESSION["User_ID"])){
        header("location:http://localhost/work/BitMeta/index.php");
        die();
    }
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
    <title>Enet888 Login</title>
</head>
<body>
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
            <form class="form-signin" action="" method="post" name="form"> <label for="username">Username</label><input class="form-styling" type="text" name="username" placeholder="" />  <label for="password">Password</label> <input class="form-styling" type="text" name="password" placeholder="" /> <input type="checkbox" id="checkbox" /> <label for="checkbox"><span class="ui"></span>Keep me signed in</label>
                <div class="btn-animate"> <a class="btn-signin text-white">Login to your account</a> </div>
            </form>
            <form class="form-signup" action="" method="post" name="form"> <label for="username">Username</label> <input class="form-styling" type="text" name="email" placeholder="" /><label for="ID_card">ID Card</label> <input class="form-styling" type="text" name="ID_card" placeholder="" /> <label for="password">Password</label> <input class="form-styling" type="text" name="confirmpassword" placeholder="" /> <a ng-click="checked = !checked" class="btn-signup">REGISTER</a> </form>
            <div class="success"> <svg width="270" height="270" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" id="check" ng-class="checked ? 'checked' : ''">
                    <path fill="#ffffff" d="M40.61,23.03L26.67,36.97L13.495,23.788c-1.146-1.147-1.359-2.936-0.504-4.314 c3.894-6.28,11.169-10.243,19.283-9.348c9.258,1.021,16.694,8.542,17.622,17.81c1.232,12.295-8.683,22.607-20.849,22.042 c-9.9-0.46-18.128-8.344-18.972-18.218c-0.292-3.416,0.276-6.673,1.51-9.578" />
            </div>
        </div>
        <div class="forgot"> <a href="#">Forgot your password?</a> </div>
        
    </div> <a id="refresh" value="Refresh" onClick="history.go()"> <svg class="refreshicon" version="1.1" id="Capa_1" x="0px" y="0px" width="25px" height="25px" viewBox="0 0 322.447 322.447" style="enable-background:new 0 0 322.447 322.447;" xml:space="preserve">
            <path d="M321.832,230.327c-2.133-6.565-9.184-10.154-15.75-8.025l-16.254,5.281C299.785,206.991,305,184.347,305,161.224 c0-84.089-68.41-152.5-152.5-152.5C68.411,8.724,0,77.135,0,161.224s68.411,152.5,152.5,152.5c6.903,0,12.5-5.597,12.5-12.5 c0-6.902-5.597-12.5-12.5-12.5c-70.304,0-127.5-57.195-127.5-127.5c0-70.304,57.196-127.5,127.5-127.5 c70.305,0,127.5,57.196,127.5,127.5c0,19.372-4.371,38.337-12.723,55.568l-5.553-17.096c-2.133-6.564-9.186-10.156-15.75-8.025 c-6.566,2.134-10.16,9.186-8.027,15.751l14.74,45.368c1.715,5.283,6.615,8.642,11.885,8.642c1.279,0,2.582-0.198,3.865-0.614 l45.369-14.738C320.371,243.946,323.965,236.895,321.832,230.327z" /> </svg> </a>
</div>
</body>
</html>