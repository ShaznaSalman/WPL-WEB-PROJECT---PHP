<?php
include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WPLHardware|Building</title>
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
            <h1 id="materials">BUILDING </h1>
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
                        <br><br><br><br><br><br><br><br><br><br>
                    </div>
                    <div class="form">
                        <img src="images/advertistments/Adver1.jpg" alt="none">
                        <br><br><br>
                    </div>
                    <div class=form>
                    <img src="images/advertistments/Adver2.jpg" alt="Slide 1" >
                    <br><br><br> <br><br><br><br><br><br><br><br><br><br>
                    </div>
                    <div class="form">
                    <img src="images/advertistments/Adver17.jpg" alt="Slide 1" >
                    
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="formA">
                        <div class="category-img">
                            <div class="img-fluid">
                                <img src="images/banners/banner11.jpg" alt="" >
                            </div>
                            <section class="form">
                                <center>
                                    <h2 style="color:#5A5A5A; font-weight:bold; margin-bottom: 10px;"id="materials">BUILDING MATERIALS</h2>
                                    <span><b>Explore our diverse range of quality building materials for all your construction needs.</b></span>
                                </center>
                                <section class="category" id="sand">
                                    <hr>
                                    <h2 style="color:navy">SAND</h2>
                                    <span>Explore our range of gravel products for your construction and gardening needs.</span>
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
                                                                    $query = "SELECT * FROM product WHERE p_id='sand';";
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
                                <section class="category" id="gravel">
                                    <hr>
                                    <h2 style="color:navy">GRAVEL</h2>
                                    <span>Explore our range of gravel products for your construction and gardening needs.</span>
                                    <hr>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php
                                                                $query = "SELECT * FROM product WHERE p_id='gravel';";
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

                                <section class="category" id="cement">
                                    <h2 style="color:navy">CEMENT</h2>
                                    <span>Explore our range of high-quality cement products for strong foundations.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='cement';";
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
                                <section class="category" id="bricks">
                                    <h2 style="color:navy">BRICKS</h2>
                                    <span>Discover our collection of bricks for construction and architectural projects.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='bricks';";
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

                                <section class="category" id="metal">
                                    <h2 style="color:navy">METAL</h2>
                                    <span>Explore our metal building materials for structural and decorative purposes.</span>
                                    <section>
                                        <div class="featured-area pt-10 pb-70">
                                            <div class="container">
                                                <div class="tab featured-tab-area">
                                                    <div class="tab_content current active pt-45">
                                                        <div class="tabs_item current">
                                                            <div class="row justify-content-center">
                                                                <?php

                                                                $query = "SELECT * FROM product WHERE p_id='metal';";
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