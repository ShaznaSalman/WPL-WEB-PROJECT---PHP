<?php
include_once('dbconn.php'); // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from the form
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $mobileNumber = $_POST['mobileNumber'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $deliveryOption = $_POST['deliveryOption'];

    // Insert data into the database
    $insertQuery = "INSERT INTO order_details (username, fullname, email, mobileNumber, address, city, country, deliveryOption)
                    VALUES ('$username', '$fullname', '$email', '$mobileNumber', '$address', '$city', '$country', '$deliveryOption')";

    if ($connection->query($insertQuery) === TRUE) {
        echo "Order placed successfully.";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $connection->error;
    }
}
?>
