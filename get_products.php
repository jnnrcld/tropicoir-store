<?php
include 'db_connect.php';

$sql = "SELECT * FROM products";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result)){
    echo "<div>";
    echo "<h3>".$row['name']."</h3>";
    echo "<p>".$row['description']."</p>";
    echo "<p>Price: ".$row['price']."</p>";
    echo "</div>";
}
?>