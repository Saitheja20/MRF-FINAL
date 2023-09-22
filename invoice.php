<?php
// include 'status.php';


// Start the session (make sure to start the session in file2.php as well)
session_start();

// Access the stored variables from the session
$un = $_SESSION['un'];
$phone = $_SESSION['phone'];
$email = $_SESSION['email'];
$city = $_SESSION['city'];
$state = $_SESSION['state'];
$budget = $_SESSION['budget'];
$outlet = $_SESSION['outlet'];
$pincode = $_SESSION['pincode'];
$applicationid = $_SESSION['applicationid'];

// Now you can use these variables in file2.php
// For example, you can echo them to display the data or perform other operations
// echo "Name: $un<br>";
// echo "Phone: $phone<br>";
// echo "Email: $email<br>";
// echo "City: $city<br>";
// echo "State: $state<br>";
// echo "Budget: $budget<br>";
// echo "Outlet: $outlet<br>";
// echo "Pincode: $pincode<br>";
// echo "application id : $applicationid<br>";



?>


<html lang="en">
    <head>
        <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="invoice.css">
</head>
<body>
<div class="cen">
    
    <div class="center">
        <img style="text-align:center;" src="./images/logo2.png" alt="MRF LOGO" width="120" height="100" />
    </div>
<div>
<h3><b>MRF Limited</b></h3>

<h4> MRF Limited,  124
Greams Road,Chennai </h4>
<h4>  Tamil Nadu,India  </h4>

<p>Website: www.mrftyrefranchises.com</p>
<p>Email: info@mrftyrefranchises.com</p>
<br>
<br>

</div>
<div class="container-fluide">
    <div class="row">
        <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 left">
            <p><i>Bill To: </i></p>

            <p><b><?php echo $un ?></b></p>
            <p><b><?php echo $city.",  ".$state ?></b></p>
            <p><b><?php echo ", ". $pincode ?></p>
            <p><b><?php echo $email ?></b></p>

        </div>
        <div class="col-lg-6 col-xl-6 col-md-6 col-sm-6 right">
            <p> invoice:&emsp; &emsp; &ensp; &ensp; <?php echo $applicationid ?> </p>  
            <p> Date:&emsp; &emsp; &ensp; &ensp;&emsp; &nbsp; <?php echo date("Y-m-d"); ?></p>
            <p>Status:&emsp; &emsp; &ensp; &ensp; </p>
            <p>Application:&emsp; &emsp; <?php echo $applicationid ?></p>

        </div>
    </div>  
</div>
<table class="table" border="1">
<thead>
<tr>
    <td><b>PARTICULARS</b></td>
    <td><b>AMOUNT (INR)</b></td>
</tr>
</thead>
<tbody>
<tr>
    <td>Registration Fee</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
    <td>
    18% GST for Indian Residents only
    </td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr>
    <td>TOTAL</td>
    <td class="t"><b>&nbsp;&nbsp;&nbsp;&nbsp;15487</b></td>
</tr>
</tbody>
</table>

<br>
<br>
<hr>
<h3 class="center">This is computer Generated Invoice No Need Signature</h3>
<h4 class="h4">Thank you</h4>
<div class="center text-center">
<button class="btn btn-info" onclick="window.print();return false;">print</button>
</div>
</div>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
<html>