
<?php
$p_id=$_GET['product_id'];
$product_id=$_GET['p_id'];
$name=$_GET['name'];
$image=$_GET['image'];
$price=$_GET['price'];
$star=$_GET['star'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve updated values from the form
    $new_product_id = $_POST['p_id'];
    $new_p_id = $_POST['product_id'];
    $new_name = $_POST['name'];
    $new_image = $_POST['image'];
    $new_price = $_POST['price'];
    $new_star = $_POST['star'];

    // Perform the database update here
    $host = 'localhost';      
    $db_user = 'root';    
    $db_password = ''; 
    $db_name = 'testwpl'; 
    
    $connection = mysqli_connect($host, $db_user, $db_password, $db_name);
    
    if (!$connection) {
        die('Database connection failed: ' . mysqli_connect_error());
    }

    // Prepare and execute the update query
    $update_query = "UPDATE product SET p_id = '$new_product_id', name = '$new_name', image = '$new_image', price = '$new_price', star = '$new_star' WHERE product_id = $p_id";

    if ($connection->query($update_query) === TRUE) {
        echo "Product updated successfully.";
    } else {
        echo "Error updating product: " . $connection->error;
    }

    $connection->close();
}


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">

        <label for="">product_id</label>
        <input type="text"  value="<?php echo $p_id;?>" readonly><br><br>

        <label for="">p_id</label>
        <input type="text" value="<?php echo $product_id ;?>"><br><br>
        
        <label for="">name</label>
        <input type="text" value="<?php echo $name;?>"><br><br>
        
        <label for="">image</label>
        <img src="<?php echo $image;?>" width="20px" height="20px"><br>
        <textarea name="" id="" cols="30" rows="10" ><?php echo $image;?>"</textarea><br><br>
        
        <label for="">price</label>
        <input type="text" value="<?php echo $price;?>"><br><br>
        
        <label for="">star</label>
        <input type="text"  value="<?php echo $star;?>"><br><br>
  
        <button type="submit">update</button>
    </form>


    
</body>
</html>