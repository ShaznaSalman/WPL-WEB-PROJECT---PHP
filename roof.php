<?php
include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPLHarware|Roofing</title>
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
            <h1 id="roof">ROOFING</h1>
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
                    <img src="images/advertistments/Adver2.jpg" alt="Slide 1" >
                    <br><br><br>
                    </div>
           
                </div>
                <div class="col-md-9">
                    <div class="formA">
                        <div class="category-img">
                            <div class="img-fluid">
                                <img src="images/banners/banner6.jpg" alt="">
                            </div>
                            <section class="form">
                                <center>
                                    <h2 style="color:#5A5A5A; font-weight:bold; margin-bottom: 10px;" id="sheet">ROOFING SHEETS </h2>
                                    <span><b>Elevate your roofing solutions with our exceptional range of roofing sheets, each meticulously designed to fortify your structures with durability, reliability, and a touch of modern innovation, ensuring reliable protection and a stylish finish for all your roofing needs.</b></span>
                                </center>
                                <section class="category" id="asbestos">
                                    <h2 style="color:navy">ASBESTOS ROOFING SHEETS</h2>
                                    <span>Enhance your roofing solutions with our exceptional range of asbestos roofing sheets, each meticulously designed to fortify your structures with durability, reliability, and a touch of modern innovation, ensuring reliable protection and a timeless finish for all your roofing needs.</span>
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
                                <section class="category" id="nonasbestos">

                                    <h2 style="color:navy">NON ASBESTOES ROOFING SHEETS</h2>
                                    <span>Elevate your roofing solutions with our exceptional range of non-asbestos roofing sheets, each meticulously designed to fortify your structures with durability, reliability, and a touch of modern innovation, ensuring dependable protection and a sleek finish for all your roofing needs.</span>

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

                                <section class="category" id="color">
                                    <h2 style="color:navy">COLORED SHEETS </h2>
                                    <span>Transform your spaces with our exceptional range of colored sheets, each meticulously designed to infuse vibrancy, durability, and a touch of modern innovation, ensuring a striking visual impact and reliable performance for all your design and covering needs.</span>
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
                                    <h2 style="color:#5A5A5A; font-weight:bold; margin-bottom: 10px;" id="ceiling"> CEILING SHEETS</h2>
                                    <span><b>Elevate your ceilings with our exceptional range of ceiling sheets, each meticulously designed to enhance your spaces with elegance, durability, and a touch of modern innovation, ensuring a stylish and reliable solution for all your ceiling needs.</b></span>
                                    <hr>
                                </center>
                                <section class="category" id="ceilingC">
                                    <h2 style="color:navy">ASBESTOS CEILING SHEETS</h2>
                                    <span>Upgrade your ceilings with our exceptional range of asbestos ceiling sheets, each carefully crafted to enhance your spaces with durability, reliability, and a touch of modern innovation. These sheets offer a timeless solution, ensuring lasting elegance and dependable performance for all your ceiling requirements.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="product-slider">
                                                    <div class="tab featured-tab-area">
                                                        <div class="tab_content current active pt-45">
                                                            <div class="tabs_item current">
                                                                <div class="row justify-content-center">
                                                                    <?php
                                                                    $query = "SELECT * FROM product WHERE p_id='asbascel';";
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
                                <section class="category" id="nonceilingC">
                                    <h2 style="color:navy">NON ASBESTOS CEILING SHEETS</h2>
                                    <span>Elevate your ceilings with our exceptional range of non-asbestos ceiling sheets, each carefully designed to enhance your spaces with durability, reliability, and a touch of modern innovation. These sheets provide a safe and contemporary solution, ensuring enduring elegance and dependable performance for all your ceiling needs.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php
                                                                $query = "SELECT * FROM product WHERE p_id='nonasbas';";
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
                                        <h2 style="color:#5A5A5A; font-weight:bold; margin-bottom: 10px;" id="acc">ROOFING ACCESSORIES</h2>
                                        <span><b>Enhance your roofing solutions with our exceptional range of roofing accessories, each thoughtfully designed to complement your roofing projects with functionality, durability, and a touch of modern innovation. These accessories ensure seamless integration and reliable performance, meeting all your roofing needs with precision and excellence.</b></span>
                                    </center>
                                    <section class="category" id="paint">
                                        <h2 style="color:navy">ROOFING PAINTS</h2>
                                        <span>Elevate your roofing solutions with our exceptional range of roofing paints, each meticulously formulated to enhance your roofs with lasting protection, vibrant aesthetics, and a touch of modern innovation. These paints ensure resilience and visual appeal, delivering superior coverage and dependable performance for all your roofing needs.</span>
                                        <section>
                                            <div class="featured-area pt-10 pb-70">
                                                <div class="container">
                                                    <div class="tab featured-tab-area">
                                                        <div class="tab_content current active pt-45">
                                                            <div class="tabs_item current">
                                                                <div class="row justify-content-center">
                                                                    <?php

                                                                    $query = "SELECT * FROM product WHERE p_id='roofpaint';";
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
                                    <section class="category" id="foil">
                                        <h2 style="color:navy">FOILS</h2>
                                        <span>Enhance your projects with our exceptional range of foils, each intricately designed to provide versatile solutions, durability, and a touch of modern innovation. These foils ensure reliable performance, making them an ideal choice for various applications and fulfilling all your foil-related needs with excellence.</span>
                                        <section>
                                            <div class="featured-area pt-10 pb-70">
                                                <div class="container">
                                                    <div class="tab featured-tab-area">
                                                        <div class="tab_content current active pt-45">
                                                            <div class="tabs_item current">
                                                                <div class="row justify-content-center">
                                                                    <?php

                                                                    $query = "SELECT * FROM product WHERE p_id='foil';";
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
                                    <section class="category" id="gutter">
                                        <h2 style="color:navy">GUTTERS</h2>
                                        <span>Elevate your drainage solutions with our exceptional range of gutters, each meticulously designed to enhance your structures with efficiency, reliability, and a touch of modern innovation. These gutters ensure effective water management, safeguarding your property and fulfilling all your gutter-related needs with excellence.</span>
                                        <section>
                                            <div class="featured-area pt-10 pb-70">
                                                <div class="container">
                                                    <div class="product-slider">
                                                        <div class="tab featured-tab-area">
                                                            <div class="tab_content current active pt-45">
                                                                <div class="tabs_item current">
                                                                    <div class="row justify-content-center">
                                                                        <?php
                                                                        $query = "SELECT * FROM product WHERE p_id='gutter';";
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
                                    <section class="category" id="other">
                                        <h2 style="color:navy">OTHER</h2>
                                        <span>Elevate your roofing solutions with our exceptional range of products, each intricately designed to enhance your structures with durability, reliability, and a touch of modern innovation. Our offerings ensure effective protection and a seamless blend of functionality and aesthetics, catering to all your roofing needs with excellence.</span>
                                        <section>
                                            <div class="featured-area pt-10 pb-70">
                                                <div class="container">
                                                    <div class="tab featured-tab-area">
                                                        <div class="tab_content current active pt-45">
                                                            <div class="tabs_item current">
                                                                <div class="row justify-content-center">
                                                                    <?php
                                                                    $query = "SELECT * FROM product WHERE p_id='otherr1';";
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