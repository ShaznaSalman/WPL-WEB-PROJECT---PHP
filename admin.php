<?php
$host = 'localhost';      
$db_user = 'root';    
$db_password = ''; 
$db_name = 'testwpl'; 

$connection = mysqli_connect($host, $db_user, $db_password, $db_name);

if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}

session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// Admin panel content
echo "Welcome, " . $_SESSION['admin'] . "! You are now logged in as an admin.";

$query="select product_id,p_id,name,image,price,star from product";
$categories=mysqli_query($connection,$query);
?>

<!--?php
if(isset($_POST['btnedit'])){
$id=$_GET['id'];
$host = 'localhost';      
$db_user = 'root';    
$db_password = ''; 
$db_name = 'testwpl'; 

$connection = mysqli_connect($host, $db_user, $db_password, $db_name);

if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}


/*$query="select qty from product where product_id=".$id;

$categories=mysqli_query($connection,$query);

$qty="";
$id=0;

while($category=mysqli_fetch_assoc($categories)){
    $id=$category['id'];
    $qty=$category['itemqty'];

}
}*/
?-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPL Hardware| Admin </title>
</head>
<body>
<h1>Cart</h1>
    

    <table border="1" cellspacing="0" cellpadding="10" width="80%" align="center">
        <tr>
            <th>product_id</th>
            <th>p_id</th>
            <th>name</th>
            <th>image</th>
            <th>price</th>
            <th>star</th>
            <th>Alter details</th>
        </tr>

        <?php while($category=mysqli_fetch_assoc($categories)){?>
             
           <tr>
            <td><?php echo $category['product_id'];?></td>
            <td><?php echo $category['p_id'];?></td>
            <td><?php echo $category['name'];?></td>
            <td><img src="<?php echo $category['image'];?>" width="20px" height="20px"></td>
            <td><?php echo $category['price'];?></td>
            <td><?php echo $category['star'];?></td>

            <!--td><input type="text" id="price" value="<!?php echo $category['price'];?>"></td>

            <td><--?php echo $category['qty'];?->
            <form action="update.php" method="post">
            <input type="number" id="itemqty" onchange="subTotal()" name="itemqty" min="1" max="20" value="<!?php echo $category['qty'];?>">
            <--button type="submit" name="btndone" id="btndone">done</button->
            </form></td>

            <td><input type="hidden" id="subtot" value="0"></td-->
            <td>
            <a href="update.php?product_id=<?php echo $category['product_id']; ?>&p_id=<?php echo $category['p_id']; ?>&name=<?php echo $category['name']; ?>&image=<?php echo $category['image']; ?>&price=<?php echo $category['price']; ?>&star=<?php echo $category['star']; ?>"><button id="popedit" name="btnedit" style="background-color: green;">Edit</button></a-->&nbsp;
                <!--a href="adminDelete.php?id=<!?php echo $category['id'];?>"><button  style="background-color: red;">Delete</button></a-->
                <a href="adminDelete.php?product_id=<?php echo $category['product_id'];?>"><button  style="background-color: red;">Delete</button></a>

           </td>
           </tr-->



        <?php }?>
    </table>
</body>
</html>