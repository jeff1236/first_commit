<?php
    class Contact //each object created from this class is called a Contact;
    //each object of the class Contact will hold 3 properties/variables
    {
        public $name;
        public $phone;
        public $address;
        public $image_path;
    }

    //instantiation --> 3 instances of the class Contact, meaning 3 objects
    //created
    $hendrix = new Contact();
    //find the object stored inside variable $hendrix, then look inside that
    //object for a property called "name", then set the value of that property
    //equal to the right side of the -> symbol.
    $hendrix->name = "Jimi Hendrix";
    $hendrix->phone = "503-826-9371";
    $hendrix->address = "208 SW 5th St., Portland, OR 97204";
    $hendrix->image_path = "images/hendrix.jpg";

    $elvis = new Contact();
    $elvis->name = "Elvis Presley";
    $elvis->phone = "503-825-9822";
    $elvis->address = "266 SW 6th St., Portland, OR 97205";
    $elvis->image_path = "images/elvis.jpg";

    $einstein = new Contact();
    $einstein->name = "Albert Einstein"; //name is property of einstein object
    $einstein->phone = "503-878-6585";
    $einstein->address = "382 SW 17th St., Portland, OR 97206";
    $einstein->image_path = "images/einstein.jpg";

    $marie = new Contact();
    $marie->name = "Marie Curie";
    $marie->phone = "516-825-2289";
    $marie->address = "698 SW 56th St., Portland, OR 97207";
    $marie->image_path = "images/marie.jpg";

    $janis = new Contact();
    $janis->name = "Janis Joplin";
    $janis->phone = "800-800-9774";
    $janis->address = "626 NE 68th St., Portland, OR 97208";
    $janis->image_path = "images/janis.jpg";


    //put objects into an array
    $address_book = array($hendrix, $elvis, $einstein, $marie, $janis);
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <title>Address Book</title>
</head>
<body>
  <div class="container">
    <h1>Address Book</h1>
    <ul>
      <?php
          foreach ($address_book as $contact) {  //foreach will print the result of everyting looped through.
            echo "<li>";
            echo $contact->name;
            echo "<ul>";
            echo "<li><img src='$contact->image_path'></li>";
            echo "<li> $contact->phone </li>";
            echo "<li> $contact->address </li>";
            echo "</ul>";
            echo "</li>";
          }
      ?>
    </ul>
  </div>
</body>
</html>
