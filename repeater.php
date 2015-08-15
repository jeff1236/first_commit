<?php
    $message = $_GET["repeat_text"];
    $number = $_GET["number_of_repeats"];
    $repeated_message = str_repeat($message, $number);
?>
<html>
<head>
  <title>String Repeating</title>
</head>
<body>
  <h1>Here ya go!</h1>
  <p><?php echo $repeated_message; ?></p>
</body>
</html>
