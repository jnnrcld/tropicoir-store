<?php
include 'db_connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";

if(mysqli_query($conn,$sql)){
    echo "Registration successful";
}else{
    echo "Error: " . mysqli_error($conn);
}
?>