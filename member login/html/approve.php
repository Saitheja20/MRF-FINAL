<?php
if (isset($_POST['approve'])) {
   
    $con = mysqli_connect('localhost', 'root', '', 'mrftyres');


    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

  
    $phoneNumber = $_POST['phone_number'];

   
    $query = "UPDATE registration SET application_status = 'approve' WHERE phone = '$phoneNumber'";

    if (mysqli_query($con, $query)) {
        echo "Record with phone number $phoneNumber approved successfully!";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }

  
    mysqli_close($con);
}
?>
