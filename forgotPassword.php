<?php
// Get the input value from the form
$forgotEmail = $_POST['forgotEmail'];

include_once('dbconn.php');

// Query the database to check if the value exists
$query = "SELECT password,username FROM login_detail WHERE email = '$forgotEmail'";
$result = $connection->query($query);


if ($result->num_rows > 0) {
    // Value exists in the database
    $row = $result->fetch_assoc();

    $getPass = $row['password']; // Fetch password
    $user = $row['username']; // Fetch user

} else {
    // Value does not exist in the database
    $getPass = "Password not available";
    $user ="User not found";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPL Hardware| Forgot Password</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/7507f1b470.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/catpage_style.css">
    <link rel="stylesheet" href="css/items.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/forgotPStyle.css">

    <style>
        /* Overlapping with the bootstrap CSS included */
        

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
    <div class="form">
        <div class="container">
            <h2>Retrieve Password</h2>
            <p style="color:red; font-weight: bold;">Enter your email to retrieve your password.</p><br>
            <form action="" method="post" id="retrieveForm">

                <label for="psw"><b>EMAIL</b></label>
                <input type="text" id="forgotEmail" class="forgotEmail" name="forgotEmail" placeholder="Enter Email" required>

                <button type="submit" class="forgot">RETRIEVE PASSWORD</button>
                
                <label for="psw"><b>USERNAME</b></label>
                <input type="text" class="user" id="user" placeholder="Your Username" name="user" value="<?php echo $user; ?>" readonly > <br>


                <label for="ret_psw"><b>RETRIEVED PASSWORD</b></label>
                <input type="text" class="getPass" id="getPass" placeholder="Your Password" name="getPass" value="<?php echo $getPass; ?>" readonly ><br>
                
                <button type="button" id="resetButton" class="cancelbtn" onclick="click()">CANCEL</button>

            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   
    <script src="script/shoppingCart.js"></script>
    <script src="script/forgotPass.js"></script>

    <?php include 'footer.php'; ?>

</body>
</html>

