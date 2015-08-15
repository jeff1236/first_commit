<?php
$age = $_GET["age"];
$gender = $_GET["gender"];


  function quote($age, $gender)
{
    if ($age < 25 && $gender == "male") {
      return "Your quote is the highest.";
    }
      elseif ($age > 25 && $gender == "female"){
        return "Your quote is the cheapest.";
      }
      else {
        return "Your car insurance is average.";
      }

    }


    //most. under 25 and male
    //least. over 25 and female
    //mid. under 25 and female OR over 25 and male
?>


<!DOCTYPE html>
<htmL>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  </head>
<body>
  <h1> <?php echo quote($age, $gender); ?> </h1>
</body>
</html>
