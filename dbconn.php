<?php

$host = 'localhost';      
$db_user = 'root';    
$db_password = ''; 
$db_name = 'wpl'; 

$connection = mysqli_connect($host, $db_user, $db_password, $db_name);

if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}
?>