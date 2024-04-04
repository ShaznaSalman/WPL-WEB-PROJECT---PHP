<?php
include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPLHardware|Electrical</title>
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
            <h1 id="electrical">ELECTRICAL ITEMS</h1>
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
                        <br><br><br><br><br><br><br><br>
                    </div>
                    <div class=form>
                    <img src="images/advertistments/Adver7.jpg" alt="Slide 1" >
                    <br><br><br><br><br><br><br><br>
                    </div>
                    <div class="form">
                    <img src="images/advertistments/Adver9.jpg" alt="Slide 1" >

                    </div>
                </div>
                <div class="col-md-9">
                    <div class="formA">
                        <div class="category-img">
                            <div class="img-fluid">
                                <img src="images/banners/banner5.jpg" alt="">
                            </div>
                            <section class="form">
                                <center>
                                    <h2 style="color:#5A5A5A; font-weight:bold; margin-bottom: 10px;" id="light">LIGHTING</h2>
                                    <span><b>Unveil a world of radiance with our exquisite lights and bulbs, designed to illuminate your space with brilliance and style.</b></span> 
                                    <hr>
                                </center>
                                <section class="category" id="orange">
                                    
                                    <h2 style="color:navy">ORANGE</h2>
                                    <span>Emanate a warm glow with our exquisite Orange lights and bulbs, meticulously crafted to infuse your space with captivating radiance and distinctive style.</span> 
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="product-slider">
                                                    <div class="tab featured-tab-area">
                                                        <div class="tab_content current active pt-45">
                                                            <div class="tabs_item current">
                                                                <div class="row justify-content-center">
                                                                    <?php
                                                                    $query = "SELECT * FROM product WHERE p_id='orange';";
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
                                <section class="category" id="kelani">
                                    
                                    <h2 style="color:navy">KELANI</h2>
                                    <span>Emanate a warm glow with our exquisite Kelani lights and bulbs, meticulously crafted to infuse your space with captivating radiance and distinctive style.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php
                                                                $query = "SELECT * FROM product WHERE p_id='kelani';";
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

                                <section class="category" id="laxapana">
                                    <h2 style="color:navy">LAXAPANE</h2>
                                    <span>Emanate a warm glow with our exquisite Laxapane lights and bulbs, meticulously crafted to infuse your space with captivating radiance and distinctive style.</span> 
                                       
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='laxapane';";
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
                                    <h2 style="color:navy">OTHER</h2>
                                    <span>Eluminate your surroundings with our exceptional range of lights, each thoughtfully designed to fill your space with enchanting radiance and a unique sense of style.</span>
                                    <hr>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='otheree1';";
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
                                    <h2 style="color:#5A5A5A; font-weight:bold; margin-bottom: 10px;" id="home">HOME APPLIANCES</h2>
                                    <span><b>Elevate your living spaces with our exceptional range of home appliances, each thoughtfully designed to infuse your environment with convenience, efficiency, and a touch of modern innovation.</b></span>                                </center>
                                </center>
                                <section class="category" id="fan">
                                    <hr>
                                    <h2 style="color:navy">FANS</h2>
                                    <span>Enhance your living spaces with our remarkable selection of fans, each meticulously crafted to imbue your surroundings with comfort, efficiency, and a touch of modern innovation.</span>
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
                                                                    $query = "SELECT * FROM product WHERE p_id='fan';";
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
                                <section class="category" id="ac">
                                    <hr>
                                    <h2 style="color:navy">AIR CONDITIONERS</h2>
                                    <span>Elevate your indoor experience with our exceptional range of AC systems, each meticulously designed to envelop your space in cool comfort, energy efficiency, and a touch of contemporary innovation.</span>
                                    <hr>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php
                                                                $query = "SELECT * FROM product WHERE p_id='ac';";
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

                               
                                <section class="category" id="other2">
                                    <h2 style="color:navy">OTHER</h2>
                                    <span>Eluminate your surroundings with our exceptional range of lights, each thoughtfully designed to fill your space with enchanting radiance and a unique sense of style.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='otheree2';";
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
                                    <h2 style="color:#5A5A5A; font-weight:bold; margin-bottom: 10px;" id="accessories">ELECTRICAL ACCESSORIES</h2>
                                    <span><b>Elevate your electrical setup with our exceptional array of accessories, each intricately crafted to empower your space with functionality, safety, and a touch of modern innovation.Explore our versatile assortment of premium paint accessories, skillfully designed to enhance your painting tasks with precision and excellence.</b></span>
                                </center>
                                <section class="category" id="battery">
                                    <hr>
                                    <h2 style="color:navy">BATTERIES</h2>
                                    <span>Enhance your power solutions with our outstanding assortment of batteries, each intricately engineered to empower your devices with reliable energy, longevity, and a touch of cutting-edge innovation.</span>
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
                                                                    $query = "SELECT * FROM product WHERE p_id='battery';";
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
                                <section class="category" id="switch">
                                    <hr>
                                    <h2 style="color:navy">SWITCHES AND SOCKETS</h2>
                                    <span>Elevate your electrical infrastructure with our exceptional range of switches and sockets, each meticulously designed to empower your space with seamless connectivity, safety, and a touch of modern innovation.</span>
                                    <hr>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php
                                                                $query = "SELECT * FROM product WHERE p_id='switch';";
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

                                <section class="category" id="wire">
                                    <h2 style="color:navy">WIRES AND CABELS</h2>
                                    <span>Elevate your electrical framework with our exceptional selection of wires and cables, each meticulously designed to empower your space with reliable connectivity, safety, and a touch of modern innovation.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='wires';";
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
                                    <span>Elevate your technological foundation with our exceptional range of components, each thoughtfully designed to empower your environment with reliable functionality, safety, and a touch of contemporary innovation.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='otheree3';";
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
    <?php include 'scroll.php'; ?>
    <?php include 'footer.php'; ?>

</body>

</html>