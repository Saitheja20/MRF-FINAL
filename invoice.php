<?php
// include 'status.php';


session_start();


$un = $_SESSION['un'];
$phone = $_SESSION['phone'];
$email = $_SESSION['email'];
$city = $_SESSION['city'];
$state = $_SESSION['state'];
$budget = $_SESSION['budget'];
$outlet = $_SESSION['outlet'];
$pincode = $_SESSION['pincode'];
$applicationid = $_SESSION['applicationid'];


// echo "Name: $un<br>";
// echo "Phone: $phone<br>";
// echo "Email: $email<br>";
// echo "City: $city<br>";
// echo "State: $state<br>";
// echo "Budget: $budget<br>";
// echo "Outlet: $outlet<br>";
// echo "Pincode: $pincode<br
// echo "application id : $applicationid<br>";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="invoice.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="cente">
    <div class="container" style="border:solid 2px black;">
        <div class="text-center">
            <img src="./images/logo2.png" alt="MRF LOGO" width="120" height="100" />
        </div>
        <h3 class="text-center"><b>MRF Limited</b></h3>
        <h4 class="text-center">MRF Limited, 124 Greams Road, Chennai</h4>
        <h4 class="text-center">Tamil Nadu, India</h4>
        <p class="text-center">Website: www.mrftyrefranchises.com</p>
        <p class="text-center">Email: info@mrftyrefranchises.com</p>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <p><i>Bill To:</i></p>
                <p><b><?php echo $un ?></b></p>
                <p><b><?php echo $city . ", " . $state ?></b></p>
                <p><b><?php echo ", " . $pincode ?></b></p>
                <p><b><?php echo $email ?></b></p>
            </div>
            <div class="col-md-6">
                <p>Invoice: <?php echo $applicationid ?></p>
                <p>Date: <?php echo date("Y-m-d"); ?></p>
                <p>Status:</p>
                <p>Application: <?php echo $applicationid ?></p>
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
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>18% GST for Indian Residents only</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>TOTAL</td>
                    <td class="t"><b>&nbsp;15487</b></td>
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        <hr>
        <h4 class="text-center" style="color:red;">This is computer-generated Invoice. No Need for Signature</h4>
        <h5 class="text-center">Thank you</h5>
        <div class="text-center">
            <button class="btn btn-info" onclick="window.print();return false;">Print</button>
        </div>
    </div>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
