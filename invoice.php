
<?php
// Include your database connection file
$host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'testwpl';

$connection = mysqli_connect($host, $db_user, $db_password, $db_name);

if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}

// Get the data sent from JavaScript
$data = json_decode(file_get_contents('php://input'), true);

// Extract data from the received JSON
$fullname = $data['fullname'];
$email = $data['email'];
$mobileNumber = $data['mobileNumber'];
$deliveryAddress = $data['deliveryAddress'];
$itemsOrdered = $data['itemsOrdered'];
$subTotal = $data['subTotal'];
$deliveryCost = $data['deliveryCost'];
$grandTotal = $data['grandTotal'];

// Prepare and execute the SQL query to insert the data into the database
$query = "INSERT INTO invoice (fullname, email, mobileNumber, deliveryAddress, itemsOrdered, subTotal, deliveryCost, grandTotal)
          VALUES ('$fullname', '$email', '$mobileNumber', '$deliveryAddress', '$itemsOrdered', '$subTotal', '$deliveryCost', '$grandTotal')";

if ($connection->query($query) === TRUE) {
    echo "Order inserted successfully.";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}

// Close the database connection
$connection->close();
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPL | Order Confirmation</title>


    <link rel="stylesheet" href="css/invoiceStyle.css">

    <style>
      
    </style>
</head>

<body>
    <div class="confirmation-container">
        <h1><b>Your Order Has Been Placed!</b></h1>
        <img src="images/icons/tick.jpg" alt="none" width="200px" height="200px"><br><br>
        <p><b>Thank you for shopping with us!</b></p><br><br>
        <p>Your order has been successfully placed and is being processed.</p>
        <p>For any inquiries, please contact our customer support.</p><br>
        <a href="index.php" class="home-link">BACK TO HOME</a>
    </div>
</body>

</html>