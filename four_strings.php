<?php
    $name = $_GET["full_name"];
    $city = $_GET["city"];
    $zodiac = $_GET["zodiac"];
    $food = $_GET["food"];
    $upper = strtoupper($name);
    $characters = str_word_count($city);
    $shuffled = str_shuffle($zodiac);
    $position = stripos($food, "p");

?>

<html>
<body>
  <h3>Your Name:</h3>
    <p><?php echo $upper;?></p>
  <h3>Number of words in your favorite city:</h3>
    <p><?php echo $characters; ?>
  <h3>Your zodiac sign shuffled:</h3>
    <p><?php echo $shuffled; ?></p>
  <h3>The first occurence of the letter "p" is:</h3>
    <p><?php echo $position; ?></p>
  </body>
  </html>
