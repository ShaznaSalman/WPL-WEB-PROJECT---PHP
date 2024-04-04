
<?php
include_once('dbconn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cartItems'])) {
    $cartItems = $_POST['cartItems'];
    
    foreach ($cartItems as $item) {
        $name = mysqli_real_escape_string($connection, $item['name']);
        $price = $item['price'];
        $image = mysqli_real_escape_string($connection, $item['image']);
        $count = intval($item['count']);
        $total = $item['total'];
        
        // Use prepared statement to insert cart item into the database
        $stmt = $connection->prepare("INSERT INTO cart_item (image, name, price, count, total) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssidi", $image, $name, $price, $count, $total);
        
        if (!$stmt->execute()) {
            echo "Error: " . $stmt->error;
            break; // Exit the loop on error
        }
    }

    unset($_POST['cartItems']); // Unset after processing all items
    echo "Cart items added successfully!";
} else {
    echo "Add Items to your cart";
}

mysqli_close($connection);
?>



