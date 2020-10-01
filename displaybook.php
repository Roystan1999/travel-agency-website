<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'css/style.php' ?>
    <?php include 'links/links.php' ?>
</head>
<body>
<div class="container">    
  <table class="table">
    <thead>
      <tr style="center">
      <th>id</th>
        <th>name</th>
        <th>mobile</th>
        <th>date</th>
        <th>enquiry</th>
      </tr>
    </thead>

    <tbody>

    
    <?php

    include 'dbcon.php';

    $selectquery = "select * from enquiry";

    $query = mysqli_query($con,$selectquery);

    $result = mysqli_fetch_array($query);
    while($result = mysqli_fetch_array($query)){

    ?>
<tr>
<td> <?php echo $result['id']; ?></td>
<td> <?php echo $result['name']; ?></td>
<td> <?php echo $result['mobile']; ?></td>
<td> <?php echo $result['date']; ?></td>
<td> <?php echo $result['enquiry']; ?></td>
</tr>
    <?php
    }
    ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
</body>
</html>