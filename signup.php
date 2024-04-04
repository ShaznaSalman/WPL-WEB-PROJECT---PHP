<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPL Hardware| SignUp</title>
    <link rel="stylesheet" href="css/catpage_style.css">
    <link rel="stylesheet" href="css/items.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/signUpStyle.css">

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
        <form action="insert.php" method="post" id="form" style="border:1px solid #ccc">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr class="hr">

                <label for="email"><b>USERNAME</b></label>
                <input type="text" id="username" placeholder="Enter Username" name="username" required><br>

                <label for="email"><b>FULL NAME</b></label>
                <input type="text" id="fullname" placeholder="Enter fullname" name="fullname" required><br>

                <label for="email"><b>EMAIL</b></label>
                <input type="text" id="email" placeholder="Enter Email" name="email" required><br>
                <div id="emailMessage"></div>

                <label for="num"><b>MOBILE NUMBER</b></label>
                <input type="text" id="mobileNumber" placeholder="Enter mobile number" name="mobileNumber" required><br>
                <div id="numMessage"></div>

                <label for="psw"><b>PASSWORD</b></label>
                <input type="password" id="psw" placeholder="Enter Password" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> <br>

                <div id="message">
                    <h6>Password must contain the following:</h6>
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Equal to <b>8 characters</b></p>
                </div>

                <label for="conf_psw"><b>CONFIRM PASSWORD</b></label>
                <input type="password" id="cpsw" placeholder="Confirm Password" name="cpsw" required><br>
                <div id="passwordMessage"></div>

                <label>
                    <input type="checkbox" id="remember" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                <label>
                    <input type="checkbox" id="agree" name="agree" value="1" style="margin-bottom:15px">I Agree
                </label>
                <div id="AgreeMessage"></div>

                <div class="clearfix">
                    <button type="submit" class="signupbtn">SIGN UP</button><br>
                    <button type="reset" class="cancelbtn">CANCEL</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        var myInput = document.getElementById("psw");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() {
            document.getElementById("message").style.display = "block";
        }

        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() {
            document.getElementById("message").style.display = "none";
        }

        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
            // Validate lowercase letters
            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validate capital letters
            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            // Validate length
            if (myInput.value.length == 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }

        document.getElementById("email").addEventListener("keyup", function() {
            const emailInput = this.value;
            const emailMessage = document.getElementById("emailMessage");

            if (emailInput.indexOf("@") === -1) {
                emailMessage.textContent = "Please enter '@' for a valid email address.";
                emailMessage.style.color = "red";
            } else if (emailInput.indexOf(".com") === -1) {
                emailMessage.textContent = "Please enter a '.com' for a valid email address";
                emailMessage.style.color = "red";
            } else {
                emailMessage.textContent = ""; // Clear the message if email is valid
            }
        });

        document.getElementById("mobileNumber").addEventListener("keyup", function() {
            const mobileNumberInput = this.value;
            const mobileNumberMessage = document.getElementById("numMessage");

            if (mobileNumberInput.length !== 10) {
                mobileNumberMessage.textContent = "Please enter a valid 10-digit mobile number.";
                mobileNumberMessage.style.color = "red";
            } else if (isNaN(mobileNumberInput)) {
                mobileNumberMessage.textContent = "Please enter a valid mobile number.";
                mobileNumberMessage.style.color = "red";
            } else {
                mobileNumberMessage.textContent = ""; // Clear the message if mobile number is valid
            }
        });

        document.getElementById("form").addEventListener("submit", function(event) {
            var password = document.getElementById("psw").value;
            var confirmPassword = document.getElementById("cpsw").value;

            const passwordMessage = document.getElementById("passwordMessage");

            if (password === confirmPassword) {
                passwordMessage.textContent = "Password and confirm password match.";
                passwordMessage.style.color = "green";
            } else {
                passwordMessage.textContent = "Password and confirm password do not match.";
                passwordMessage.style.color = "red";
                event.preventDefault(); // Prevent form submission if passwords don't match
            }

            const agreeCheckbox = document.getElementById("agree").value; // Reference to the "I Agree" checkbox
            const AgreeMessage = document.getElementById("AgreeMessage");

            if (!agreeCheckbox === 1) {
                AgreeMessage.textContent = "Can not proceed further without agreeing to Terms and Conditions ";
                AgreeMessage.style.color = "red";
                event.preventDefault(); // Prevent form submission if checkbox is not ticked
            } else {
                AgreeMessage.textContent = "agreed"; // Clear the message if checkbox is ticked
                AgreeMessage.style.color = "green";
            }

        });

        document.getElementById("cpws").addEventListener("keyup", function() {
            var password = document.getElementById("psw").value;
            var confirmPassword = document.getElementById("cpsw").value;
            const passwordMessage = document.getElementById("passwordMessage");


            if (password === confirmPassword) {
                passwordMessage.textContent = "Password and confirm password match.";
                passwordMessage.style.color = "green";
            } else {
                passwordMessage.textContent = "Password and confirm password do not match.";
                passwordMessage.style.color = "red";
            }
        });
    </script>

  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   
   <script src="script/shoppingCart.js"></script>
   <script src="script/signup.js"></script>
      
    <?php include 'footer.php'; ?>
</body>

</html>