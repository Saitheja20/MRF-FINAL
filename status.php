<?php
$un="";
$arr="";
$phones="";
$applicationid ="";
$number = $_POST['number'];
$con = mysqli_connect('localhost', 'root', '', 'mrftyres');

if (!$con) {
    echo "Failed to connect to the database: " . mysqli_connect_error();
} else {
    // echo "Connection successful<br>";
}
    $query = "SELECT * FROM registration WHERE phone LIKE '%$number%' OR email LIKE '%$number%'";
    $result = mysqli_query($con, $query);

    if (!empty($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $un=$row['name'];
            $phones=$row['phone'];
            $name=$row['name'];
            $applicationid = $phones;
            $arr = str_split($applicationid,strlen($applicationid)/2);  
            $email=$row['email'];
            $phone=$row['phone'];
            $city=$row['city'];
            $state=$row['state'];
            $outlet=$row['outlet'];
            $budget=$row['budget'];
            $pincode=$row['pincode'];
           
            $registration_date=$row['registration_date'];
            $regprice=$row['regprice'];

            $application_id=$row['application_id'];
            $application_status=$row['application_status'];
            // echo "hello".$pincode;
            // echo "<div>";
            // echo "<h4 style= 'color: #787878'>"."<span  style= 'color: #0000FF'>"."Applicaion id: "."</span>"."MRF-f/".date("Ymd").$arr[0]."</h4>";
          
        
            // echo "<h4 style= 'color: #787878'>". "<span  style= 'color: #0000FF'>"."Name: "."</span>" .$row['name'] . "</h4>";
            // echo "<h4 style= 'color: #787878'>". "<span  style= 'color: #0000FF'>"."Phone: "."</span>" . $row['phone'] ."</h4>";
            // echo "<h4 style= 'color: #787878'>". "<span  style= 'color: #0000FF'>"."Email: "."</span>" . $row['email'] . "</h4>";
            // echo "<h4 style= 'color: #787878'>". "<span  style= 'color: #0000FF'>"."Address: "."</span>" .$row['city']. $row['state']."</h4>";
            // echo "<h4 style= 'color: #787878'>". "<span  style= 'color: #0000FF'>". "Budget: "."</span>". $row['budget']. "</h4>";
            // echo "</div>";

        }
    }

    
     else {
        echo "Failed to execute the query: " . mysqli_error($con);
    }
    function generateApplicationId($phone) {
        $arr = str_split($phone,strlen($phone)/2);
        $applicationid = "MRF-f/".date("Ymd").$arr[0];
        return $applicationid;
    }
    
    // Call the function and assign the result to a variable
    $applicationid = generateApplicationId($phone);
    // echo $applicationid;
// Start a session
session_start();

// Store the variables in the session
$_SESSION['un'] = $un;
$_SESSION['phone'] = $phone;
$_SESSION['email'] = $email;
$_SESSION['city'] = $city;
$_SESSION['state'] = $state;
$_SESSION['budget'] = $budget;
$_SESSION['outlet'] = $outlet;
$_SESSION['pincode'] = $pincode; // Assuming you have a variable named $pincode
$_SESSION['application_id']= $application_id;
$_SESSION['registration_date']=$registration_date;
$_SESSION['application_status']=$application_status;
$_SESSION['regprice']=$regprice;
    mysqli_close($con);

?>
<html>
    <head>
    <title>MRF Franchise | Status Check </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Apply for MRF tyres dealership and franchise in India. Get mrf distributorship. Apply Online for tyres franchise.">
    <meta name="keywords" content="MRF Tyres Dealership, MRF Tyres Franchise, Mrf Tyres Dealership Application, MRF Tyres Dealership Apply, mrf tyres franchise apply online" >
    <link href="external2fbb.html" rel="stylesheet">
    <link href="externalf197.html" rel="stylesheet">
    <meta name="description" content="MRF Tyres is looking for MRF Tyres Dealership partner in India. We, an MRF Dealership chain is inviting MRF Tyres Dealership application.">
    <meta name="keywords" content="MRF Dealership, MRF Tyres Dealership, MRF Tyres Franchise">
    <link rel="stylesheet" href="stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.html">
 
    <link rel="stylesheet" href="css/animate.css">    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="status.css">
   

</head>
    <body >
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index-2.html"><img src="images/logo.png" class="mrf tyres distributorship"width="250" height="80"></a>
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
         <!-- <img src="./images/logo.png" alt="headerbanner" width="100%" /> -->


         <div style="background-color:black; color:white;opacity:0.95;margin-top:1.5rem; display:inline-bblock">
                 <h1 style="text-align:left;color:white;opacity:1;margin-left:2rem;;font-style:italic;padding-top:2.5rem;">Check Status </h1>

                <h1 style="text-align:right; margin-right:1.5rem;margin-top:-5.5rem;"> <img src="./images/logo2.png" alt="headerbanner" width="120px" height="120px" /></h1>
</div>



<div style="text-align:center;display: block;justify-content: left;border: solid 2px red;">
        <?php
echo "<div style='font-family: 'Merriweather', serif;font-weight:bold;'>"; 

?>
<?php
if ($application_status == "approved") {
    echo "<h4 style='color: green;'>" . "<span style='color: #0000FF'>" . "Application status: " . "</span>" . $application_status . "</h4>";
} else {
    echo "<h4 style='color: red;'>" . "<span style='color: #0000FF'>" . "Application status: " . "</span>" . $application_status . "</h4>";
}
?>
<?php

            echo "<h4 style= 'color: black;'>"."<span  style= 'color: #0000FF'>"."Applicaion id:- "."</span>"."MRF-f/".date("Ymd").$arr[0]."</h4>";
          
        //    echo $applicationid;
// <<<<<<< second

            echo "<h4 style= 'color: black'>". "<span  style= 'color: #0000FF'>"."Name of Applicant:- "."</span>" .$un . "</h4>";
            echo "<h4 style= 'color: black'>". "<span  style= 'color: #0000FF'>"."Contact Number:- "."</span>" . $phone."</h4>";
            echo "<h4 style= 'color: black'>". "<span  style= 'color: #0000FF'>"."Email:- "."</span>" . $email . "</h4>";
            echo "<h4 style= 'color: black'>". "<span  style= 'color: #0000FF'>"."Business Address:- "."</span>" .$city .","."<span>" .$state."</span>"."</h4>";
            echo "<h4 style= 'color: black'>". "<span  style= 'color: #0000FF'>". "Budget: "."</span>". $budget. "</h4>";

            echo "<h4 style= 'color: black'>". "<span  style= 'color: #0000FF'>". "Application For business Types:- "."</span>". $outlet. "</h4>";

            echo "</div>";

// =======
// >>>>>>> main

            echo "<h4 style= 'color: black'>". "<span  style= 'color: #0000FF'>"."Name of Applicant:- "."</span>" .$un . "</h4>";
            echo "<h4 style= 'color: black'>". "<span  style= 'color: #0000FF'>"."Contact Number:- "."</span>" . $phone."</h4>";
            echo "<h4 style= 'color: black'>". "<span  style= 'color: #0000FF'>"."Email:- "."</span>" . $email . "</h4>";
            echo "<h4 style= 'color: black'>". "<span  style= 'color: #0000FF'>"."Business Address:- "."</span>" .$city .","."<span>" .$state."</span>"."</h4>";
            echo "<h4 style= 'color: black'>". "<span  style= 'color: #0000FF'>". "Budget: "."</span>". $budget. "</h4>";

// <<<<<<< second

?>
<!-- <<<<<<< main -->
<!-- <<<<<<< main -->

</div><?php
if ($application_status == "approved") {
?>
<div class="button" style="text-align:center; cursor: pointer;">
   <a href="invoice.php"><button style="background-color: green;">Get Invoice</button></a>
   <a href='../base.apk' download><button style="background-color: green;">Business app</button></a>
   <a href=""><button style="background-color: green;">Contact US</button></a>
<!-- >>>>>>> touhidbackend -->
</div>
<?php
} else {
?>
<h4 style="text-align:center; color:red">application status: not approved</h4>
<?php
}
?>
</div>

<!-- ======= -->
            echo "<h4 style= 'color: black'>". "<span  style= 'color: #0000FF'>". "Application For business Types:- "."</span>". $outlet. "</h4>";
<!-- >>>>>>> main
 -->
            echo "</div>";
<!-- 
<!-- <<<<<<< second -->
<!-- ======= -->

======= -->
</div><?php
if ($application_status == "approved") {
?>
<div class="button" style="text-align:center; cursor: pointer;">
   <a href="invoice.php"><button style="background-color: green;">Get Invoice</button></a>
   <a href='../base.apk' download><button style="background-color: green;">Business app</button></a>
   <a href=""><button style="background-color: green;">Contact US</button></a>
</div>
<?php
} else {
?>
<h4 style="text-align:center; color:red">application status: not approved</h4>
<?php
}
?>
<!-- >>>>>>> saibackend -->


?>
</div>
<div class="button" style="text-align:center; cursor: pointer;">
   <a href="invoice.php" ><button >Get Invoice</button></a>
  <a href='../base.apk' download>  <button >Business app</button></a>
  <a href="" > <button>Contact US</button></div></a> 
</div>
<!-- >>>>>>> main



 -->

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