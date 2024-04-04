<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>WPLHardware|Homepage</title>


  <script src="https://kit.fontawesome.com/7507f1b470.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/navBar.css">

  <style></style>

</head>

<body>
  <div>
    <div class="container-fluid">
      <div class="row row-upper">
        <ul class="first-part">
          <li><a href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>
          <li><a href="aboutUs.php"><i class="fa-solid fa-circle-info"></i> About Us</a></li>
          <li><a href="contact.php"><i class="fa-solid fa-envelope"></i> Contact Us</a></li>
        </ul>
      </div>

      <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
          <a class="navbar-brand" href="#">
            <h3>WPL Trading</h3>
            <p>Best Hardware shop in Warakapola</p>
          </a>
          <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img src="images/icons/nav.jpg" alt="none"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <form class="d-flex" role="search" action="/search" method="get" > 
                <input class="form-control me-2" type="search" name="q" placeholder="Search" aria-label="Search">
                
                <button class="btn btn-none" type="submit">
                  <i class="fa-solid fa-magnifying-glass fa-shake" style="color: #f9c610;"></i>
                </button>
              </form>
            </ul>
            <div class="icons">
              <div class="row">
                <div class="col-md-6">
                  <form action="login.php">
                    <button type="submit" class="signup">
                      <i class="fas fa-user-plus">LOGIN</i>
                    </button>
                  </form>
                </div>
                <div class="col-md-6">
                  <button type="submit" class="cart" data-toggle="modal" data-target="#staticBackdrop">
                    <i class="fas fa-shopping-cart total-count">CART</i><span style="font-weight:400;"></span>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>



  <div class="category">
    <div class="category-container">
      <form action="building.php"><button type="submit" class="category-button" onmousemove="showSubcategories('BUILDING', this)" onmouseout="hideCanvas()">BUILDING</button></form>
      <form action="tools.php"><button type="submit" class="category-button" onmousemove="showSubcategories('TOOLS', this)" onmouseout="hideCanvas()">TOOLS</button></form>
      <form action="paints.php"><button type="submit" class="category-button" onmousemove="showSubcategories('PAINTS', this)" onmouseout="hideCanvas()">PAINTS</button></form>
      <form action="electrical.php"><button type="submit" class="category-button" onmousemove="showSubcategories('ELECTRICAL', this)" onmouseout="hideCanvas()">ELECTRICAL</button></form>
      <form action="plumbing.php"><button type="submit" class="category-button" onmousemove="showSubcategories('PLUMBING', this)" onmouseout="hideCanvas()">PLUMBING</button></form>
      <form action="roof.php"><button type="submit" class="category-button" onmousemove="showSubcategories('ROOFING', this)" onmouseout="hideCanvas()">ROOFING</button></form>
      <form action="steel.php"><button type="submit" class="category-button" onmousemove="showSubcategories('STEEL', this)" onmouseout="hideCanvas()">STEEL</button></form>
      <form action="tiles.php"><button type="submit" class="category-button" onmousemove="showSubcategories('TILES', this)" onmouseout="hideCanvas()">TILES AND FITTING</button></form>
      <form action="kitchen.php"><button type="submit" class="category-button" onmousemove="showSubcategories('HOME', this)" onmouseout="hideCanvas()">HOME AND KITCHEN</button></form>
      <form action="industrial.php"><button type="submit" class="category-button" onmousemove="showSubcategories('INDUSTRIAL', this)" onmouseout="hideCanvas()">INDUSTRIAL</button></form>
      <form action="general.php"><button type="submit" class="category-button" onmousemove="showSubcategories('GENERAL', this)" onmouseout="hideCanvas()">GENERAL</button></form>

    </div>

    <!-- Canvas -->
    <div id="category-canvas">
      <div id="canvas-title"></div>
      <div id="subcategory-list">
        <div id="sub-subcategory-list"></div>
      </div>

    </div>
  </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <script src="script/shoppingCart.js"></script>
  <script src="script/navbar.js"></script>

</body>

</html>