<?php
    $recipient = "Mr. Ed";
    $downtown_address = "208 SW 5th Ave #110, Portland, OR 97204";
    $northwest_address = "1978 20th Ave, Portland, OR 97209";
    $south_address = "1493 SW 3rd Ave, Portland, OR 97201";
    $downtown_order = "3,000 cups";
    $northwest_order = "5,000 cups";
    $south_order = "10,000 cups";
?>

<!DOCTYPE html>
<html>
<head>
  <title>Order Form</title>
</head>

<body>
  <p>Hi <?php echo $recipient; ?> ,</p>
  <p>Just making my weekly order. Details are below</p>
  <p><?php echo $downtown_order; ?></p>
  <p><?php echo $downtown_address; ?></p>
  <p><?php echo $northwest_order; ?></p>
  <p><?php echo $northwest_address; ?></p>
  <p><?php echo $south_order; ?></p>
  <p><?php echo $south_address; ?></p>
  <p>Thanks,</p>
  <p>Jeff</p>
</body>
</html>
