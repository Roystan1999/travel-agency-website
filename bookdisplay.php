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
        <th>add place</th>
        <th>num of adults</th>
        <th>description</th>
        <th>Stay amount</th>
        <th>food amount</th>
        <th>num of days</th>
      </tr>
    </thead>

    <tbody>

    
    <?php

    include 'dbcon.php';

    $selectquery = "select * from addplace";

    $query = mysqli_query($con,$selectquery);

    $result = mysqli_fetch_array($query);
    while($result = mysqli_fetch_array($query)){

    ?>
<tr>
<td> <?php echo $result['id']; ?></td>
<td> <?php echo $result['add_place']; ?></td>
<td> <?php echo $result['number_of_adults']; ?></td>
<td> <?php echo $result['description']; ?></td>
<td> <?php echo $result['Stay_amount']; ?></td>
<td> <?php echo $result['food_amount']; ?></td>
<td> <?php echo $result['number_of_days']; ?></td>
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