<!-- เพิ่ม database cart -->
<?php
session_start();
$data['item_id'] = $_POST['item_id'];
$data['quantity'] = $_POST['quantity'];

$User_ID = $_SESSION["User_ID"];
$cart_id = "";
$item_name = "";
$item_price = "";
$item_image = "";
echo json_encode($data);

$conn = new PDO("mysql:host=localhost;dbname=enet888;charset=utf8","root","");
$sql2 = "INSERT INTO cart (item_id,quantity,User_ID) VALUES ('$data[item_id]','$data[quantity]','$_SESSION[User_ID]')";
$conn ->exec($sql2);

$conn = new PDO("mysql:host=localhost;dbname=enet888;charset=utf8","root","");
$sql = "SELECT cart_id FROM cart";
$result = $conn->query($sql);
while($row=$result->fetch()){
    $cart_id = $row['cart_id'];
}

/*$conn = new PDO("mysql:host=localhost;dbname=enet888;charset=utf8","root","");
$sql3 = "SELECT t1.item_id,t1.User_ID,t2.item_id,t2.item_name,t2.item_price,t2.item_image FROM cart as t1 INNER JOIN item as b1 ON (t1.item_id = b1.item_id) WHERE t1.item_id = b1.item_id";
$result=$conn->query($sql3);
while($row=$result->fetch()){
       if($row['0']==1){
       $item_name = "$row[3]";
        $item_price = "$row[4]";
        $item_image = "$row[5]";
   }
} */

/*$conn = new PDO("mysql:host=localhost;dbname=enet888;charset=utf8","root","");
$sql4 = "UPDATE cart SET item_name=$item_name , item_price=$item_price ,item_image=$item_image WHERE cart_id=$cart_id "; #หา cart update ไม่ถูก
$pdoResult = $conn->prepare($sql4);
$pdoExec = $pdoResult->execute(array(":item_name"=>$item_name,":item_price"=>$item_price,":item_image"=>$item_image));
*/

?>