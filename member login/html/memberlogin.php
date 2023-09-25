 <?php

$mlogin=$_POST['mlogin'];
$phone=$_POST['phone'];

$con=mysqli_connect('localhost','root','','mrftyres');

if (!$con) {
     echo "Failed to connect to the database: " . mysqli_connect_error();
} else {
    // echo "Connection successful<br>";
} 
$query = "SELECT * FROM registration WHERE mlogin LIKE '%$mlogin%' AND  phone LIKE '%$phone%'";
$result = mysqli_query($con, $query);

if ($result) {
 
    // . mysqli_error($con);  
    echo "you'r Up!!!";
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
        $mlogin=$row['mlogin'];
}
}
else{
    echo "Failed to execute the query: " ;

    }
   
?> 