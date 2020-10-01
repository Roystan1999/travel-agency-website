<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome-5.8.1.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/mdb.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="css/admin.css">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body> 
<section id="s1">
    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-teal">
        <div class="container">
            <a href="index.html" class="navbar-brand">
               <i class="fa fa-plane-departure"></i>Star Tours</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#travel-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="travel-navbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-3">
                        <a href="index.html" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="logout.php" class="nav-link">LOGOUT</a>  
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</section>
</div>  <div class="wrapper fadeInDown">
        <div id="formContent">    
          <form action="" method="">
          <br>   <a href="addplace.php" class="btn btn-danger"> ADD PACKAGES</a></br>
  <br>  <a href="display.php" class="btn btn-danger"> VIEW PACKAGES</a></br>
  <br>  <a href="displaybook.php" class="btn btn-danger"> VIEW BOOKING ENQUIRYS</a></br>
          </form>
</body>
</html>