<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <?php include 'links/links.php' ?>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="imagess/aa.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="logincheck.php" method="POST">
      <input type="text" name="user" class="fadeIn second"  placeholder="Username" autocomplete='off'>
      <input type="text" name="pass" class="fadeIn third" placeholder="password" autocomplete='off'>
      <input type="submit"  name="submit" class="fadeIn fourth" value="Log In">
    </form>

  </div>
</div>
</body>
</html>


