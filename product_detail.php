<?php

require_once 'connectDB.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">

    <link rel="stylesheet" href="assets/css/owl.css">
    
    <title>Product Detail</title>
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Phone Case <em>Store</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="products.php">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
</head>

<body>

<div class="container">
        <div class="row">
          <div class="col-md-12">
              <ul>
    <?php
    $proId = $_GET['id'];
    $sql = "SELECT * from product where proId = $proId";
    $resultpro = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($resultpro);
    ?>
    <div class="col-lg-4 col-md-4 all des">
        <div class="product-item">

                <a href=""><img style="width: 400px; height:330px;" src="assets/images/<?php echo $row['proImage'] ?>" alt="">

        </div>
        <div class="down-content">
        
                <a>Product Name: <?php echo $row['proName']; ?></a>
                <p>Product Cost: <?php echo $row['proCost']; ?>$</p>
                <button>Add to cart</button>


        </div>
    </div>
    </ul>
    </div>
    </div>
    </div>

</body>

</html>