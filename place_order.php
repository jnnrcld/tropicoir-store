<?php
include 'db_connect.php';

$user_id = $_POST['user_id'];
$total_price = $_POST['total_price'];

$sql = "INSERT INTO orders (user_id,total_price,status) VALUES ('$user_id','$total_price','Pending')";

if(mysqli_query($conn,$sql)){
    echo "Order placed successfully";
}else{
    echo "Error placing order";
}
?>