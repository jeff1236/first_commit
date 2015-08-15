<?php
    $weight_one = $_GET["weight"] *.90;

    $distance_one = $_GET["distance"] * .99;
    $total = ($weight_one + $distance_one);
 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
<h3>Your Grand Total Is:</h3>
<h4>$<?php echo $total; ?>
</body>
</html>
