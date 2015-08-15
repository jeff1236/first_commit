<?php
  $full_name = $_GET["full_name"];
  $address = $_GET["address"];
?>

<!DOCTYPE html>
<html>
<body>
<h1>Order Receipt</h1>
<h3>Thanks for your order <?php echo $full_name; ?>.</h3>
<h3>We'll be shipping your products to: </h3>
  <p><?php echo $address; ?></p>
</body>
</html>
