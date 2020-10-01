<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'css/style.php' ?>
    <?php include 'links/links.php' ?>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="bootstrap/css/font-awesome-5.8.1.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/mdb.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="css/stylee.css">
    <style>
        form { 
margin: 0 auto; 
width:250px;
}
    </style>
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
                        <a href="display.php" class="nav-link">View Packages</a>  
                    </li>
                    <li class="nav-item px-3">
                        <a href="displaybook.php" class="nav-link">View User enquires</a>  
                    </li>
                    <li class="nav-item px-3">
                        <a href="logout.php" class="nav-link">LOGOUT</a>  
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</section>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <div style="text-align: center">
     <div class="row register-form">
    <div class="col-mod-11">
    <div class="form-group">
    <label>Place </label>
    <input type="text" class="form-control" placeholder="" name="add_place"  value="" required/>
    </div>

    <div class="form-group">
    <label>Number of Adults</label>
    <input type="text" class="form-control" placeholder="" name="number_of_adults"  value="" required/>
    </div>

    <div class="form-group">
    <label>description</label>
    <input type="text" class="form-control" placeholder="" name="description"  value="" required/>
    </div>

    <div class="form-group">
    <label>Stay amount</label>
    <input type="text" class="form-control" placeholder="" name="Stay_amount"  value="" required/>
    </div> 

    <div class="form-group">
    <label>Food Amount</label>
    <input type="text" class="form-control" placeholder="" name="food_amount"  value="" required/>
    </div>

    <div class="form-group">
    <label>NUmber of Days</label>
    <input type="text" class="form-control" placeholder="" name="number_of_days"  value="" required/>
   </div>

   <div class="form-group">
    <label> UPLOAD PHOTO</label>
    <input type="file" class="form-control" placeholder="" name="photo"  />
   </div>

    <div class="form-group">
    <input type="submit" class="btnRegister" name="submit"  value="submit">
    </div>
   
    </div></div></div></form>
</body>
</html>