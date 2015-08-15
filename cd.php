<?php

    class CD
    {
        public $title;
        public $artist;
        public $price;
        public $cover_art;

        function __construct($album_name, $band_name, $image_path, $album_price = 10.99)
        {
            $this->title = $album_name;
            $this->artist = $band_name;
            $this->cover_art = $image_path;
            $this->price = $album_price;
        }


    }

    // these 3 lines create objects and replace the below 15 lines of code
    // cds 1-3 use the default price of 10.99
    $first_cd = new CD("Master of Reality", "Black Sabbath", "images/sabbath.jpg");
    $second_cd = new CD("Electric Ladyland", "Jimi Hendrix", "images/hendrix.jpg");
    $third_cd = new CD("Nevermind", "Nirvana", "images/nirvana.jpg");
    $fourth_cd = new CD("I don't get it", "Pork Lion", "images/marie.jpg");

    // $first_cd = new CD();
    // $first_cd->title = "Master of Reality";
    // $first_cd->artist = "Black Sabbath";
    // $first_cd->cover_art = "images/sabbath.jpg";
    // $first_cd->price = 10.99;
    //
    // $second_cd = new CD();
    // $second_cd->title = "Electric Ladyland";
    // $second_cd->artist = "Jimi Hendrix";
    // $second_cd->cover_art = "images/hendrix.jpg";
    // $second_cd->price = 10.99;
    //
    // $third_cd = new CD();
    // $third_cd->title = "Nevermind";
    // $third_cd->artist = "Nirvana";
    // $third_cd->cover_art = "images/nirvana.jpg";
    // $third_cd->price = 10.99;
    //
    // $fourth_cd = new CD();
    // $fourth_cd->title = "I don't get it";
    // $fourth_cd->artist = "Pork Lion";
    // $fourth_cd->cover_art = "images/marie.jpg";
    // $fourth->price = 10.99;

    $cds = array($first_cd, $second_cd, $third_cd, $fourth_cd);

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>MY CD Store</title>
</head>
<body>
    <div class="container">
        <?php
            foreach ($cds as $album) {
                echo "<div class='row'>
                    <div class='col-md-6'>
                        <img src='$album->cover_art'>
                    </div>
                    <div class='col-md-6'>
                        <p>$album->title</p>
                        <p>By $album->artist</p>
                        <p>$$album->price</p>
                    </div>
                </div>
                ";
            }
        ?>
    </div>
</body>
</html>
