<?php
    $color = $_GET["color"];


    function favColor($color)
    {
        if ($color == "red" || $color == "orange") {
            return "Your lucky number is 17.";
        }
          elseif ($color == "green" || $color == "yellow" ) {
              return "Your lucky number is 15.";
          }
          else {
            return "I don't know that color";
          }
    }

?>
<!DOCTYPE html>
<html>
<body>
  <h1>Your fortune is: <?php echo favColor($color); ?></h1>
</body>
</html>
