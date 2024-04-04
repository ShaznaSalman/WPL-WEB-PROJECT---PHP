<?php
include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPLHarware|Home Accessories</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css">

    <link rel="stylesheet" href="css/catpage_style.css">
    <link rel="stylesheet" href="css/items.css">
    <link rel="stylesheet" href="css/footer.css">

    <style>
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
    <?php include 'scroll.php'; ?>

    <div class="form">
        <header>
            <h1 id="homeKitchen">HOME AND KITCHEN</h1>
        </header>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="row">
                <div class="col-md-3">
                    <div class="form">
                        <?php include 'category_chart.php'; ?>
                        <br><br><br><br><br><br>
                    </div>
                    <div class="form">
                        <?php include 'advertise1.php'; ?>
                        <br><br><br>
                    </div>
                    <div class="form">
                        <img src="images/advertistments/Adver1.jpg" alt="none">
                        <br><br><br>
                    </div>
                    <div class=form>
                    <img src="images/advertistments/Adver7.jpg" alt="Slide 1" >
                    <br><br><br>
                    </div>
                  
                </div>
                <div class="col-md-9">
                    <div class="formA">
                        <div class="category-img">
                            <div class="img-fluid">
                                <img src="images/banners/banner4.jpg" alt="">
                            </div>
                            <section class="form">
                                <center>
                                    <h2 style="color:#5A5A5A; font-weight:bold; margin-bottom: 10px;" id="cleaning">CLEANING</h2>
                                    <span><b>Introducing our comprehensive cleaning solutions, designed to ensure cleanliness and hygiene in every aspect of your space. Our cleaning products are meticulously crafted to provide effective results, promoting a healthy environment and a polished appearance. From surfaces to fabrics, our range of cleaning solutions guarantees superior performance and a fresh, revitalized feel. Explore our collection and discover the perfect cleaning products to maintain your surroundings with excellence.</b></span> 
                                </center>
                                <section class="category" id="cleaner">
                                    <h2 style="color:navy">KITCHEN AND OVEN CLEANER</h2>
                                    <span>Introducing our Kitchen and Oven Cleaner collection – your ultimate solution for a spotless and gleaming culinary space. Our specialized cleaners are meticulously formulated to cut through grease, grime, and tough residues, leaving your kitchen and oven surfaces sparkling clean. From stovetops to ovens, our products ensure thorough cleaning and a refreshed kitchen environment. Explore our range and experience the power of our Kitchen and Oven Cleaners in maintaining hygiene and enhancing the heart of your home.</span> 
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="product-slider">
                                                    <div class="tab featured-tab-area">
                                                        <div class="tab_content current active pt-45">
                                                            <div class="tabs_item current">
                                                                <div class="row justify-content-center">
                                                                    <?php
                                                                    $query = "SELECT * FROM product WHERE p_id='clean';";
                                                                    $categories = mysqli_query($connection, $query);

                                                                    if ($categories) {
                                                                        while ($category = mysqli_fetch_assoc($categories)) {
                                                                    ?>
                                                                            <div class="col-lg-3 col-md-6">
                                                                                <div class="featured-item">
                                                                                    <div class="featured-item-img">
                                                                                        <a href="#">
                                                                                            <img src="<?php echo $category['image']; ?>" style="width: auto;">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="content">
                                                                                        <h3><a href="#"><?php echo $category['name']; ?></a></h3>
                                                                                        <hr>
                                                                                        <div class="content-in">
                                                                                            <h4><?php echo $category['price']; ?></h4>
                                                                                            <span><?php echo $category['star']; ?><i class="fa fa-star"></i></span>
                                                                                        </div>
                                                                                        <hr>
                                                                                        <div class="featured-content-list">
                                                                                            <button type="button" data-image="<?php echo $category['image'] ?>" data-name="<?php echo $category['name']; ?>" data-price="<?php echo $category['price']; ?>" class="default-btn border-radius-5">Add to cart</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    <?php
                                                                        }
                                                                    } else {
                                                                        echo "Query error: " . mysqli_error($connection);
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    </section>
                                </section>
                                <section class="category" id="bathroom">
                                    
                                    <h2 style="color:navy">BATHROOM CLEANER</h2>
                                    <span>Introducing our Bathroom Cleaner collection – your go-to solution for maintaining a pristine and sanitized bathroom space. Our specialized cleaners are meticulously formulated to tackle soap scum, mold, and grime, leaving your bathroom surfaces sparkling and fresh. From sinks to tiles, our products ensure thorough cleaning and a revitalized bathroom environment. Explore our range and discover the effectiveness of our Bathroom Cleaners in promoting hygiene and transforming your bathing space into a sanctuary of cleanliness.</span>
                                    
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php
                                                                $query = "SELECT * FROM product WHERE p_id='';";
                                                                $categories = mysqli_query($connection, $query);

                                                                if ($categories) {
                                                                    while ($category = mysqli_fetch_assoc($categories)) {
                                                                ?>
                                                                        <div class="col-lg-3 col-md-6">
                                                                            <div class="featured-item">
                                                                                <div class="featured-item-img">
                                                                                    <a href="#">
                                                                                        <img src="<?php echo $category['image']; ?>" style="width: auto;">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="content">
                                                                                    <h3><a href="#"><?php echo $category['name']; ?></a></h3>
                                                                                    <hr>
                                                                                    <div class="content-in">
                                                                                        <h4><?php echo $category['price']; ?></h4>
                                                                                        <span <?php echo $category['star']; ?>><i class="fa fa-star"></i></span>
                                                                                    </div>
                                                                                    <hr>
                                                                                    <div class="featured-content-list">
                                                                                        <button type="button" data-image="<?php echo $category['image'] ?>" data-name="<?php echo $category['name']; ?>" data-price="<?php echo $category['price']; ?>" class="default-btn border-radius-5">Add to cart</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                <?php
                                                                    }
                                                                } else {
                                                                    echo "Query error: " . mysqli_error($connection);
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </section>

                                <section class="category" id="floor">
                                    <h2 style="color:navy">FLOOR CLEANER AND WIPES</h2>
                                    <span>Introducing our Floor Cleaner and Wipes collection – the perfect duo for a spotless and inviting environment. Our Floor Cleaners are meticulously formulated to effectively lift dirt and stains, leaving your floors gleaming and fresh. Paired with our convenient wipes, cleaning becomes effortless as you effortlessly wipe away messes, ensuring a clean and inviting space. Explore our range and experience the power of our Floor Cleaner and Wipes in transforming your floors into a reflection of cleanliness and comfort.</span> 
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='';";
                                                                $categories = mysqli_query($connection, $query);

                                                                if ($categories) {
                                                                    while ($category = mysqli_fetch_assoc($categories)) {
                                                                ?>
                                                                        <div class="col-lg-3 col-md-6">
                                                                            <div class="featured-item">
                                                                                <div class="featured-item-img">
                                                                                    <a href="#">
                                                                                        <img src="<?php echo $category['image'] ?>" style="width: 200px;">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="content">
                                                                                    <h3><a href="#"><?php echo $category['name']; ?></a></h3>
                                                                                    <hr>
                                                                                    <div class="content-in">
                                                                                        <h4><?php echo $category['price']; ?></h4>
                                                                                        <span> <?php echo $category['star']; ?><i class="fa fa-star"></i></span>
                                                                                    </div>
                                                                                    <hr>
                                                                                    <div class="featured-content-list">
                                                                                        <button type="button" data-image="<?php echo $category['image'] ?>" data-name="<?php echo $category['name']; ?>" data-price="<?php echo $category['price']; ?>" class="default-btn border-radius-5">Add to cart</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                <?php
                                                                    }
                                                                } else {
                                                                    echo "Query error: " . mysqli_error($connection);
                                                                }
                                                                ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </section>
                                </section>
                                <section class="category" id="other1">
                                    <h2 style="color:navy">OTHER </h2>
                                    <span>Explore our diverse range of home accessories, carefully curated to add a touch of style and functionality to every corner of your living space. From unique decor pieces to practical essentials, our collection of 'Other Home Accessories' is designed to cater to your specific preferences and needs. Discover innovative solutions that elevate your interior design, and find those special accents that complete your home's personality. Explore the possibilities and transform your living spaces with our exceptional selection of home accessories.</span>   
                                      <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='';";
                                                                $categories = mysqli_query($connection, $query);

                                                                if ($categories) {
                                                                    while ($category = mysqli_fetch_assoc($categories)) {
                                                                ?>
                                                                        <div class="col-lg-3 col-md-6">
                                                                            <div class="featured-item">
                                                                                <div class="featured-item-img">
                                                                                    <a href="#">
                                                                                        <img src="<?php echo $category['image'] ?>" style="width: 200px;">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="content">
                                                                                    <h3><a href="#"><?php echo $category['name']; ?></a></h3>
                                                                                    <hr>
                                                                                    <div class="content-in">
                                                                                        <h4><?php echo $category['price']; ?></h4>
                                                                                        <span><?php echo $category['star']; ?><i class="fa fa-star"></i></span>
                                                                                    </div>
                                                                                    <hr>
                                                                                    <div class="featured-content-list">
                                                                                        <button type="button" data-image="<?php echo $category['image'] ?>" data-name="<?php echo $category['name']; ?>" data-price="<?php echo $category['price']; ?>" class="default-btn border-radius-5">Add to cart</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                <?php
                                                                    }
                                                                } else {
                                                                    echo "Query error: " . mysqli_error($connection);
                                                                }

                                                                ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </section>
                                </section>

                            </section>
                            <section class="form">
                                <center>
                                    <h2 style="color:#5A5A5A; font-weight:bold; margin-bottom: 10px;" id="kitch">KITCHENWARE</h2>
                                    <span><b>Discover our exquisite range of kitchenware, thoughtfully curated to enhance your culinary experience and elevate your kitchen aesthetics. From essential cookware to specialized tools, our collection offers a blend of functionality and style, designed to meet the demands of both aspiring chefs and seasoned cooks. Explore our kitchenware selection and unlock a world of culinary possibilities, where quality and design harmonize to create exceptional dishes and memorable moments in your kitchen.</b></span>     
                                <hr>
                                </center>
                                <section class="category" id="kTap">
                                    <h2 style="color:navy">KITCHEN SINKS AND TAPS</h2>
                                    <span>Introducing our Kitchen Sinks and Taps collection – a fusion of practicality and elegance designed to redefine your kitchen space. Our meticulously chosen selection of sinks and taps offers a variety of styles, materials, and functionalities to suit your needs and preferences. From sleek modern designs to classic aesthetics, our collection transforms your kitchen into a hub of functionality and sophistication. Explore our range and discover how our Kitchen Sinks and Taps can elevate your cooking and cleaning experience with unmatched excellence.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="product-slider">
                                                    <div class="tab featured-tab-area">
                                                        <div class="tab_content current active pt-45">
                                                            <div class="tabs_item current">
                                                                <div class="row justify-content-center">
                                                                    <?php
                                                                    $query = "SELECT * FROM product WHERE p_id='kitchenware';";
                                                                    $categories = mysqli_query($connection, $query);

                                                                    if ($categories) {
                                                                        while ($category = mysqli_fetch_assoc($categories)) {
                                                                    ?>
                                                                            <div class="col-lg-3 col-md-6">
                                                                                <div class="featured-item">
                                                                                    <div class="featured-item-img">
                                                                                        <a href="#">
                                                                                            <img src="<?php echo $category['image']; ?>" style="width: auto;">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="content">
                                                                                        <h3><a href="#"><?php echo $category['name']; ?></a></h3>
                                                                                        <hr>
                                                                                        <div class="content-in">
                                                                                            <h4><?php echo $category['price']; ?></h4>
                                                                                            <span><?php echo $category['star']; ?><i class="fa fa-star"></i></span>
                                                                                        </div>
                                                                                        <hr>
                                                                                        <div class="featured-content-list">
                                                                                            <button type="button" data-image="<?php echo $category['image'] ?>" data-name="<?php echo $category['name']; ?>" data-price="<?php echo $category['price']; ?>" class="default-btn border-radius-5">Add to cart</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    <?php
                                                                        }
                                                                    } else {
                                                                        echo "Query error: " . mysqli_error($connection);
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    </section>
                                </section>
                                <section class="category" id="kItem">
                                    <h2 style="color:navy">KITCHEN ITEMS</h2>
                                    <span>Explore our comprehensive assortment of kitchen items, meticulously curated to cater to every culinary need and aesthetic preference. From essential cookware and utensils to stylish serving sets and innovative gadgets, our collection encompasses the heart of your kitchen's functionality and design. Discover the perfect blend of quality and aesthetics as you explore our range, and witness how these kitchen items can transform your cooking space into a realm of culinary excellence and creative expression.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php
                                                                $query = "SELECT * FROM product WHERE p_id='sinks';";
                                                                $categories = mysqli_query($connection, $query);

                                                                if ($categories) {
                                                                    while ($category = mysqli_fetch_assoc($categories)) {
                                                                ?>
                                                                        <div class="col-lg-3 col-md-6">
                                                                            <div class="featured-item">
                                                                                <div class="featured-item-img">
                                                                                    <a href="#">
                                                                                        <img src="<?php echo $category['image']; ?>" style="width: auto;">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="content">
                                                                                    <h3><a href="#"><?php echo $category['name']; ?></a></h3>
                                                                                    <hr>
                                                                                    <div class="content-in">
                                                                                        <h4><?php echo $category['price']; ?></h4>
                                                                                        <span <?php echo $category['star']; ?>><i class="fa fa-star"></i></span>
                                                                                    </div>
                                                                                    <hr>
                                                                                    <div class="featured-content-list">
                                                                                        <button type="button" data-image="<?php echo $category['image'] ?>" data-name="<?php echo $category['name']; ?>" data-price="<?php echo $category['price']; ?>" class="default-btn border-radius-5">Add to cart</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                <?php
                                                                    }
                                                                } else {
                                                                    echo "Query error: " . mysqli_error($connection);
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </section>

                            <section class="form">
                                <center>
                                    <h2 style="color:#5A5A5A; font-weight:bold; margin-bottom: 10px;" id="house">HOUSEHOLD ITEMS</h2>
                                    <span><b>Discover our extensive range of household items, thoughtfully assembled to enrich every facet of your living space. From practical essentials to decorative accents, our collection of household items caters to your day-to-day needs and interior design aspirations. Explore a world of convenience, comfort, and style as you navigate through our curated selection, and experience how these items seamlessly integrate into your home to create an environment that embodies both functionality and aesthetics.</b></span>
                                </center>
                                <section class="category" id="rack">
                                    <h2 style="color:navy">RACKS</h2>
                                    <span>Introducing our Racks collection – an array of storage solutions meticulously designed to organize and optimize your living spaces. From versatile shelving units to stylish wall racks, our collection offers a diverse range of options to cater to your storage needs while enhancing your decor. Explore our range of racks and discover how these practical yet stylish pieces can bring order and elegance to your surroundings, transforming cluttered spaces into organized sanctuaries.</span> 
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='';";
                                                                $categories = mysqli_query($connection, $query);

                                                                if ($categories) {
                                                                    while ($category = mysqli_fetch_assoc($categories)) {
                                                                ?>
                                                                        <div class="col-lg-3 col-md-6">
                                                                            <div class="featured-item">
                                                                                <div class="featured-item-img">
                                                                                    <a href="#">
                                                                                        <img src="<?php echo $category['image'] ?>" style="width: 200px;">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="content">
                                                                                    <h3><a href="#"><?php echo $category['name']; ?></a></h3>
                                                                                    <hr>
                                                                                    <div class="content-in">
                                                                                        <h4><?php echo $category['price']; ?></h4>
                                                                                        <span> <?php echo $category['star']; ?><i class="fa fa-star"></i></span>
                                                                                    </div>
                                                                                    <hr>
                                                                                    <div class="featured-content-list">
                                                                                        <button type="button" data-image="<?php echo $category['image'] ?>" data-name="<?php echo $category['name']; ?>" data-price="<?php echo $category['price']; ?>" class="default-btn border-radius-5">Add to cart</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                <?php
                                                                    }
                                                                } else {
                                                                    echo "Query error: " . mysqli_error($connection);
                                                                }
                                                                ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </section>
                                </section>
                                <section class="category" id="wiper">
                                    <h2 style="color:navy">WIPERS</h2>
                                    <span>Introducing our Wipers collection – a lineup of cleaning essentials meticulously crafted to provide streak-free clarity and a spotless finish. From versatile window wipers to durable floor squeegees, our collection offers a range of options designed to make cleaning tasks efficient and effective. Explore our wipers selection and experience the power of these tools in maintaining crystal-clear surfaces and ensuring a clean, inviting atmosphere throughout your spaces.</span> 
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='';";
                                                                $categories = mysqli_query($connection, $query);

                                                                if ($categories) {
                                                                    while ($category = mysqli_fetch_assoc($categories)) {
                                                                ?>
                                                                        <div class="col-lg-3 col-md-6">
                                                                            <div class="featured-item">
                                                                                <div class="featured-item-img">
                                                                                    <a href="#">
                                                                                        <img src="<?php echo $category['image'] ?>" style="width: 200px;">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="content">
                                                                                    <h3><a href="#"><?php echo $category['name']; ?></a></h3>
                                                                                    <hr>
                                                                                    <div class="content-in">
                                                                                        <h4><?php echo $category['price']; ?></h4>
                                                                                        <span> <?php echo $category['star']; ?><i class="fa fa-star"></i></span>
                                                                                    </div>
                                                                                    <hr>
                                                                                    <div class="featured-content-list">
                                                                                        <button type="button" data-image="<?php echo $category['image'] ?>" data-name="<?php echo $category['name']; ?>" data-price="<?php echo $category['price']; ?>" class="default-btn border-radius-5">Add to cart</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                <?php
                                                                    }
                                                                } else {
                                                                    echo "Query error: " . mysqli_error($connection);
                                                                }
                                                                ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </section>
                                </section>
                                <section class="category" id="broom">
                                    <h2 style="color:navy">BROOMS</h2>
                                    <span>Discover our Brooms collection – a selection of cleaning essentials meticulously designed to sweep away dirt and dust, leaving your spaces immaculate. From traditional brooms to modern innovations, our collection offers a variety of options to suit your cleaning preferences. Whether you're tidying up indoors or outdoors, our brooms are engineered for efficiency and durability, making your cleaning tasks a breeze. Explore our brooms selection and experience how these versatile tools can keep your surroundings tidy and inviting with ease.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="product-slider">
                                                    <div class="tab featured-tab-area">
                                                        <div class="tab_content current active pt-45">
                                                            <div class="tabs_item current">
                                                                <div class="row justify-content-center">
                                                                    <?php
                                                                    $query = "SELECT * FROM product WHERE p_id='';";
                                                                    $categories = mysqli_query($connection, $query);

                                                                    if ($categories) {
                                                                        while ($category = mysqli_fetch_assoc($categories)) {
                                                                    ?>
                                                                            <div class="col-lg-3 col-md-6">
                                                                                <div class="featured-item">
                                                                                    <div class="featured-item-img">
                                                                                        <a href="#">
                                                                                            <img src="<?php echo $category['image']; ?>" style="width: auto;">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="content">
                                                                                        <h3><a href="#"><?php echo $category['name']; ?></a></h3>
                                                                                        <hr>
                                                                                        <div class="content-in">
                                                                                            <h4><?php echo $category['price']; ?></h4>
                                                                                            <span><?php echo $category['star']; ?><i class="fa fa-star"></i></span>
                                                                                        </div>
                                                                                        <hr>
                                                                                        <div class="featured-content-list">
                                                                                            <button type="button" data-image="<?php echo $category['image'] ?>" data-name="<?php echo $category['name']; ?>" data-price="<?php echo $category['price']; ?>" class="default-btn border-radius-5">Add to cart</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    <?php
                                                                        }
                                                                    } else {
                                                                        echo "Query error: " . mysqli_error($connection);
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    </section>
                                </section>
                                <section class="category" id="other2">
                                    <h2 style="color:navy">OTHER</h2>
                                    <span>Explore our diverse range of home accessories, carefully curated to add a touch of style and functionality to every corner of your living space. From unique decor pieces to practical essentials, our collection of 'Other Home Accessories' is designed to cater to your specific preferences and needs. Discover innovative solutions that elevate your interior design, and find those special accents that complete your home's personality. Explore the possibilities and transform your living spaces with our exceptional selection of home accessories.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php
                                                                $query = "SELECT * FROM product WHERE p_id='otherpl1';";
                                                                $categories = mysqli_query($connection, $query);

                                                                if ($categories) {
                                                                    while ($category = mysqli_fetch_assoc($categories)) {
                                                                ?>
                                                                        <div class="col-lg-3 col-md-6">
                                                                            <div class="featured-item">
                                                                                <div class="featured-item-img">
                                                                                    <a href="#">
                                                                                        <img src="<?php echo $category['image']; ?>" style="width: auto;">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="content">
                                                                                    <h3><a href="#"><?php echo $category['name']; ?></a></h3>
                                                                                    <hr>
                                                                                    <div class="content-in">
                                                                                        <h4><?php echo $category['price']; ?></h4>
                                                                                        <span <?php echo $category['star']; ?>><i class="fa fa-star"></i></span>
                                                                                    </div>
                                                                                    <hr>
                                                                                    <div class="featured-content-list">
                                                                                        <button type="button" data-image="<?php echo $category['image'] ?>" data-name="<?php echo $category['name']; ?>" data-price="<?php echo $category['price']; ?>" class="default-btn border-radius-5">Add to cart</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                <?php
                                                                    }
                                                                } else {
                                                                    echo "Query error: " . mysqli_error($connection);
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </section>
                                <section class="form">
                                <center>
                                    <h2 style="color:#5A5A5A; font-weight:bold; margin-bottom: 10px;" id="pest">PEST CONTROL</h2>
                                    <span><b>Discover our Pest Control solutions – a comprehensive range of products meticulously designed to keep your living spaces free from unwanted intruders. From innovative traps to effective sprays, our collection offers a variety of options to tackle pests with precision. Explore our Pest Control selection and experience the peace of mind that comes with knowing your home is protected from pests, allowing you to enjoy a comfortable and hygienic environment.</b></span>     
                                <hr>
                                </center>
                                <section class="category" id="weed">
                                    <h2 style="color:navy">WEED CONTROL</h2>
                                    <span>Introducing our Weed Control solutions – a specialized collection of products meticulously designed to help you maintain pristine outdoor spaces. From effective herbicides to innovative tools, our collection offers a range of options to keep unwanted weeds at bay. Explore our Weed Control selection and discover how our products can help you maintain beautiful gardens, lawns, and landscapes by preventing the growth of invasive plants. Enjoy the tranquility of weed-free outdoor areas with our dedicated Weed Control solutions.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="product-slider">
                                                    <div class="tab featured-tab-area">
                                                        <div class="tab_content current active pt-45">
                                                            <div class="tabs_item current">
                                                                <div class="row justify-content-center">
                                                                    <?php
                                                                    $query = "SELECT * FROM product WHERE p_id='';";
                                                                    $categories = mysqli_query($connection, $query);

                                                                    if ($categories) {
                                                                        while ($category = mysqli_fetch_assoc($categories)) {
                                                                    ?>
                                                                            <div class="col-lg-3 col-md-6">
                                                                                <div class="featured-item">
                                                                                    <div class="featured-item-img">
                                                                                        <a href="#">
                                                                                            <img src="<?php echo $category['image']; ?>" style="width: auto;">
                                                                                        </a>
                                                                                    </div>
                                                                                    <div class="content">
                                                                                        <h3><a href="#"><?php echo $category['name']; ?></a></h3>
                                                                                        <hr>
                                                                                        <div class="content-in">
                                                                                            <h4><?php echo $category['price']; ?></h4>
                                                                                            <span><?php echo $category['star']; ?><i class="fa fa-star"></i></span>
                                                                                        </div>
                                                                                        <hr>
                                                                                        <div class="featured-content-list">
                                                                                            <button type="button" data-image="<?php echo $category['image'] ?>" data-name="<?php echo $category['name']; ?>" data-price="<?php echo $category['price']; ?>" class="default-btn border-radius-5">Add to cart</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    <?php
                                                                        }
                                                                    } else {
                                                                        echo "Query error: " . mysqli_error($connection);
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    </section>
                                </section>
                                <section class="category" id="pestC">
                                    <h2 style="color:navy">PEST CONTROL</h2>
                                    <span>Explore our Pest Control solutions – a comprehensive range of products meticulously designed to keep your living spaces free from bothersome insects. From reliable insect repellents to effective traps, our collection offers a variety of options to ensure your comfort and peace of mind. Whether indoors or outdoors, our Insect Control solutions are engineered to provide protection from common pests. Discover our selection and experience the relief of an insect-free environment, allowing you to enjoy your spaces to the fullest.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php
                                                                $query = "SELECT * FROM product WHERE p_id='';";
                                                                $categories = mysqli_query($connection, $query);

                                                                if ($categories) {
                                                                    while ($category = mysqli_fetch_assoc($categories)) {
                                                                ?>
                                                                        <div class="col-lg-3 col-md-6">
                                                                            <div class="featured-item">
                                                                                <div class="featured-item-img">
                                                                                    <a href="#">
                                                                                        <img src="<?php echo $category['image']; ?>" style="width: auto;">
                                                                                    </a>
                                                                                </div>
                                                                                <div class="content">
                                                                                    <h3><a href="#"><?php echo $category['name']; ?></a></h3>
                                                                                    <hr>
                                                                                    <div class="content-in">
                                                                                        <h4><?php echo $category['price']; ?></h4>
                                                                                        <span <?php echo $category['star']; ?>><i class="fa fa-star"></i></span>
                                                                                    </div>
                                                                                    <hr>
                                                                                    <div class="featured-content-list">
                                                                                        <button type="button" data-image="<?php echo $category['image'] ?>" data-name="<?php echo $category['name']; ?>" data-price="<?php echo $category['price']; ?>" class="default-btn border-radius-5">Add to cart</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                <?php
                                                                    }
                                                                } else {
                                                                    echo "Query error: " . mysqli_error($connection);
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </section>

                            </section>
                        </div>
                        </main>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="script/shoppingCart.js"></script>
    
    <?php include 'footer.php'; ?>

</body>

</html>