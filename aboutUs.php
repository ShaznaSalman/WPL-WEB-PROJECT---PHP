<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPL Hardware|About Us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/7507f1b470.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/7507f1b470.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/aboutUs.css">
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
    </style>

</head>

<body>

    <?php include 'NavigationBar.php'; ?>
    <?php include 'model.php'; ?>

    <body>
        <div class="container">
            <div class="header">
                <h1>ABOUT US</h1>
                <hr color="orange">
                <p>Welcome to WPL Hardware Store, your trusted partner for all your hardware needs. Since our establishment, we've been dedicated to providing high-quality products and exceptional service to our valued customers.</p>
            </div>

            <div class="main-content">
                <h2>OUR HISTORY</h2>
                <hr color="grey">
                <p>Founded in 2011, WPL Hardware Store has evolved from a small shop to a reputable hardware destination. Over the years, we've strived to stay at the forefront of the industry by offering the latest products and innovative solutions.</p>

                <br>
                <h2>OUR VALUES</h2>
                <hr color="grey">
                <ul>
                    <li><strong>Quality:</strong> We ensure that every product we offer meets the highest standards of quality and durability.</li>
                    <li><strong>Customer Satisfaction:</strong> Our customers are at the heart of our business, and we're committed to exceeding their expectations.</li>
                    <li><strong>Integrity:</strong> We conduct our business with honesty and transparency, building trust with our customers and partners.</li>
                    <li><strong>Innovation:</strong> We stay up-to-date with industry trends to bring you the latest products and solutions.</li>
                </ul>
                <br>

                <h2>OUR MISSION </h2>
                <hr color="grey">
                <p>Our mission is to provide a comprehensive range of hardware products that cater to the needs of contractors, DIY enthusiasts, and homeowners.
                    We aim to be a one-stop destination for quality tools, building materials, and accessories.</p>
                <br>
            </div>
        </div>

        <?php include 'footer.php'; ?>
        <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="script/shoppingCart.js"></script>

    </body>

</html>