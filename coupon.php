<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coupon App</title>
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <style>
        .popup {
            background: rgba(0, 0, 0, 0.6);
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0%;
            display: none;
            justify-content: center;
            align-items: center;

        }

        .popup-content {
            /* height: 90%;
            width: 50%;  */
            background: #fff;
            /* padding: 20px;  */
            border-radius: 5px;
            position: relative;
        }

        .popclose {
            position: absolute;
            top: -15px;
            right: -15px;
            background: #fff;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            box-shadow: 6px 6px 29px -4px rgba(0, 0, 0, 0.75);
            cursor: pointer;
        }

        .coupon-container {
            text-align: center;
        }

        .coupon {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            height: 100%;
            margin-top: 30px;
        }

        .coupon-title {
            font-size: 34px;
            font-weight: bold;
            font-family: Georgia, 'Times New Roman', Times, serif;

        }

        .coupon-description {
            margin-top: 10px;
            font-weight: 300;
            font-family: 'Courier New', Courier, monospace;
        }

        .coupon input {
            border-radius: 5px;
            border: 1px solid;
            width: 100%;
            height: 50px;
        }

        /* Your styles here */
    </style>
</head>

<body>
    <div class="popup fixed-top">
        <div class="popup-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- <h3 align="center"><img src="images/icons/Logo.png" alt="" width="100px" height="70px"></h3> -->
                        <img src="images/icons/close.png" alt="close" class="popclose">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <img class="img-fluid" src="images/advertistments/Adver15.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <div class="coupon-container">
                            <div class="coupon">
                                <h3 align="center"><img src="images/icons/Logo.png" alt="" width="100px" height="70px"></h3>
                                <span class="coupon-title">GET 10% OFF</span>
                                <p class="coupon-description">ENTER YOUR EMAIL TO GET YOUR <br> 10% OFF DISCOUNT CODE</p>
                                <br><br><br>
                                <form id="data-form">
                                    <input type="email" id="emailInput" placeholder="Enter your email" required>
                                    <br><br>
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
        
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelector(".popup").style.display = "flex";
        });

        document.querySelector(".popclose").addEventListener("click", function() {
            document.querySelector(".popup").style.display = "none";
        });

        document.getElementById("data-form").addEventListener("submit", function(event) {
            // Prevent the form from refreshing the page
            //event.preventDefault();

            // Validate the email and submit the form if valid
            const emailInput = document.getElementById("emailInput");
            if (validateEmail(emailInput.value)) {
                
                console.log("Form submitted successfully");
            } else {
                console.log("Invalid email");
            }
        });

        function validateEmail(email) {
            // Add your own email validation logic here
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    </script>
</body>

</html>