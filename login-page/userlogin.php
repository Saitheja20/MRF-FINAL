
<?


$email = $_POST['email'];
$password = $_POST['password'];

// Create a database connection
$con = mysqli_connect('localhost', 'root', '', 'mrftyres');

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM registration WHERE email LIKE '%$email%' AND phone LIKE '%$password%'";

$result = mysqli_query($con, $query);


// Check if either of the queries was successful
if ($result && mysqli_num_rows($result) > 0) {
    echo "Connection is successful saitheja";
} else {
    echo "Connection lost";
}

// Close the database connection
// mysqli_close($con);
echo $city;

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Apply for MRF tyres dealership and franchise in India. Get mrf distributorship. Apply Online for tyres franchise.">
    <meta name="keywords" content="MRF Tyres Dealership, MRF Tyres Franchise, Mrf Tyres Dealership Application, MRF Tyres Dealership Apply, mrf tyres franchise apply online" >
    <link href="external2fbb.html" rel="stylesheet">
    <link href="externalf197.html" rel="stylesheet">
    <meta name="description" content="MRF Tyres is looking for MRF Tyres Dealership partner in India. We, an MRF Dealership chain is inviting MRF Tyres Dealership application.">
    <meta name="keywords" content="MRF Dealership, MRF Tyres Dealership, MRF Tyres Franchise">
    <link rel="stylesheet" href="stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.html">
 
    <link rel="stylesheet" href="../css/animate.css">    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/style.css">
    
   

</head>
<body>
<div class="wrap">
			<div class="container">
				<div class="row justify-content-between">
						<div class="col d-flex align-items-center">
						
						</div>
						<div class="col d-flex justify-content-end">
							<div class="social-media">
				    		<p class="mb-0 d-flex">
				    			<a href="externalb41d.html" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
				    			<a href="externalee9d.html" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
				    			<a href="external7d60.html" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
				    			<a href="external5b88.html" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
				    		</p>
			        </div>
						</div>
				</div>
			</div>
		</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index-2.html"><img src="../images/logo.png" class="mrf tyres distributorship"width="250" height="80"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	            <li class="nav-item"><a href="index-2.html" class="nav-link">Franchise Opportunities</a></li>
				<li class="nav-item"><a href="index.html" class="nav-link">Franchise Benefits</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Apply for Franchise</a></li>
			  <li class="nav-item"><a href="status.html" class="nav-link">Check Status</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav> 








      <!-- ||||||||||||footer|||||||||||||||||| -->
      
<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 mb-md-0 mb-4">
						<h4 class="footer-heading"><a href="#" class="logo">MRF Tyres</a></h4>
						<h4>If you are an automotive enthusiast, wanting to build a career in retailing of automotive products and do not know where to start, you have reached the right place</h4>
						<a href="about.html">Read more <span class="fa fa-chevron-right" style="font-size: 11px;"></span></a>
					</div>
					<div class="col-md-6 col-lg-3 mb-md-0 mb-4">
						<h4 class="footer-heading">Quick Links</h4>
						<ul class="list-unstyled">
              <li><a href="index-2.html" class="py-1 d-block">Home</a></li>
              <li><a href="about.html" class="py-1 d-block">About</a></li>
              <li><a href="contact.html" class="py-1 d-block">Apply Online</a></li>
              <li><a href="#" class="py-1 d-block">Franchise Benefits</a></li>
			  <li><a href="contact.html" class="py-1 d-block">Contact</a></li>
            </ul>
					</div>
					<div class="col-md-6 col-lg-3 mb-md-0 mb-4">
						<h4 class="footer-heading">Our Address</h4>
						<h4 Style="Color:#fff;">
						<address>
						MRF Limited, 124<br>Greams Road,Chennai<br>Tamil Nadu,India<br>
						Email: <a href="admin%40mrftyrefranchises.html">admin@mrftyrefranchises.com</a>
						</address>
						<br>Phone: <a href="tel:"></a>
						</h4>
					</div>
					<div class="col-md-6 col-lg-3 mb-md-0 mb-4">
						<h4 class="footer-heading">Subcribe</h4>
						<form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control rounded-left" placeholder="Enter email address">
                <button type="submit" class="form-control submit rounded-right"><span class="sr-only">Submit</span><i class="fa fa-paper-plane"></i></button>
              </div>
            </form>
            <h4 class="footer-heading mt-5">Follow us</h4>
            <ul class="ftco-footer-social h4-0">
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
            </ul>
					</div>
				</div>
			</div>
			<div class="w-100 mt-5 border-top py-5">
				<div class="container">
					<div class="row">
	          <div class="col-md-6 col-lg-8">

	            <h4 class="copyright mb-0">
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | MRF Tyres franchise <span style="display:none;"><i class="fa fa-heart" aria-hidden="true"></i> by <a href="external4753.html" target="_blank">Colorlib.com</a></span> 
	  </h4>
	          </div>
	          <div class="col-md-6 col-lg-4 text-md-right">
	          	<h4 class="mb-0 list-unstyled">
	          		<a class="mr-md-3" href="#">Terms</a>
	          		<a class="mr-md-3" href="#">Privacy</a>
	          		<a class="mr-md-3" href="#">Compliances</a>
	          	</h4>
	          </div>
	        </div>
				</div>
			</div>
		</footer>
    
</body>
</html>