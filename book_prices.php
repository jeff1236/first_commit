<?php

    $book_prices = array(25, 10.99, 13.50, 33, 50);
    $total_price = 0;

?>


<!DOCTYPE html>
<html>
<head>
  <title>Array Practice</title>
</head>
<body>
  <h1>My Grocery List</h1>
  <p>
    <?php

          foreach ($book_prices as $current_price) {
            echo "the total price so far is: $total_price";
            $total_price = $total_price + $current_price; // this is how to keep a running balance
          }

          echo "Our books will cost $$total_price" ;

    ?>
  </p>
</body>
</html>
