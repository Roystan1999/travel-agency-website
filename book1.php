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

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>
<section id="s1">
        
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
                            <a href="viewall.html" class="nav-link">PACKAGES</a>
                        </li>
                        <li class="nav-item px-3">
                          <a href="logout.php" class="nav-link">LOGOUT</a>
                      </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
</section>

<section id="contact" class="p-3">
        <div class="container">
            <div class="row">
            <div class="col-md-6 ">
									<div class="hotel-entry">
										<a href="hotel-room.html" class="hotel-img" style="background-image: url(imagess/goa.jpg);">
											<p class="price"><span>&#x20B9;20,000</span><small> /per booking</small></p>
										</a>
										<div class="desc">
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span> 545 Reviews</p>
											<h3><a href="hotel-room.html">Goa</a></h3>
											<p><ul><li>Two double beds</li>
                        <li>babysitting facilities</li><li>1 free bed available on request</li></ul>
                        </p>
                    	</div>
									</div>
            
</div>
<div class="col-md-6">
<form action="bookupload.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <label>NAME </label>
    <input type="text" class="form-control" placeholder="" name="name"  value="" required/>
    </div>

    <div class="form-group">
    <label>MOBILE NUMBER</label>
    <input type="text" class="form-control" placeholder="" name="mobile"  value="" required/>
    </div>

    <div class="form-group">
    <label>DATE</label>
    <input type="date" class="form-control" placeholder="" name="date"  value="" required/>
    </div>

    <div class="form-group">
    <label>ENQUIRY</label>
    <textarea row='4' class="form-control" placeholder="" name="enquiry"  value="" required></textarea>
    </div> 

    <div class="form-group">
    <input type="submit" class="btnRegister" name="confirm"  value="submit">
    </div>
   
    </div></div></div></form>
</div></div></section>
    




</body>
</html>

