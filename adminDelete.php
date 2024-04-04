<?php
$p_id=$_GET['product_id'];
$host = 'localhost';      
$db_user = 'root';    
$db_password = ''; 
$db_name = 'testwpl'; 

$connection = mysqli_connect($host, $db_user, $db_password, $db_name);

if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}

$query="DELETE FROM `product` WHERE `product`.`product_id` = '".$p_id."'";
mysqli_query($connection,$query);
echo "item deleted";
header('location:admin.php');
?>