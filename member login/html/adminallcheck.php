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
    
    $query = "SELECT * FROM registration";
    $result = mysqli_query($con, $query);
}


if (isset($_POST['update'])) {
    $phone_number = $_POST['phone_number'];
    $new_name = $_POST['new_name'];
    $new_email = $_POST['new_email'];
    $new_city = $_POST['new_city'];
    $new_state = $_POST['new_state'];
    $new_outlet = $_POST['new_outlet'];
    $new_budget = $_POST['new_budget'];
    $new_pincode = $_POST['new_pincode'];
    $new_regprice = $_POST['new_regprice'];

// <<<<<<< main
   
    $updateQuery = "UPDATE registration SET name='$new_name', email='$new_email', city='$new_city', state='$new_state', outlet='$new_outlet', budget='$new_budget', pincode='$new_pincode' WHERE phone='$phone_number'";
// =======
    // Update the record in the database
    $updateQuery = "UPDATE registration SET name='$new_name', email='$new_email', city='$new_city', state='$new_state', outlet='$new_outlet', budget='$new_budget', pincode='$new_pincode', regprice='$new_regprice' WHERE phone='$phone_number'";
// >>>>>>> saibackend
    
    if (mysqli_query($con, $updateQuery)) {
        echo "Record updated successfully.";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css" />
    <meta charset="utf-8">
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
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

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
    <div class="container">
        <div class="row">
            <div class="col">
            <h1 style="text-align:center;color:blue;border: 2px solid red; background-color:aqua;">Admin Panel</h1>
<!-- <<<<<<< second

            <p style="text-align:center;color:black;">change you customers data by choosing the right coloumn in table</p>
<!-- >>>>>>> main -->
=======
            <p style="text-align:center;color:black;">change you customers data by choosing the right coloumn in table</p>

            </div>
        </div>
    </div>
    <form method="post" style="text-align:right; margin-right:5%;" >
        <input type="text" name="search" placeholder="Search by Name">
        <button type="submit" style="background-color:aqua;cursor: pointer;">Search</button>
    </form>
    <br>
    <br>
    <form method="post" action="">
    <table border="1">
        <thead class="thead">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>City</th>
                <th>State</th>
                <th>Outlet Type</th>
                <th>Budget</th>
                <th>Pincode</th>
                <th>registration price<th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td contenteditable="true"><?php echo $row['name']; ?></td>
                    <td contenteditable="true"><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td contenteditable="true"><?php echo $row['city']; ?></td>
                    <td contenteditable="true"><?php echo $row['state']; ?></td>
                    <td contenteditable="true"><?php echo $row['outlet']; ?></td>
                    <td contenteditable="true"><?php echo $row['budget']; ?></td>
                    <td contenteditable="true"><?php echo $row['pincode']; ?></td>
                    <td contenteditable="true"><?php echo $row['regprice']; ?></td>
                    <td>
                        <button type="button" onclick="updateRecord(this, '<?php echo $row['phone']; ?>')">Update</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </form>
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
		</footer>' <script src="js/jquery.min.js"></script>
		




    <script>
        function updateRecord(button, phone_number) {
            var row = button.parentNode.parentNode;
            var cells = row.getElementsByTagName("td");

            var new_name = cells[0].textContent;
            var new_email = cells[1].textContent;
            var new_city = cells[3].textContent;
            var new_state = cells[4].textContent;
            var new_outlet = cells[5].textContent;
            var new_budget = cells[6].textContent;
            var new_pincode = cells[7].textContent;
            var new_regprice = cells[8].textContent;

            var form = document.createElement("form");
            form.method = "post";
            form.style.display = "none";
            
            var phone_number_input = document.createElement("input");
            phone_number_input.type = "hidden";
            phone_number_input.name = "phone_number";
            phone_number_input.value = phone_number;

            var new_name_input = document.createElement("input");
            new_name_input.type = "hidden";
            new_name_input.name = "new_name";
            new_name_input.value = new_name;

            var new_email_input = document.createElement("input");
            new_email_input.type = "hidden";
            new_email_input.name = "new_email";
            new_email_input.value = new_email;

            var new_city_input = document.createElement("input");
            new_city_input.type = "hidden";
            new_city_input.name = "new_city";
            new_city_input.value = new_city;

            var new_state_input = document.createElement("input");
            new_state_input.type = "hidden";
            new_state_input.name = "new_state";
            new_state_input.value = new_state;

            var new_outlet_input = document.createElement("input");
            new_outlet_input.type = "hidden";
            new_outlet_input.name = "new_outlet";
            new_outlet_input.value = new_outlet;

            var new_budget_input = document.createElement("input");
            new_budget_input.type = "hidden";
            new_budget_input.name = "new_budget";
            new_budget_input.value = new_budget;

            var new_pincode_input = document.createElement("input");
            new_pincode_input.type = "hidden";
            new_pincode_input.name = "new_pincode";
            new_pincode_input.value = new_pincode;
            var new_regprice_input = document.createElement("input");
            new_regprice_input.type = "hidden";
            new_regprice_input.name = "new_regprice";
            new_regprice_input.value = new_regprice;

            var update_button = document.createElement("button");
            update_button.type = "submit";
            update_button.name = "update";
            update_button.style.display = "none";

            form.appendChild(phone_number_input);
            form.appendChild(new_name_input);
            form.appendChild(new_email_input);
            form.appendChild(new_city_input);
            form.appendChild(new_state_input);
            form.appendChild(new_outlet_input);
            form.appendChild(new_budget_input);
            form.appendChild(new_pincode_input);
            form.appendChild(new_regprice_input);
            form.appendChild(update_button);
            document.body.appendChild(form);

            update_button.click();
        }
    </script>



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
