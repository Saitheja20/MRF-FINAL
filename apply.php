
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
$result = mysqli_query($con, $query);

if($result){
    echo "data inserted successfully";
    // header("Location: thanks.html");
}
else{
    echo "OOPS somthing went wrong please check amd re-enter details";
}


?>

