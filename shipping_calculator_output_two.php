<?php

$weight = $_GET["weight"];
    function calculate($weight, $distance)
    {

        $distance = $_GET["distance"];
        $total = ($weight / 20) + ($distance / 20);
        return $total;
    
    }

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
<h1>Your total price is: <?php echo calculate($weight, $distance); ?></h1>
</body>
</html>
