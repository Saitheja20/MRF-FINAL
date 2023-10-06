<?php

if (isset($_POST['approve'])) {
   
    $con = mysqli_connect('localhost', 'root', '', 'mrftyres');


    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());

  $con = mysqli_connect('localhost', 'root', '', 'mrftyres');

  // Check the connection
  if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
  }

  // Get the phone number from the hidden input field
  $phoneNumber = $_POST['phone_number'];
if (isset($_POST['approve'])) {
  
    $query = "UPDATE registration SET application_status = ' approved' WHERE phone = '$phoneNumber'";
    
    if (mysqli_query($con, $query)) {
        echo "Record with phone number $phoneNumber approved successfully!";
    } else {
        echo "Error updating record: " . mysqli_error($con);

    }
    // Your existing code for approving here
} else if (isset($_POST['cancel'])) {
    // Connect to the database
    


  
    $phoneNumber = $_POST['phone_number'];

   
    $query = "UPDATE registration SET application_status = 'approve' WHERE phone = '$phoneNumber'";

    // Update the status to "cancel" in the database using the phone number as a reference
    $query = "UPDATE registration SET application_status = 'Not approved' WHERE phone = '$phoneNumber'";



    if (mysqli_query($con, $query)) {
        echo "Record with phone number $phoneNumber not approved successfully!";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }

  
    mysqli_close($con);
}
?>
