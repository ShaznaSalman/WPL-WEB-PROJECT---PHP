<?php
include_once('dbconn.php');

$username = $_POST['username'];
$email = $_POST['email'];
$mobileNumber = $_POST['mobileNumber'];
$fullname = $_POST['fullname'];
$psw = $_POST['psw'];

$query = "INSERT INTO login_detail (username,fullname,email, mobileNumber, password) VALUES ('$username','$fullname', '$email', '$mobileNumber', '$psw')";
$result = mysqli_query($connection, $query);

if ($result) {
    $message = '<div class="success-message">Login successful!</div>';
} else {
    $message = '<div class="error-message">Login Failed!</div>';
}
mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPL Hardware| Account created</title>
    <link rel="stylesheet" href="css/catpage_style.css">
    <link rel="stylesheet" href="css/items.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/insertStyle.css">

    <style>

        @media screen and (max-width: 768px) {
            .container {
                justify-content: left;
                text-align: center;
            }
        }
    </style>
    
</head>

<body>
    <?php include 'NavigationBar.php'; ?>
    <?php include 'model.php'; ?>
    <div id="messageContainer">
    </div>
    <form action="login.php" class="form">
        <h2>
            <center>SUCCESS!</center>
        </h2>
        <p>
            <center>Your Account has been created.</center>
        </p>
        <button type="submit" class="btnReturn">RETURN</button>
    </form>

    <script>
        document.getElementById('messageContainer').innerHTML = '<?php echo addslashes($message); ?>';
    </script>

    <script src="script/shoppingCart.js"></script> 
    
    <?php include 'footer.php'; ?>
</body>

</html>