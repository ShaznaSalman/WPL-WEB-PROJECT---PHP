<?php
session_start();
include_once('dbconn.php');



$adminUsername = 'admin';
$adminPassword = 'admin123';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['psw'];
    
    if ($username === $adminUsername && $password === $adminPassword) {
        $_SESSION['admin'] = $username;
        header("Location: admin.php"); // Redirect to admin panel
        exit();
    } else {
        echo "Invalid credentials. <a href='login.php'>Try again</a>";
    }
    $query = "SELECT * FROM login_detail WHERE username='$username'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row && $password === $row['password']) {
            $_SESSION['username'] = $username;
            $message = 'Login successful!';
            header("Location: cart_model.php");
            //header("Location:index.php");
            exit();
        } else {
            $message = 'Invalid username or password.';
        }
    } else {
        $message = 'Query execution error: ' . mysqli_error($connection);
    }

    mysqli_close($connection);
}

?>



<!--?php
session_start();
include_once('dbconn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['psw'];

    $query = "SELECT * FROM login_detail WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Query execution successful
        $row_count = mysqli_num_rows($result);

        if (mysqli_num_rows($result) == 1) {
            // Successful login
            $_SESSION['username'] = $username;
            $_SESSION['psw'] = $password;
            $message = '<div class="success-message">Login successful!</div>';

            header("Location: cart_model.php");
        } else {
            $message = '<div class="error-message">Invalid username or password.</div>';
            //header("Location: login.php");
        }
    } else {
        // Query execution failed
        $message = '<div class="error-message">Query execution error: ' . mysqli_error($connection) . '</div>';
    }
}

mysqli_close($connection);
?-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPL Hardware| Invalid details</title>
    <link rel="stylesheet" href="css/catpage_style.css">
    <link rel="stylesheet" href="css/items.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/errorStyle.css">


    <style>
        /*overlapping css*/

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
            <center>Error Occured!</center>
        </h2>
        <p>
            <center>Please check your form for invalid inputs</center>
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