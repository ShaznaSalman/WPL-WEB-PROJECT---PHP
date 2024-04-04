<?php
// Get the input value from the form
$username = $_POST['username'];

include_once('dbconn.php');

// Query the database to check if the value exists
$query = "SELECT fullname,email,mobileNumber FROM login_detail WHERE username = '$username'";
$result = $connection->query($query);


if ($result->num_rows > 0) {
   // Value exists in the database
   $row = $result->fetch_assoc();

   $mobileNumber = $row['mobileNumber'];
   $fullname = $row['fullname'];
   $email = $row['email'];
} else {
   // Value does not exist in the database
   $mobileNumber = "Number not available";
   $fullname = "User not found";
   $email = "Email not found";
}

?>

<?php
include_once('dbconn.php'); // Include your database connection file

// Query to retrieve data inserted within the last minute

$query = "SELECT * FROM cart_item
          WHERE timeNow >= NOW() - INTERVAL 1 MINUTE";
$result = $connection->query($query);

$totalPrice = 0; // Initialize total price

if ($result) {
   while ($row = $result->fetch_assoc()) {
      $details .= "<b>Item Name: </b>" . $row['name'] . "<br>";
      $details .= "<b>Quantity: </b>" . $row['count'] . "<br>";
      $details .= "<b>Unit Price :</b> " . $row['price'] . "<br><br>";

      $totalPrice += $row['price'] * $row['count']; // Calculate total price
   }

   // Output the total price
   //$details .= "<b>Total Price: </b> Rs " . $totalPrice;
} else {
   $details .= "No items in the cart.";
}

/*if ($result) {
   while ($row = $result->fetch_assoc()) {

      $details .= "<b>Item Name: </b>" . $row['name'] . "<br>";
      $details .= "<b>Quantity: </b>" . $row['count'] . "<br>";
      $details .= "<b>Unit Price :</b> " . $row['price'] . "<br><br>";
   }
} else {
   echo "Query error: " . mysqli_error($connection);
}*/
?>

<?php
//$totalCartValue = $_GET['totalCartValue'];
//echo 'Total Cart Value: ' . $totalCartValue;
/*if (isset($_GET['totalCartValue'])) {
   //$passedValue = $_GET['valueA'];
   $totalCartValue = $_GET['totalCartValue'];
   echo 'Total Cart Value: ' . $totalCartValue;
}*/
?>

<?php
//$subtotalValue = isset($_GET['totalCartValue']) ? $_GET['totalCartValue'] : 0;
$deliveryCost = 300.00;
$grandTotal = $totalPrice + $deliveryCost;
?>
<?php
$grandTotalFromURL = isset($_GET['grandTotal']) ? $_GET['grandTotal'] : 0;
?>



<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>WPL Hardware| Your Cart</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

   <script src="https://kit.fontawesome.com/7507f1b470.js" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css">

   <link rel="stylesheet" href="css/cart_model.css">
   <link rel="stylesheet" href="css/catpage_style.css">
   <link rel="stylesheet" href="css/items.css">
   <link rel="stylesheet" href="css/footer.css">

   <style>
      /*overlaps with other css*/
      .container {
         justify-content: left;
         text-align: left;
      }

      @media screen and (max-width: 768px) {
         .container {
            justify-content: left;
            text-align: center;
         }
      }

      .order-summary-table {
         width: 100%;
         table-layout: fixed;
      }

      .order-summary-table td {
         width: 10%;
         padding: 5px;
      }

      .error {
         color: red;
         font-weight: bold;
      }
   </style>


</head>

<body>
   <?php include 'NavigationBar.php'; ?>

   <?php include 'model.php'; ?>

   <div class="form">

      <h2>Checkout</h2>
      <hr>
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-4">
               <div class="containForm">
                  <div>
                     <h3>Customer Details</h3>
                     <hr>
                     <form action="" method="post" id="retrieveForm">
                        <div class="row">
                           <div class="col-md-6">
                              <label>USERNAME</label>
                              <input type="text" id="username" class="username" name="username" placeholder="Enter Username" aria-required>
                           </div>
                           <div class="col-md-6">
                              <br>
                              <button type="click" style="padding: 10px 15px;" class="go">GO</button><br>
                           </div>
                        </div>

                        <label>FULL NAME</label>
                        <input type="text" id="fullname" class="fullname" name="fullname" value="<?php echo $fullname; ?>" placeholder="Your name" readonly>

                        <label>EMAIL</label>
                        <input type="text" id="email" class="email" name="email" value="<?php echo $email; ?>" placeholder="Your Email" readonly>

                        <label>MOBILE NUMBER</label>
                        <input type="text" id="mobileNumber" class="mobileNumber" name="mobileNumber" value="<?php echo $mobileNumber; ?>" placeholder="Your Mobile Number" readonly>
                     </form>
                  </div>
                  <label>Do you want your Items delivered</label><br>
                  <input type="radio" class="deliver" name="deliver" value="yes" id="deliveryes">Yes<br>
                  <input type="radio" class="deliver" name="deliver" value="no" id="deliverno">No<br><br>

               </div>

            </div>

            <div class="col-md-4">
               <div class="containForm">
                  <div class="itemform">
                     <h3>Items Details</h3>
                     <hr>
                     <form action="" method="post">
                        <br>
                        <div id="details" name="details" rows="500" cols="50"><?php echo $details; ?></div><br>

                     </form>
                  </div>
               </div>

            </div>

            <div class="col-md-4">
               <div class="deliveryform">
                  <div class="containForm">
                     <h3>Delivery Details</h3>
                     <hr>
                     <form action="" method="post">
                        <label>ADDRESS</label>
                        <input type="text" class="address" placeholder="Enter Address" id="address">

                        <label>CITY</label>
                        <input type="text" class="city" placeholder="Enter City" id="city">

                        <label>COUNTRY</label>
                        <input type="text" class="country" placeholder="Enter Country" id="country"><br>

                        <!--label>Select your delivery option:</label><br>
                        <input type="radio" class="option" value="fast">Fast Delivery (same day delivery)<br>
                        <input type="radio" class="option" value="standard">Standard Delivery (3-5 days)<br><br-->
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <span id="validationMessage" class="error"></span>
         
         <div class="message-containerL" id="messageContainerL">
            <div class="messageL" id="messageTextL"></div>
         </div>

         <button type="click" class="confirmDet" id="confirmDet" disabled>CONFIRM ORDER</button><br>

      </div>
   </div>

   <form action="invoice.php" method="post">
      <div class="form">
         <div class="deliverOrdersummary" style="display: none;">
            <h3>ORDER SUMMARY</h3><br>
            <!--p class="herep">Customer Details:</p>
         <p class="herep">Items Ordered:</p>
         <p class="herep">Subtotal:<span style="font-weight: 400;" id="subTotD">Rs. <!?php echo $subtotalValue; ?></span></p>
         <p class="herep">Delivery:<span style="font-weight: 400;" id="delivery">Rs. <!?php echo $deliveryCost; ?></span></p>
         <p class="herep">Grand Total:<span style="font-weight: bold; color: brown;" id="grandTotal">Rs. <!?php echo $grandTotal; ?></span></p-->
            <table class="order-summary-table">
               <tr>
                  <!--th colspan="2">ORDER SUMMARY</th-->
               </tr>
               <tr>
                  <td colspan="2" class="herep">Customer Details</td>
                  <td colspan="2" class="herep">Items Ordered</td>
                  <td colspan="2" class="herep">Subtotal</td>
                  <td colspan="2" class="herep">Delivery</td>
                  <td colspan="2" class="herep">Grand Total</td>
               <tr>

                  <td colspan="2">
                     <form action="" id="targetForm">
                        <p><b>FullName:&nbsp;&nbsp;&nbsp;</b> <span style="font-weight: 400;" id="fn"><?php echo $fullname; ?></span></p>
                        <p><b>Email:&nbsp; &nbsp; &nbsp; </b><span style="font-weight: 400;" id="em"><?php echo $email; ?></span></p>
                        <p><b>MobileNumber:&nbsp;&nbsp;&nbsp; </b><span style="font-weight: 400;" id="mn"><?php echo $mobileNumber; ?></span></p>
                        <p><b>Delivery Address:&nbsp;&nbsp;&nbsp; </b><span style="font-weight: 400;" id="targetAddress"></span></p>

                     </form>
                  </td>
                  <td colspan="2"><span style="font-weight: 400;" id="detA"><?php echo $details; ?></span></td>
                  <td colspan="2"><span style="font-weight: 400;" id="subTotD">Rs. <?php echo $totalPrice; ?></span></td>
                  <td colspan="2"><span style="font-weight: 400;" id="delivery">Rs. <?php echo $deliveryCost; ?></span></td>
                  <td colspan="2"><span style="font-weight: bold; color: brown;" id="grandTotal">Rs. <?php echo $grandTotal; ?></span></td>

               </tr>
            </table>

         </div>

         <div class="Ordersummary" style="display: none;">
            <h3>ORDER SUMMARY</h3><br>
            <!--p class="herep">Customer Details:</p>
         <p class="herep">Items Ordered:</p>
         <p class="herep">Grand Total: <span style="font-weight: bold; color: brown;" id="subTotC"></span></p-->

            <table class="order-summary-table">
               <tr>
                  <!--th colspan="2">ORDER SUMMARY</th-->
               </tr>
               <tr>
                  <td colspan="2" class="herep">Customer Details</td>
                  <td colspan="2" class="herep">Items Ordered</td>
                  <td colspan="2" class="herep">Grand Total</td>
               <tr>

                  <td colspan="2">
                     <form action="" id="targetForm">
                        <p><b>FullName:&nbsp;&nbsp;&nbsp;</b> <span style="font-weight: 400;" id="a"><?php echo $fullname; ?></span></p>
                        <p><b>Email:&nbsp;&nbsp;&nbsp;</b><span style="font-weight: 400;" id="b"><?php echo $email; ?></span></p>
                        <p><b>MobileNumber:&nbsp;&nbsp;&nbsp;</b><span style="font-weight: 400;" id="c"><?php echo $mobileNumber; ?></span></p>
                     </form>
                  </td>
                  <td colspan="2"><span style="font-weight: 400;" id="detB"><?php echo $details; ?></span></td>
                  <td colspan="2"><span style="font-weight: bold; color: brown;" id="subTotC">Rs. <?php echo $totalPrice; ?></span></td>

               </tr>
            </table>

         </div>

         <a href="#" id="whatsapp-link"><button type="submit" class="go" id="place-order">PLACE ORDER</button></a>
         <button type="button" class="cancelbtn" id="resettButton">CANCEL</button>

      </div>
   </form>


   <script>
      var queryString = window.location.search;
      var urlParams = new URLSearchParams(queryString);
      var totalCartValue = urlParams.get('totalCartValue');
      var totalCartElement = document.getElementById('totalCartValue');
      totalCartElement.textContent = totalCartValue;
      console.log('Total Cart Value:', totalCartValue);
   </script>

   <script src="script/cart_model.js"></script>
   <!--script src="script/shoppingCart.js"--></script>

   <?php include 'footer.php'; ?>

</body>

</html>