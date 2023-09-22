<?php
$un="";

$phones="";
$applicationid ="";
$number = $_POST['number'];
$con = mysqli_connect('localhost', 'root', '', 'mrftyres');

if (!$con) {
    echo "Failed to connect to the database: " . mysqli_connect_error();
} else {
    echo "Connection successful<br>";
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
            $outlet=$row['outlet'];
            $budget=$row['budget'];
            // echo "<div>";
            // echo "<h2 style= 'color:lightblack'>"."<span  style= 'color:blue'>"."Applicaion id: "."</span>"."MRF-f/".date("Ymd").$arr[0]."</h2>";
          
           echo $applicationid;
            // echo "<h2 style= 'color:lightblack'>". "<span  style= 'color:blue'>"."Name: "."</span>" .$row['name'] . "</h2>";
            // echo "<h2 style= 'color:lightblack'>". "<span  style= 'color:blue'>"."Phone: "."</span>" . $row['phone'] ."</h2>";
            // echo "<h2 style= 'color:lightblack'>". "<span  style= 'color:blue'>"."Email: "."</span>" . $row['email'] . "</h2>";
            // echo "<h2 style= 'color:lightblack'>". "<span  style= 'color:blue'>"."Address: "."</span>" .$row['city']. $row['state']."</h2>";
            // echo "<h2 style= 'color:lightblack'>". "<span  style= 'color:blue'>". "Budget: "."</span>". $row['budget']. "</h2>";
            // echo "</div>";

        }
    }

    
     else {
        echo "Failed to execute the query: " . mysqli_error($con);
    }

    mysqli_close($con);

?>
<html>
    <body >
        <img src="./images/logo.png" alt="headerbanner" width="100%" />
        
         <img align="left" src="./images/logo2.png" width="400" height="300">
    <center>
     
        <h1 style="color:orange">Hi Nice to See you below are the credentials</h1>
        <h2 style="color:red">your user id:</h2><?php echo $un;?>
        <h2 style="color:red">your password is:</h2><?php echo $phones;?>
        
        
      
    </center>
    
<table border="1">
    <thead >
        <td colspan="7"><h1 style="text-align:center;color:green;">Approved</h1></td>
    </thead>
<tbody>
            <tr>
               
                <td><b>APPLICATION ID</b></td>
                <td><b>NAME</b></td>
                <td><b>EMAIL</b></td>
                <td><b>PHONE NUMBER</b></td>
                <td><b>CITY</b></td>
                <td><b>OUTLET</b></td>
                <td><b>BUDGET</b></td>   
            
            </tr>
            <tr>
                <td><?php echo $applicationid;?></td>
                <td><?php echo $un;?></td>
                <td><?php echo $email;?></td>
                <td><?php echo $phone;?></td>
                <td><?php echo $city;?></td>
                <td><?php echo $outlet;?></td>
                <td>><?php echo $budget;?></td>

</tr>
</tbody>
</table>



        
    </body>
    
    
    
</html>