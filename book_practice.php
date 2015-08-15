<?php
    $book_prices = array(25, 10.99, 13.50, 33, 50);
    $total_price = 0;
    $for_each = foreach ($book_prices as $current_book_price) {
     echo "<li>" . "The total price so far is:$total_price" . "</li>";
     $total_price = $total_price + $current_book_price;

      }







?>
<!DOCTYPE html>
<html>
<head>
  <title>Array Practice</title>
</head>
<body>
  <h1>My Grocery List</h1>
  <ul>
    <?php
      echo "<li>" . $for_each . "</li>";
      ?>
  </ul>
</body>
</html>
