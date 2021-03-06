<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <title>EnET 888</title>
    
</head>

<body>
    <?php include "nav.php"; ?>
    <!-- Header Start -->
    <div id="header-carousel" class="carousel slide img-center" data-ride="carousel" style="height: 600px; width: 1000px;">
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 600px; width: 1000px;">
                <img class="img-fluid" src="img/freeshipping.png" alt="Image">
            </div>
            <div class="carousel-item" style="height: 600px; width: 1000px;">
                <img class="img-fluid" src="img/sale.png" alt="Image">
            </div>
            <div class="carousel-item" style="height: 600px; width: 1000px;">
                <img class="img-fluid" src="img/24-7.png" alt="Image">
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-dark" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
    <!-- Header End -->

    <!-- Featured Start -->
    <div class="container-fluid pt-5" style="margin-left: 300px;">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->

    <!-- Products Start -->
    
    <div class="container-fluid py-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5">
                <span class="px-2" style="background-color: #FFEFD5;">Products</span>
            </h2>
        </div>
    </div>
    <div class="container-fluid pt-1">
        <div class="row px-xl-5 pb-3">
            <div class="card product-item border-0" style="background-color: #FFEFD5; padding-right: 50px; padding-left: 165px;">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <a href="xs.php"><img class="img-fluid w-100" src="img/xsbox.jpg" alt=""></a>
                </div>
                <div class=" card-body border-left border-right text-center p-0 pt-4 pb-3 ">
                    <h6 class="text-truncate mb-3 ">??????????????????????????????????????? XS</h6>
                    <div class="d-flex justify-content-center ">
                    <?php $conn = new PDO("mysql:host=localhost; dbname=enet888; charset=utf8","root","");
                            $sql = "SELECT item_price,item_price_old,item_id FROM item  ";
                            $result=$conn->query($sql);
                            while($row=$result->fetch()){
                                if($row['2'] =="1")
                                    echo "<h6>".number_format($row['0'],2)." Baht</h6><h6 class='text-muted ml-2'><del>".number_format($row['1'],2)." Baht</del></h6>";    
                            }
                             $conn=null;
                            ?>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between border" style="background-color: #FFEFD5;">
                    <a href="xs.php" class="btn btn-sm text-dark p-0 "><i class="fas fa-eye text-primary mr-1 "></i>View Detail</a>
                   
                </div>
            </div>
            <div class="card product-item border-0" style="background-color: #FFEFD5; padding-right: 50px;">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <a href="s.php"><img class="img-fluid w-100" src="img/sbox.jpg" alt=""></a>
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">??????????????????????????????????????? S</h6>
                    <div class="d-flex justify-content-center">
                    <?php $conn = new PDO("mysql:host=localhost; dbname=enet888; charset=utf8","root","");
                            $sql = "SELECT item_price,item_price_old,item_id FROM item  ";
                            $result=$conn->query($sql);
                            while($row=$result->fetch()){
                                if($row['2'] =="2")
                                    echo "<h6>".number_format($row['0'],2)." Baht</h6><h6 class='text-muted ml-2'><del>".number_format($row['1'],2)." Baht</del></h6>";    
                            }
                             $conn=null;
                            ?>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between border" style="background-color: #FFEFD5;">
                    <a href="s.php" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                   
                </div>
            </div>
            <div class="card product-item border-0" style="background-color: #FFEFD5;">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <a href="m.php"><img class="img-fluid w-100" src="img/mbox.jpg" alt=""></a>
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">??????????????????????????????????????? M</h6>
                    <div class="d-flex justify-content-center">
                    <?php $conn = new PDO("mysql:host=localhost; dbname=enet888; charset=utf8","root","");
                            $sql = "SELECT item_price,item_price_old,item_id FROM item  ";
                            $result=$conn->query($sql);
                            while($row=$result->fetch()){
                                if($row['2'] =="3")
                                    echo "<h6>".number_format($row['0'],2)." Baht</h6><h6 class='text-muted ml-2'><del>".number_format($row['1'],2)." Baht</del></h6>";    
                            }
                             $conn=null;
                            ?>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between border" style="background-color: #FFEFD5;">
                    <a href="m.php" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                   
                </div>
            </div>
            <div class="card product-item border-0" style="background-color: #FFEFD5; padding-right: 50px; padding-left: 165px;">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <a href="l.php"><img class="img-fluid w-100" src="img/lbox.jpg" alt=""></a>
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">??????????????????????????????????????? L</h6>
                    <div class="d-flex justify-content-center">
                    <?php $conn = new PDO("mysql:host=localhost; dbname=enet888; charset=utf8","root","");
                            $sql = "SELECT item_price,item_price_old,item_id FROM item  ";
                            $result=$conn->query($sql);
                            while($row=$result->fetch()){
                                if($row['2'] =="4")
                                    echo "<h6>".number_format($row['0'],2)." Baht</h6><h6 class='text-muted ml-2'><del>".number_format($row['1'],2)." Baht</del></h6>";    
                            }
                             $conn=null;
                            ?>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between border" style="background-color: #FFEFD5;">
                    <a href="l.php" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                   
                </div>
            </div>
            <div class="card product-item border-0" style="background-color: #FFEFD5; padding-right: 50px;">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <a href="xl.php"><img class="img-fluid w-100" src="img/xlbox.jpg" alt=""></a>
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">??????????????????????????????????????? XL</h6>
                    <div class="d-flex justify-content-center">
                    <?php $conn = new PDO("mysql:host=localhost; dbname=enet888; charset=utf8","root","");
                            $sql = "SELECT item_price,item_price_old,item_id FROM item  ";
                            $result=$conn->query($sql);
                            while($row=$result->fetch()){
                                if($row['2'] =="5")
                                    echo "<h6>".number_format($row['0'],2)." Baht</h6><h6 class='text-muted ml-2'><del>".number_format($row['1'],2)." Baht</del></h6>";    
                            }
                             $conn=null;
                            ?>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between border" style="background-color: #FFEFD5;">
                    <a href="xl.php" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                   
                </div>
            </div>
            <div class="card product-item border-0" style="background-color: #FFEFD5;">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <a href="xxl.php"><img class="img-fluid w-100" src="img/xxlbox.jpg" alt=""></a>
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">??????????????????????????????????????? XXL</h6>
                    <div class="d-flex justify-content-center">
                    <?php $conn = new PDO("mysql:host=localhost; dbname=enet888; charset=utf8","root","");
                            $sql = "SELECT item_price,item_price_old,item_id FROM item  ";
                            $result=$conn->query($sql);
                            while($row=$result->fetch()){
                                if($row['2'] =="6")
                                    echo "<h6>".number_format($row['0'],2)." Baht</h6><h6 class='text-muted ml-2'><del>".number_format($row['1'],2)." Baht</del></h6>";    
                            }
                             $conn=null;
                            ?>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between border" style="background-color: #FFEFD5;">
                    <a href="xxl.php" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                   
                </div>
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
    <!-- Products End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>