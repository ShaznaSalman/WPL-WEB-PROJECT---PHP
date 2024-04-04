<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPL Hardware| Login</title>
    <link rel="stylesheet" href="css/catpage_style.css">
    <link rel="stylesheet" href="css/items.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/loginStyle.css">

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
    <div class="form">

        <form action="check.php" method="POST" id="forms">
            <div class="imgcontainer">
                <img src="images/icons/Logo.png" alt="Avatar" class="avatar" width="50px" height="200px">
            </div>

            <div class="container">
                <h1>Login</h1>
                <hr class="hr">

                <label for="uname"><b>USERNAME</b></label>
                <input type="text" class="user" placeholder="Enter Username" name="username" required>

                <label for="psw"><b>PASSWORD</b></label>
                <input type="password" class="pass" placeholder="Enter Password" name="psw" required>

                <button type="submit" class="button">LOGIN</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:lightorange">
                <button type="reset" class="cancelbtn">CANCEL</button>
                <span class="pswS ">Forgot <a href="forgotPassword.php">password?</a></span>
            </div>
        </form>
    </div>
    <div class="formSign">
        <form action="signup.php">
            <button type="submit" class="signupBtn">NO ACCOUNT? CREATE ONE HERE</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <script src="script/shoppingCart.js"></script>

    <?php include 'footer.php'; ?>

</body>

</html>