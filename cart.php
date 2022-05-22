<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>Cart</title>
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
    <!-- Ajax -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
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
<center><h1>Order</h1></center>
<?php 
    if($_SESSION["role"]=="a"){
?>
        <div class="container">
        <table class="table table-striped" style="text-align:center; vertical-align:center; height:100px;">
          
        <?php
            $sum=0;
           
            echo "<tr><td>image</td><td>Name</td><td>Price</td><td>Quantity</td><td>Info</td><td>Delivering</td></tr>";
            
            $conn=new PDO("mysql:host=localhost;dbname=enet888;charset=utf8","root",""); 
           
           
            $sql="SELECT t1.cart_id,t1.item_id,t2.item_id,t2.item_name,t2.item_price,t2.item_image,t1.quantity,t1.checkout,t3.name,t3.surname,t3.address,t3.tel,t3.User_ID FROM cart as t1 INNER JOIN item as t2 INNER JOIN user as t3 ON (t1.item_id=t2.item_id)and(t1.User_ID=t3.User_ID) WHERE checkout='1'";
            $result=$conn->query($sql);
            while($row=$result->fetch())
	        {
                echo "<tr><td>"?><img src="img/<?php echo $row['5']?>" width="100px" height="100px" alt="product">
                <?php echo "</td><td>".$row['3']."</td><td>".number_format($row['4'])."</td><td>".$row['6']."</td><td>Name : ".$row['8']." ".$row['9']."<br>Address : ".$row['10']."<br>Tel : ".$row['11']."</td>
                <td><a href=cart_deliver.php?id=".$row['0']."><button>Deliver</button></a></td></tr>";
            }
            $conn=null;
        ?>
    </table>
    <center><h1>Delivering</h1></center>
    <table class="table table-striped" style="text-align:center; vertical-align:center; height:100px;">
          
        <?php
            $sum=0;
           
            echo "<tr><td>image</td><td>Name</td><td>Price</td><td>Quantity</td><td>Info</td><td>Status</td></tr>";
            
            $conn=new PDO("mysql:host=localhost;dbname=enet888;charset=utf8","root",""); 
           
           
            $sql="SELECT t1.cart_id,t1.item_id,t2.item_id,t2.item_name,t2.item_price,t2.item_image,t1.quantity,t1.checkout,t3.name,t3.surname,t3.address,t3.tel,t3.User_ID FROM cart as t1 INNER JOIN item as t2 INNER JOIN user as t3 ON (t1.item_id=t2.item_id)and(t1.User_ID=t3.User_ID) WHERE checkout='2'";
            $result=$conn->query($sql);
            while($row=$result->fetch())
	        {
                if($row['7']==2){
                echo "<tr><td>"?><img src="img/<?php echo $row['5']?>" width="100px" height="100px" alt="product">
                <?php echo "</td><td>".$row['3']."</td><td>".number_format($row['4'])."</td><td>".$row['6']."</td><td>Name : ".$row['8']." ".$row['9']."<br>Address : ".$row['10']."<br>Tel : ".$row['11']."</td>
                <td>Delivered</td></tr>";
                }
            }
            $conn=null;
        ?>
    </table>
    </div>
<?php
    }else{
?>
<center><h1>Order</h1></center>
<div class="container">
    <table class="table table-striped" style="text-align:center; vertical-align:center; height:100px;">
          <!-- ต่อ database แสดง Oder -->
        <?php
            $sum=0;
           
            echo "<tr><td>image</td><td>Name</td><td>Price</td><td>Quantity</td><td>Action</td></tr>";
            
            $conn=new PDO("mysql:host=localhost;dbname=enet888;charset=utf8","root",""); 
           
            $sql="SELECT t1.cart_id,t1.item_id,t2.item_id,t2.item_name,t2.item_price,t2.item_image,t1.quantity,t1.checkout FROM cart as t1 INNER JOIN item as t2 ON (t1.item_id=t2.item_id) WHERE t1.User_ID='$_SESSION[User_ID]'";
            $result=$conn->query($sql);
            while($row=$result->fetch())
	        {
                if($row['7']==0){
                echo "<tr><td>"?><img src="img/<?php echo $row['5']?>" width="100px" height="100px" alt="product"><?php echo "</td><td>".$row['3']."</td><td>".number_format($row['4'])."</td><td>".$row['6']."</td><td><a href=cart_delete.php?id=".$row['0']."><button>delete</button></a></td></tr>";
                $sum = $sum+($row['4']*$row['6']);
                }
            }
               
                echo "<tr><td colspan=3><center>Total</center></td><td colspan=2><center>".number_format($sum)." Baht</center></td></tr>";
            $conn=null;
        ?>
    </table>
    <a href="Purchase.php"><button style="margin-left:80% ;">Purchase</button></a>
    
    <center><h1>History</h1></center>
    <!-- History -->
    <table class="table table-striped" style="text-align:center; vertical-align:center; height:100px;">
          
        <?php
            $sum=0;
           
            echo "<tr><td>image</td><td>Name</td><td>Price</td><td>Quantity</td><td>Status</td></tr>";
            
            $conn=new PDO("mysql:host=localhost;dbname=enet888;charset=utf8","root",""); 
           
           
            $sql="SELECT t1.cart_id,t1.item_id,t2.item_id,t2.item_name,t2.item_price,t2.item_image,t1.quantity,t1.checkout FROM cart as t1 INNER JOIN item as t2 ON (t1.item_id=t2.item_id) WHERE t1.User_ID='$_SESSION[User_ID]'";
            $result=$conn->query($sql);
            while($row=$result->fetch())
	        {
                if($row['7']==1){
                echo "<tr><td>"?><img src="img/<?php echo $row['5']?>" width="100px" height="100px" alt="product"><?php echo "</td><td>".$row['3']."</td><td>".number_format($row['4'])."</td><td>".$row['6']."</td><td>Purchase Success</td></tr>";
                $sum = $sum+($row['4']*$row['6']);
                }else if($row['7']==2){
                echo "<tr><td>"?><img src="img/<?php echo $row['5']?>" width="100px" height="100px" alt="product"><?php echo "</td><td>".$row['3']."</td><td>".number_format($row['4'])."</td><td>".$row['6']."</td><td>Deliver Success</td></tr>";
                $sum = $sum+($row['4']*$row['6']);
                }
            }
            $conn=null;
        ?>
    </table>
</div>
<?php } ?>
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
</body>
</html>