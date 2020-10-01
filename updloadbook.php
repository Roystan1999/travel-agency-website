<?php

include 'dbcon.php';
if(isset($_POST['submit'])){
$add_place = $_POST['add_place'];
$number_of_adults = $_POST['number_of_adults'];
$description = $_POST['description'];
$Stay_amount = $_POST['Stay_amount'];
$food_amount = $_POST['food_amount'];
$number_of_days = $_POST['number_of_days'];
$insertuery = " insert into addplace( add_place,number_of_adults,description,Stay_amount,food_amount,number_of_days )values( '$add_place','$number_of_adults','$description','$Stay_amount','$food_amount','$number_of_days' )";
 $query = mysqli_query($con,$insertuery);

 if($query){
     echo "inserted";
 }else{
     echo"not inserted";
 }
 header('location:addplace.php');
}
else{
    echo "no buttn has clicked";
}

?>