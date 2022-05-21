
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  
  <!-- ก่อน login -->
  <?php if(!isset($_SESSION["User_ID"])){ ?>
    <nav class="navbar navbar-expand navbar-light" style="background-color: #ffdda8 ; z-index: 9;" id="nav">
    <link rel="stylesheet" href="css/nav-login.css">
    <div class="container">
      <a class="navbar-brand" href="index.php"><font color=#a06300 ><i class="bi bi-house-door-fill"></i> EnET888</font></a>
      <a class="navbar-brand" href="cart.php"><font color=#a06300 ><i class="bi bi-cart-check"></i> Cart</font></a>
      <a class="navbar-brand" href="login.php"><font color=#a06300 ><i class="bi bi-box-arrow-in-right"></i> login</font></a>
      <div id="indicator"></div>
    </div>
  </nav> 
  <?php }else{ ?>
    <!-- หลัง login -->
  <nav class="navbar navbar-expand navbar-light" style="background-color: #ffdda8 ; z-index: 9;" id="nav">
   <link rel="stylesheet" href="css/nav-logout.css">
    <div class="container">
      <a class="navbar-brand" href="index.php"><font color=#a06300 ><i class="bi bi-house-door-fill"></i> EnET888</font></a>
      <a class="navbar-brand" href="cart.php"><font color=#a06300 ><i class="bi bi-cart-check"></i> Cart</font></a>
      <div id="indicator"></div>
      <div class="dropdown" >
        <div class="btn dropdown-toggle btn-sm m-1 mybtn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <font color=#a06300 ><i class="bi bi-person-lines-fill"></i> <!--&nbsp;<?php echo $_SESSION["Username"] ?>--> seres </font>
        </div>
        <ul class="dropdown-menu" style="background-color: #ffdda8;" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" data-item="profile" href="profile.php"><i class="bi bi-file-person"></i> Profile</a></li>
            <li><a class="dropdown-item" data-item="logout" href="database/logout.php"><i class="bi bi-power"></i> Logout</a></li>
        </ul>
      </div>
      
    </div>
  </nav> 
  <?php } ?>
  

  
