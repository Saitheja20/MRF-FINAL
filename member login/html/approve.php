<?php
if (isset($_POST['approve'])) {
    // Connect to the database
    $con = mysqli_connect('localhost', 'root', '', 'mrftyres');

    // Check the connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the phone number from the hidden input field
    $phoneNumber = $_POST['phone_number'];

    // Update the status to "approve" in the database using the phone number as a reference
    $query = "UPDATE registration SET application_status = 'approve' WHERE phone = '$phoneNumber'";

    if (mysqli_query($con, $query)) {
        echo "Record with phone number $phoneNumber approved successfully!";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
}
?>
