<?php

include 'dbcon.php';
if(isset($_POST['confirm'])){
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$date = $_POST['date'];
$enquiry = $_POST['enquiry'];

$insertuery = " insert into enquiry (name,mobile,date,enquiry) values( '$name','$mobile','$date','$enquiry')";
 $query = mysqli_query($con,$insertuery);

 if($query){
     echo "inserted";
 }else{
     echo"not inserted";
 }
 header('location:bookingconfirmed.php');
}
else{
    echo "no buttn has clicked";
}

?>