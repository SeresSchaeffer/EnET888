
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/nav.css">
<!-- ก่อน login -->
<?php if(!isset($_SESSION["User_ID"])){ ?>
  <div class="navbar" style="background-color: #ffdda8 ;">
    <a class="nav-link nav-link-ltr" style="margin-left: 10%;" id="left" href="#"><font color=#a06300 ><i class="bi bi-house-door-fill"></i> EnET888</font></a>
    <a class="nav-link nav-link-ltr" style="margin-left: 47.5%;" id="center" href="#"><font color=#a06300 ><i class="bi bi-cart-check"></i> Cart</font></a>
    <a class="nav-link nav-link-ltr" style="margin-left: 80%;" href="#"><font color=#a06300 ><i class="bi bi-box-arrow-in-right"></i> login</font></a>
  </div>
<?php }else{ ?>
  <!-- หลัง login -->
  <div class="navbar" style="background-color: #ffdda8 ;">
    <a class="nav-link nav-link-ltr" style="margin-left: 10%;" id="left" href="#"><font color=#a06300 ><i class="bi bi-house-door-fill"></i> EnET888</font></a>
    <a class="nav-link nav-link-ltr" style="margin-left: 47.5%;" id="center" href="#"><font color=#a06300 ><i class="bi bi-cart-check"></i> Cart</font></a>
    <a class="nav-link nav-link-ltr" style="margin-left: 85%;" href="#"><font color=#a06300 ><i class="bi bi-person-lines-fill"></i><!--&nbsp;<?php echo $_SESSION["Username"] ?>--> login</font></a>
    <a class="nav-link nav-link-ltr" style="margin-left: 90%;" href="#"><font color=#a06300 ><i class="bi bi-box-arrow-in-right"></i> logout</font></a>
  </div>
<?php } ?>
  

  
