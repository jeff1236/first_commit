<?php
    class Car //creates new class of objects called 'Car'
    {
        public $make_model; //each object has these 3 properties
        public $price;
        public $miles;

        function worthBuying($max_price)
        {
            return $this->price < $max_price;
        }
    }

    $porsche = new Car(); //creates new instance of object in 'Car' class
    $porsche->make_model = "2014 Porsche 911";
    $porsche->price = 114991;
    $porsche->miles = 7864;

    $ford = new Car();
    $ford->make_model = "2011 Ford F450";
    $ford->price = 55995;
    $ford->miles = 14241;

    $lexus = new Car();
    $lexus->make_model = "2013 Lexus RX 350";
    $lexus->price = 44700;
    $lexus->miles = 20000;

    $mercedes = new Car();
    $mercedes->make_model = "Mercedes Benz CLS550";
    $mercedes->price = 39900;
    $mercedes->miles = 37979;

    $cars = array($porsche, $ford, $lexus, $mercedes); //creates an array that
    //includes each new object

    // for each object/car in the $cars array, call it $car and check to see
    // if the max car price entered by user is more than each car object's price
    // those cars are pushed into the array called '$cars_matching_search'
    $cars_matching_search = array();
    foreach ($cars as $car) {
        if ($car->worthBuying($_GET["price"])) {
            array_push($cars_matching_search, $car);
        }

        // if ($car->price < $_GET["price"]) {
        //     array_push($cars_matching_search, $car);
        // }
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Jeff's Car Dealership</title>
    </head>
    <body>
        <h1>Jeff's AutoLand</h1>
        <ul>
            <?php
                //displays the cars matching user search
                foreach ($cars_matching_search as $car) {
                    echo "<li> $car->make_model </li>";
                    echo "<ul>";
                        echo "<li> $$car->price </li>";
                        echo "<li> Miles: $car->miles </li>";
                    echo "</ul>";
                }
            ?>
          </ul>
      </body>
      </html>
