<?php
include('dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>WPL Hardware|Best Hardware Store in Warakapola</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

   <!-- fontawesome -->
   <script src="https://kit.fontawesome.com/7507f1b470.js" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="css/footer.css">
   <link rel="stylesheet" href="css/items.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/catpage_style.css">

   <style>
      /* Overlapping with the bootstrap CSS included */
      .default-btn {
         background-color: orange;
         color: white;
         opacity: 1;
      }

      .default-btn:hover {
         opacity: 0.8;
      }

      .headingItem {
         color: darkblue;
         font-weight: bold;
         font-size: 24px;
         justify-content: left;
      }

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

      @media screen and (max-width: 768px) {
         .adBottom1 {
            width: 100%;
            height: auto;
            padding-bottom: 5px;
         }
         .adBottom2 {
            width: 100%;
            height: auto;
            padding-bottom: 5px;
         }
      }
   </style>
</head>

<body>
   <?php include 'coupon.php';?>
   <?php include 'NavigationBar.php'; ?>
   <?php include 'model.php'; ?>
   <?php include 'scroll.php'; ?>

   <!--slides-->
   <div class="advertisment">
      <div class="containerAdd">
         <div class="row">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-inner">

                  <div class="carousel-item active">
                     <img src="images/advertistments/ad1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="images/advertistments/ad2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="images/advertistments/ad3.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="images/advertistments/ad4.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="images/advertistments/ad5.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="images/advertistments/ad6.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="images/advertistments/ad7.jpg" class="d-block w-100" alt="...">
                  </div>

               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
               </button>
            </div>

         </div>
      </div>
   </div>

   <!-- navbar -->
   <div class="col-lg-3 mb-lg-0 smallcat-bar">
      <p>
         <a class="btn btn-warning w-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button">
            <span class="fas fa-bars"><span class="ps-3">CATEGORIES</span></span>
            <span class="collapse-icon"></span>

         </a>
      </p>
      <div class="collapse-icon" id="collapseExample">
         <?php
         include 'category_chart.php';
         ?>
      </div>

   </div>

   <!--items-->
   <div class="itemCont">
      <div class="section">
         <div class="row">
            <div class="headingItem">FEATURED ITEMS</div>
         </div>

         <div class="containerItem">
            <div class="row">
               <div class="product-slider">
                  <?php
                  $query = "SELECT * FROM product WHERE star IN ('3', '4','5');";
                  $categories = mysqli_query($connection, $query);

                  if ($categories) {
                     while ($category = mysqli_fetch_assoc($categories)) {
                  ?>
                        <div class="featured-item">
                           <div class="featured-item-img">
                              <a href="#">
                                 <img src="<?php echo $category['image']; ?>" alt="Images">
                              </a>
                           </div>
                           <div class="content">

                              <h5><a><?php echo $category['name']; ?></a></h5>

                              <hr>
                              <div class="content-in">
                                 <h6><?php echo $category['price']; ?></h6>
                                 <span><?php echo $category['star']; ?><i class="fa fa-star"></i></span>
                              </div>
                              <hr>
                              <div class="featured-content-list">
                                 <button type="button" data-image="<?php echo $category['image'] ?>" data-name="<?php echo $category['name']; ?>" data-price="<?php echo $category['price']; ?>" class="default-btn border-radius-5">Add to cart</button>
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
               <div class="slider-controls">
                  <button class="slider-button prev-button"><<</button>
                  <button class="slider-button next-button">>></button>
               </div>
            </div>
         </div>
      </div>


      <!-- second section -->
      <div class="section">
         <div class="row">
            <div class="headingItem">POPULAR ITEMS</div>
         </div>
         <div class="containerItem">
            <div class="row">
               <div class="product-slider">
                  <?php
                  $query = "SELECT * FROM product WHERE star > '4.4';";
                  $categories = mysqli_query($connection, $query);

                  if ($categories) {
                     while ($category = mysqli_fetch_assoc($categories)) {
                  ?>
                        <div class="featured-item">
                           <div class="featured-item-img">
                              <a href="#">
                                 <img src="<?php echo $category['image']; ?>" alt="Images">
                              </a>
                           </div>
                           <div class="content">

                              <h5><a><?php echo $category['name']; ?></a></h5>

                              <hr>
                              <div class="content-in">
                                 <h6><?php echo $category['price']; ?></h6>
                                 <span><?php echo $category['star']; ?><i class="fa fa-star"></i></span>
                              </div>
                              <hr>
                              <div class="featured-content-list">
                                 <button type="button" data-image="<?php echo $category['image'] ?>" data-name="<?php echo $category['name']; ?>" data-price="<?php echo $category['price']; ?>" class="default-btn border-radius-5">Add to cart</button>
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
               <div class="slider-controls">
                  <button class="slider-button prev-button"><<</button>
                  <button class="slider-button next-button">>></button>
               </div>
            </div>
         </div>
      </div>


      <!--3rd section-->
      <div class="section">
         <div class="headingItem">LIMITED EDITION ITEMS</div>
         <div class="containerItem">
            <div class="row">
               <div class="product-slider">
                  <?php
                  $query = "SELECT * FROM product WHERE p_id IN ('waterproof', 'sayerlack','ac','orange','nonasbas','swich');";
                  $categories = mysqli_query($connection, $query);

                  if ($categories) {
                     while ($category = mysqli_fetch_assoc($categories)) {
                  ?>
                        <div class="featured-item">
                           <div class="featured-item-img">
                              <a href="#">
                                 <img src="<?php echo $category['image']; ?>" alt="Images">
                              </a>
                           </div>
                           <div class="content">

                              <h5><a><?php echo $category['name']; ?></a></h5>

                              <hr>
                              <div class="content-in">
                                 <h6><?php echo $category['price']; ?></h6>
                                 <span><?php echo $category['star']; ?><i class="fa fa-star"></i></span>
                              </div>
                              <hr>
                              <div class="featured-content-list">
                                 <button type="button" data-image="<?php echo $category['image'] ?>" data-name="<?php echo $category['name']; ?>" data-price="<?php echo $category['price']; ?>" class="default-btn border-radius-5">Add to cart</button>
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
               <div class="slider-controls">
                  <button class="slider-button prev-button"><<</button>
                  <button class="slider-button next-button">>></button>
               </div>
            </div>
         </div>
      </div>
   </div>


   </div>
   <div class="container-fluid">
      <div class="row" style="padding-bottom: 5px;">
         <div class="col-md-6">
            <img src="images/advertistments/Adver18.jpg" alt="none" width="600px" height="350px" class="adBottom1">
         </div>
         <div class="col-md-6">
            <img src="images/advertistments/Adver1.jpg" alt="none" width="600px" height="350px" class="adBottom2">
         </div>
      </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

   <script src="script/shoppingCart.js"></script>
   <script src="script/index.js"></script>
   
   <?php include 'footer.php'; ?>

</body>

</html>