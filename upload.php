<?php

include 'dbcon.php';
if(isset($_POST['submit'])){
$add_place = $_POST['add_place'];
$number_of_adults = $_POST['number_of_adults'];
$description = $_POST['description'];
$Stay_amount = $_POST['Stay_amount'];
$food_amount = $_POST['food_amount'];
$number_of_days = $_POST['number_of_days'];
$file = $_FILES['photo'];

$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];

if($fileerror == 0){
    $destfile = 'upload/'.$filename;

    move_uploaded_file($filepath, $destfile);

$insertuery = " insert into addplace( add_place,number_of_adults,description,Stay_amount,food_amount,number_of_days,pic)values( '$add_place','$number_of_adults','$description','$Stay_amount','$food_amount','$number_of_days','$destfile')";
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
}
?>