<?php
include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPLHardware|Tools</title>
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
            <h1 id="tools">TOOLS </h1>
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
                        <br><br><br><br><br><br><br><br><br><br>
                    </div>
                    <div class=form>
                    <img src="images/advertistments/Adver5.jpg" alt="Slide 1" >
                    <br><br><br><br><br><br><br><br><br><br><br>
                    </div>
                    <div class="form">
                    <img src="images/advertistments/Adver13.jpg" alt="Slide 1" >

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="formA">
                        <div class="category-img">
                            <div class="img-fluid">
                                <img src="images/banners/banner1.jpg" alt="">
                            </div>
                            <section class="form">
                                <center>
                                    <h2 style="color:#5A5A5A; font-weight:bold; margin-bottom: 10px;" id="power">POWER TOOLS</h2>
                                    <span><b>Explore our versatile collection of premium power tools to fulfill all your construction requirements.</b></span>
                                </center>
                                <section class="category" id="drill">
                                    <hr>
                                    <h2 style="color:navy">DRILLS</h2>
                                    <span>Discover our variety of drill products tailored to meet your construction and drilling requirements.</span>
                                    <hr>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="product-slider">
                                                    <div class="tab featured-tab-area">
                                                        <div class="tab_content current active pt-45">
                                                            <div class="tabs_item current">
                                                                <div class="row justify-content-center">
                                                                    <?php
                                                                    $query = "SELECT * FROM product WHERE p_id='drill';";
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
                                <section class="category" id="grinder">
                                    <hr>
                                    <h2 style="color:navy">GRINDERS</h2>
                                    <span>Discover our comprehensive selection of grinder products, thoughtfully curated to fulfill your construction and grinding requirements.</span>
                                    <hr>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php
                                                                $query = "SELECT * FROM product WHERE p_id='grinders';";
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

                                <section class="category" id="saw">
                                    <h2 style="color:navy">SAWS</h2>
                                    <span>Explore our selection of saw products crafted to address your construction and cutting needs.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='saws';";
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
                                <section class="category" id="air">
                                    <h2 style="color:navy">AIR COMPRESSORS</h2>
                                    <span>Discover our array of air compressor products designed to cater to your construction and pneumatic needs.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='aircomp';";
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

                                <section class="category" id="other1">
                                    <h2 style="color:navy">OTHER</h2>
                                    <span>Explore our diverse range of power tool products meticulously curated to accommodate all your construction and functional needs.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='otherp1';";
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
                                    <h2 style="color:#5A5A5A; font-weight:bold; margin-bottom: 10px;" id="hand">HAND AND ELECTRICAL TOOLS</h2>
                                    <span><b>Explore our extensive range of both manual and electric hand tools, thoughtfully curated to meet all your construction and functional needs.</b></span>
                                </center>
                                <section class="category" id="hammer">
                                    <hr>
                                    <h2 style="color:navy">HAMMER</h2>
                                    <span>Discover our assortment of high-quality hammers, designed to serve your construction and striking needs with precision and durability.</span>
                                    <hr>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="product-slider">
                                                    <div class="tab featured-tab-area">
                                                        <div class="tab_content current active pt-45">
                                                            <div class="tabs_item current">
                                                                <div class="row justify-content-center">
                                                                    <?php
                                                                    $query = "SELECT * FROM product WHERE p_id='hammer';";
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
                                <section class="category" id="cut">
                                    <hr>
                                    <h2 style="color:navy">CUTTING TOOLS AND PLIERS </h2>
                                    <span>Explore our collection of cutting tools and pliers, meticulously chosen to provide reliable solutions for your construction and gripping tasks.</span>
                                    <hr>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php
                                                                $query = "SELECT * FROM product WHERE p_id='cut';";
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

                                <section class="category" id="screw">
                                    <h2 style="color:navy">SCREW</h2>
                                    <span>Discover our selection of screws, designed to provide secure and dependable fastening solutions for your construction and assembly needs.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='screw';";
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
                                <section class="category" id="masonry">
                                    <h2 style="color:navy"> MASONRY TOOLS</h2>
                                    <span>Explore our masonry products, carefully chosen to cater to your construction and building needs, ensuring strength and stability in your projects.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='masonry';";
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

                                <section class="category" id="other2">
                                    <h2 style="color:navy">OTHER</h2>
                                    <span>Explore our diverse range of power tool products meticulously curated to accommodate all your construction and functional needs.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='otherp2';";
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
                                    <h2 style="color:#5A5A5A; font-weight:bold; margin-bottom: 10px;" id="layout">LAYOUT AND MEASURING TOOLS</h2>
                                    <span><b>Explore our array of layout and measuring tools, meticulously selected to aid in precise measurements and efficient project layout, ensuring accuracy and success in your construction endeavors.</b></span>
                                </center>
                                <section class="category" id="level">
                                    <hr>
                                    <h2 style="color:navy">LEVELS</h2>
                                    <span>Discover our range of levels, meticulously selected to assist in achieving accurate measurements and precise alignments for your construction and leveling requirements.</span>
                                    <hr>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="product-slider">
                                                    <div class="tab featured-tab-area">
                                                        <div class="tab_content current active pt-45">
                                                            <div class="tabs_item current">
                                                                <div class="row justify-content-center">
                                                                    <?php
                                                                    $query = "SELECT * FROM product WHERE p_id='levels';";
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
                                <section class="category" id="magnet">
                                    <hr>
                                    <h2 style="color:navy">MAGNETS</h2>
                                    <span>Explore our assortment of magnets, carefully chosen to provide versatile solutions for your construction and magnetic needs, ensuring reliable attachment and organization.</span>
                                    <hr>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php
                                                                $query = "SELECT * FROM product WHERE p_id='magnets';";
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

                                <section class="category" id="pickup">
                                    <h2 style="color:navy">PICKUP TOOLS</h2>
                                    <span>Discover our collection of pickup tools, thoughtfully curated to assist you in retrieving and handling objects in hard-to-reach places, enhancing your efficiency and convenience during construction and tasks.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='picktools';";
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

                                <section class="category" id="other3">
                                    <h2 style="color:navy">OTHER</h2>
                                    <span>Explore our diverse range of power tool products meticulously curated to accommodate all your construction and functional needs.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='otherp3';";
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