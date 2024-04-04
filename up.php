<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve updated values from the form
    $new_product_id = $_POST['p_id'];
    $new_p_id = $_POST['product_id'];
    $new_name = $_POST['name'];
    $new_image = $_POST['image'];
    $new_price = $_POST['price'];
    $new_star = $_POST['star'];

    // Perform the database update here
    $connection = new mysqli("localhost", "root", " ", "testwpl");
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Prepare and execute the update query
    $update_query = "UPDATE product SET p_id = '$new_product_id', name = '$new_name', image = '$new_image', price = '$new_price', star = '$new_star' WHERE product_id = $p_id";

    if ($connection->query($update_query) === TRUE) {
        echo "Product updated successfully.";
    } else {
        echo "Error updating product: " . $connection->error;
    }

    $connection->close();
    header('admin.php');
}
?>