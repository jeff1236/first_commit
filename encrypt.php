<?php
    $new_string = encode($_GET["message"]);

    function encode($input_phrase)
    {
        $reversed_phrase = strrev($input_phrase);
        $capitalized_phrase = strtoupper($reversed_phrase);
        return $capitalized_phrase;
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Encrypt a Message</title>
</head>
<body>
  <div class="container">
    <h1>Message Encrypted!</h1>
    <h2>Here you go: <?php echo $new_string ?>
  </div>
</body>
</html>
