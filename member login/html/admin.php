
<?php

$con = mysqli_connect('localhost', 'root', '', 'mrftyres');


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];

    $query = "SELECT * FROM registration WHERE name LIKE '%$searchTerm%' OR phone LIKE '%$searchTerm%'";
    $result = mysqli_query($con, $query);
} else {

echo "connection lost";
}
// $mysqli -> close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <title>user login page</title>
    <title>MRF Dealership | Apply for MRF Tyres Dealership Application | MRF Dealership  Apply 2023</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="description" content="Apply for MRF tyres dealership and franchise in India. Get mrf distributorship. Apply Online for tyres franchise.">
    <meta name="keywords" content="MRF Tyres Dealership, MRF Tyres Franchise, Mrf Tyres Dealership Application, MRF Tyres Dealership Apply, mrf tyres franchise apply online" >
    <link href="external2fbb.html" rel="stylesheet">
    <link href="externalf197.html   " rel="stylesheet">
    <meta name="description" content="MRF Tyres is looking for MRF Tyres Dealership partner in India. We, an MRF Dealership chain is inviting MRF Tyres Dealership application.">
    <meta name="keywords" content="MRF Dealership, MRF Tyres Dealership, MRF Tyres Franchise">
    <link rel="stylesheet" href="stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.html">
 
    <link rel="stylesheet" href="../../css/animate.css">
    
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">

    <link rel="stylesheet" href="../../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../css/jquery.timepicker.css">

    <link rel="stylesheet" href="../../css/flaticon.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="/admin.css">
    <style>
/* a:hover{
   
color:red;  
background-color:aqua;
} */
.my-button {
background-color:#5783db;
color:black;   

}
@media (min-width: 769px) {
            .lapvisible {
                /* Add your laptop-specific styles here */
                display: block;
                margin-left:auto;
                margin-right:auto;
                text-align:center;
            }

            .mobvisible {
                /* Add your laptop-specific styles here */
                display: none;
            }
            
        }

        /* Styles for mobile devices (screen width less than or equal to 768px) */
        @media (max-width: 768px) {
            .lapvisible {
                /* Add your mobile-specific styles here */
                display: none;
            }

            .mobvisible {
                /* Add your mobile-specific styles here */
                display: block;
               text-align:center;
            }
        }
        table {
            margin-left: auto;
            margin-right: auto;
        }

.thead{
    background-color:aqua;
}
.footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
        }
        .row{
            display:inline-flex;
            width:100%
        }
</style>
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
	    	<a class="navbar-brand" href="index-2.html"><img src="../../images/logo.png" class="mrf tyres distributorship"width="250" height=></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index-2.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	
	        	<li class="nav-item"><a href="../index-2.html" class="nav-link">Franchise Opportunities</a></li>
				<li class="nav-item"><a href="../index-3.html" class="nav-link">Franchise Benefits</a></li>
	          <li class="nav-item"><a href="../contact.html" class="nav-link">Apply Online</a></li>
            <li class="nav-item"><a href="../../status.html" class="nav-link">Check Status</a></li>
	          <li class="nav-item"><a href="../../contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div>
    <div class="container">
        <div class="row">
            <div class="col">
            <h1 style="text-align:center;color:white;border: 2px solid red; background-color:green;">Admin Panel</h1>
            </div>
        </div>
    </div>
    
   <br><br><br>


<div class="container">
        <div class="row" >
            <div class="col-xl-4 col-md-4 col-6 dflex justify-content-around" style="text-align: left;"> <!-- Use col-12 to ensure columns don't stack on small screens -->
                <button type="button" class="flx">
                    <form method="post" style="text-align: left;">
                        <input type="text" name="search" placeholder="Search by Name"><br>
                        <button type="submit" style="background-color: aqua; cursor: pointer;">Search</button>
                    </form>
                </button>
            </div>
            
            <div class="col-xl-4 col-md-4 col-sm-4 col-3 dflex justify-content-around" > <!-- Use col-12 here as well -->
                <a href="adminallcheck.php"><button type="button">Manage Customer</button></a>
            </div>
            <div class="col-xl-4 col-md-4 col-sm-4 col-3 dflex justify-content-around dlx" > <!-- Use col-12 here as well -->
                <a href="#"><button type="button">Previous Customer</button></a>
            </div>
        </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Outlet Type</th>
                            <th>Budget</th>
                            <th>Pincode</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($result)) { ?>
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['city']; ?></td>
                                    <td><?php echo $row['state']; ?></td>
                                    <td><?php echo $row['outlet']; ?></td>
                                    <td><?php echo $row['budget']; ?></td>
                                    <td><?php echo $row['pincode']; ?></td>
                                    <td>
                                        <form method="post" action="approve.php">
                                            <input type="hidden" name="phone_number" value="<?php echo $row['phone']; ?>">
                                            <button type="submit" name="approve" class="btn btn-success">Approve</button>
                                            <button type="submit" name="cancel" class="btn btn-danger">Not approve</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

            
<div class="lapvisible">
    <button type="button" class="fline my-button" >Approve now</button>    
    <button type="button" class="fline my-button">processing Fee</button>    
    <button type="button" class="fline my-button">Registration fee</button>    
    <button type="button" class="fline my-button">Agreement</button> 
    <br><br>
    <button type="button" class="sline my-button">NOC</button>    
    <button type="button" class="sline my-button">Mechinary & equipment</button>    
    <button type="button" class="sline my-button">Interior design</button>    
    <button type="button" class="sline my-button">Product order</button>   
    </div>
    
    
    <div class="mobvisible">
    <button type="button" class="fline my-button" >Approve<br>now</button>    
    <button type="button" class="fline my-button">processing<br>Fee</button>    
    <button type="button" class="fline my-button">Registration<br>fee</button>    
    <button type="button" class="fline my-button">Agreement<br>&nbsp;&nbsp;</button> 
    <br><br>
    <button type="button" class="sline my-button">&nbsp;&nbsp;NOC&nbsp;&nbsp; <br>&nbsp;&nbsp;</button>    
    <button type="button" class="sline my-button">Mechinary &<br>equipment</button>    
    <button type="button" class="sline my-button">Interior<br>design</button>    
    <button type="button" class="sline my-button">Product<br>order</button>  
    </div>

   

        <hr><hr>
    
   <!-- ||||||||||||footer|||||||||||||||||| -->
         
   <footer class="footer" width="100%">
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
		</footer>' <script src="js/jquery.min.js"></script>
		

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- <script src="js/jquery.min.js"></script> -->
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <!-- <script src="js/bootstrap.min.js"></script> -->
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="external08e7.html"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>




 </body>
</html>