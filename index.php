<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>Phone Case Store</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--


-->

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
  <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <h2>Phone Case<em>Store</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">Our Products</a>
            </li>
            <?php
            session_start();
            if (isset($_SESSION['username'])) { ?>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            <?php
            } else {
            ?>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            <?php } ?>

          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="banner header-text">
    <div class="owl-banner owl-carousel">
      <div class="banner-item-01">
        <div class="text-content">
          <h4>Offer Phone Case</h4>
        </div>
      </div>
      <div class="banner-item-02">
        <div class="text-content">
          <h4>Flash Deals</h4>
        </div>
      </div>
      <div class="banner-item-03">
        <div class="text-content">
          <h4>Few minutes</h4>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Ends Here -->

  <div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Products</h2>
            <a href="products.php">View all products <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/BasicPhoneCase.jpg" alt=""></a>
            <div class="down-content">
              <a href="#">
                <h4>Basic Phone Case"</h4>
              </a>

              <p>The basic phone case is designed to be simple, not fussy, for those who love simplicity.</p>
              <p class="product_price">$ 15</p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span>Reviews (24)</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/SnowBearPhoneCase.jpg" alt=""></a>
            <div class="down-content">
              <a href="#">
                <h4>Snow Bear Phone Case</h4>
              </a>

              <p>Snow bear phone case designed in a more youthful and dynamic style.</p>
              <p class="product_price">$ 18</p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span>Reviews (21)</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/StreetGirlPhoneCase.jpg" alt=""></a>
            <div class="down-content">
              <a href="#">
                <h4>Street Girl Phone Case</h4>
              </a>

              <p>Street girl phone case with dynamic and strong design for those who love the liberal.</p>
              <p class="product_price">$ 20</p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span>Reviews (36)</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/NaturePhoneCases.jpg" alt=""></a>
            <div class="down-content">
              <a href="#">
                <h4>Nature Phone Case</h4>
              </a>

              <p>Nature phone case is designed in a quiet, peaceful style for those who love the tranquility of nature.</p>
              <p class="product_price">$ 25</p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span>Reviews (48)</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/EngravedPhoneCase.jpg" alt=""></a>
            <div class="down-content">
              <a href="#">
                <h4>Engraved Phone Case</h4>
              </a>

              <p>Name engraved phone cases are designed in a unique and strange style and according to the needs of users.</p>
              <p class="product_price">$ 45</p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span>Reviews (16)</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="assets/images/FengShuiPhoneCases.jpg" alt=""></a>
            <div class="down-content">
              <a href="#">
                <h4>Feng Shui Phone Case</h4>
              </a>

              <p>Feng shui phone case is designed for those who love feng shui, luck, fortune.</p>
              <p class="product_price">$ 50</p>
              <ul class="stars">
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
                <li><i class="fa fa-star"></i></li>
              </ul>
              <span>Reviews (32)</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/accordions.js"></script>


  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0;

    function clearField(t) {
      if (!cleared[t.id]) {
        cleared[t.id] = 1;
        t.value = '';
        t.style.color = '#fff';
      }
    }
  </script>


</body>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="inner-content">
          <p>Copyright &copy; 2021 Phone Case Store Co., Ltd.</p>
        </div>
      </div>
    </div>
  </div>
</footer>

</html>