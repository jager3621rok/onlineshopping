<?php include'connectDB.php';

session_start();

	
	if (isset($_POST["submit"])) {
	
		$username = $_POST["username"];
    $password = $_POST["password"];
    echo $username;
		
		if ($username == "" || $password =="") {
      echo "<script>
        alert('Your username or password cannot be left blank !!!');
        </script>";
			
		}else{
			$query = "SELECT * FROM user where username = '$username' and password = '$password' ";
			$result = mysqli_query($conn,$query);
			$num_rows = mysqli_num_rows($result);
			if ($num_rows==1) {
				$_SESSION['username'] = $username;
        echo "<script>
        alert('Login successfully !!!');
        </script>";
        header('Location: index.php');
        
				
			}else{
        echo "<script>
                window.alert('Wrong username or password !!! !!!');
                </script>";
				
			}
		}
  }
 
?>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Phone Case Store </title>

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
          <a class="navbar-brand" href="index.php"><h2>Phone Case <em>Store</em></h2></a>
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

        <div class="body" style = "padding-top:50px;">
            <div id="table_form">
                <form action = "login.php" method = "POST">
                    <table align="center" style="margin-top: 5%;">
                      <tr style="height: 20px;">
                        <td>Username:</td>
                        <td><input name="username" type="text" style="height: 20px;"></td>
                      </tr>
                      <tr style="height: 10px;">
                        <td>Password:</td>
                        <td><input name="password" type="password" style="height: 20px;"></td>
                      </tr>
                      <tr style="text-align: center; height: 40px;">
                        <td></td>
                        <td><input type="submit" value="Login" name = "submit" style="height: 25px; width: 100px;"></td>
                      </tr>
                    </table>
                </form>
            </div>   
        </div>

        
                <div class="newsletter-description">
                    <h3>Sign up for the Phone Case Store newsletter</h3>
                    <h5>Don't miss out on thousands of super cool products and shows</h5>
                </div>
                <div class="newsletter-form">
                    <input type="email" placeholder="Your email address" style="height: 37px; width: 300px; padding: 5px;">
                    <input type="submit" value="Register" style="width: 80px;height: 37px; background-color: rgb(0, 175, 239); color: white; cursor: pointer;" onclick="email();">
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


<script language = "text/Javascript"> 
  cleared[0] = cleared[1] = cleared[2] = 0; 
  function clearField(t){                   
  if(! cleared[t.id]){                      
      cleared[t.id] = 1;  
      t.value='';        
      t.style.color='#fff';
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