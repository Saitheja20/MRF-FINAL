
<?php
$name=$_POST['name'];
$email= $_POST['email'];
$phone = $_POST['phone'];
$city= $_POST['city'];
$state = $_POST['state'];
$outlet = $_POST['outlet'];
$budget = $_POST['budget'];
$pincode = $_POST['pincode'];

$con =@mysqli_connect('localhost','root','','mrftyres');
$query = " insert into registration values('$name','$email','$phone','$city','$state','$outlet','$budget','$pincode')";
$result = mysql_query($con, $query)

if($result){
    echo "<script>alert("Thank you $name, Your application has been Successfully Received.")</script>";
    // header("Location: thanks.html");
}
else{
    echo "OOPS somthing went wrong please check amd re-enter details"
}
?>

