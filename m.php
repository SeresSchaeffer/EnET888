<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mystery Box M</title>
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
    <!-- Ajax -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
		$(document).ready(function() {

			$("#item_id").click(function() {

				var item_id = $("#item_id").val();
				var quantity = $("#quantity").val();

				$.ajax({
					type: "POST",
					url: "add_to_cart.php",
					data: {
						item_id: item_id,
						quantity: quantity
					},
                    success: function(data) {
						console.log(data);
					}
				});
				
			});

		});
	</script>
</head>

<body>

<?php include "nav.php"; ?>
<div class="container-fluid py-5">
        <div class="small-img">
        <?php $conn = new PDO("mysql:host=localhost; dbname=enet888; charset=utf8","root","");
        $sql9 = "SELECT * FROM photo WHERE item_id=3";
        $result=$conn->query($sql9);
        while($row=$result->fetch())
	    {
             ?> <img src="img/<?php echo $row['photo']; ?>" onclick="myFunction(this)"> <?php  
        }
        $conn=null;
        ?>
         <?php $conn = new PDO("mysql:host=localhost; dbname=enet888; charset=utf8","root","");
        $sql = "SELECT * FROM item WHERE item_id=3";
        $result=$conn->query($sql);
        $row = $result->fetch();
        ?>   
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-5">
                <div id="product-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner border">
                        <div class="carousel-item active">
                            <img class="w-100 h-100" id="imageBox" src="img/mbox.jpg" alt="Image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 pb-5">
                <h3 class="font-weight-semi-bold">กล่องสุ่มไซส์ M</h3>
                <h3 class="font-weight-semi-bold mb-4"><?php echo number_format("$row[item_price]",2); ?> Baht<del class="text-muted ml-2 "><?php echo number_format("$row[item_price_old]",2); ?> Baht</del></h3>
                <p>
                    <h3 class="font-weight-semi-bold mb-4">รายละเอียด</h3>
                </p>
                <p class="mb-4"><?php echo $row["item_info"]; ?></p>
                <?php if($_SESSION["role"]=="m"){?>
                <div class="d-flex align-items-center mb-4 pt-2">
                    <div class="input-group quantity mr-3" style="width: 130px;">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-minus">
                            <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="number" min="1" class="form-control bg-secondary text-center input" value="1" id="quantity">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-plus">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <button class="btn btn-primary px-3" id="item_id" value="3"><i class="fa fa-shopping-cart mr-1" ></i> Add To Cart</button>
                    <?php }else if($_SESSION["role"]=="a"){?>  
                <a href="edit_price.php?id=3"><button class="btn btn-primary px-3" type="submit" >Edit</button></a>
                <?php } ?>
                </div>
                <div class="d-flex pt-2">
                    <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                    <div class="d-inline-flex">
                        <a class="text-dark px-2" href="https://www.facebook.com">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="https://twitter.com">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="https://www.instagram.com">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Shop Detail End -->


    <!-- Products Start -->
    <?php $conn=null; ?>
    <div class="container-fluid py-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5">
                <span class="px-2" style="background-color: #FFEFD5;">
                <font>You May Also Like</font>
                </span>
            </h2>
        </div>
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel related-carousel">
                    <div class="card product-item border-0" style="background-color: #FFEFD5;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <a href="xs.php"><img class="img-fluid w-100" src="img/xsbox.jpg" alt=""></a>
                        </div>
                        <div class=" card-body border-left border-right text-center p-0 pt-4 pb-3 ">
                            <h6 class="text-truncate mb-3 ">กล่องสุ่มไซส์ XS</h6>
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
                            <a href=" " class="btn btn-sm text-dark p-0 "><i class="fas fa-shopping-cart text-primary mr-1 "></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0" style="background-color: #FFEFD5;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0 ">
                            <a href="s.php"><img class="img-fluid w-100 " src="img/sbox.jpg " alt=" "></a>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3 ">
                            <h6 class="text-truncate mb-3 ">กล่องสุ่มไซส์ S</h6>
                            <div class="d-flex justify-content-center ">
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
                        <div class="card-footer d-flex justify-content-between border " style="background-color: #FFEFD5;">
                            <a href="s.php" class="btn btn-sm text-dark p-0 "><i class="fas fa-eye text-primary mr-1 "></i>View Detail</a>
                            <a href=" " class="btn btn-sm text-dark p-0 "><i class="fas fa-shopping-cart text-primary mr-1 "></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0 " style="background-color: #FFEFD5;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0 ">
                            <a href="l.php"><img class="img-fluid w-100 " src="img/lbox.jpg " alt=" "></a>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3 ">
                            <h6 class="text-truncate mb-3 ">กล่องสุ่มไซส์ L</h6>
                            <div class="d-flex justify-content-center ">
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
                        <div class="card-footer d-flex justify-content-between border " style="background-color: #FFEFD5;">
                            <a href="l.php" class="btn btn-sm text-dark p-0 "><i class="fas fa-eye text-primary mr-1 "></i>View Detail</a>
                            <a href=" " class="btn btn-sm text-dark p-0 "><i class="fas fa-shopping-cart text-primary mr-1 "></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0 " style="background-color: #FFEFD5;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0 ">
                            <a href="xl.php"><img class="img-fluid w-100 " src="img/xlbox.jpg " alt=" "></a>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3 ">
                            <h6 class="text-truncate mb-3 ">กล่องสุ่มไซส์ XL</h6>
                            <div class="d-flex justify-content-center ">
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
                        <div class="card-footer d-flex justify-content-between border " style="background-color: #FFEFD5;">
                            <a href="xl.php" class="btn btn-sm text-dark p-0 "><i class="fas fa-eye text-primary mr-1 "></i>View Detail</a>
                            <a href=" " class="btn btn-sm text-dark p-0 "><i class="fas fa-shopping-cart text-primary mr-1 "></i>Add To Cart</a>
                        </div>
                    </div>
                    <div class="card product-item border-0 " style="background-color: #FFEFD5;">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0 ">
                            <a href="xxl.php"><img class="img-fluid w-100 " src="img/xxlbox.jpg " alt=" "></a>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3 ">
                            <h6 class="text-truncate mb-3 ">กล่องสุ่มไซส์ XXL</h6>
                            <div class="d-flex justify-content-center ">
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
                        <div class="card-footer d-flex justify-content-between border " style="background-color: #FFEFD5;">
                            <a href="xxl.php" class="btn btn-sm text-dark p-0 "><i class="fas fa-eye text-primary mr-1 "></i>View Detail</a>
                            <a href=" " class="btn btn-sm text-dark p-0 "><i class="fas fa-shopping-cart text-primary mr-1 "></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Back to Top -->
    <a href="# " class="btn btn-primary back-to-top "><i class="fa fa-angle-double-up "></i></a>

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

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js "></script>
    <script src="lib/easing/easing.min.js "></script>
    <script src="lib/owlcarousel/owl.carousel.min.js "></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js "></script>
    <script src="mail/contact.js "></script>

    <!-- Template Javascript -->
    <script src="js/main.js "></script>
    <script>
        function myFunction(smallImg) {
            var fullImg = document.getElementById("imageBox");
            fullImg.src = smallImg.src;
        }
    </script>
</body>

</html>