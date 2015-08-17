<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Rectangle.php";
    $app = new Silex\Application();

    $app->get

    $app->get("/", function() {
        return "Home";

    $app->get("/new_rectangle", function() {
        return "
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title>Make a rectangle</title>
    </head>
    <body>
        <div class='container'>
            <h1>Geometry Checker</h1>
            <p>Enter the dimensions of your rectangle to see if it's square</p>
            <form action='/view_rectangle'>
                <div class='form-group'>
                    <label for='length'>Enter Length</label>
                    <input id='length' name='length' class='form-control' type='number'>
                </div>
                <div class='form-group'>
                    <label for='width'>Enter Width</label>
                    <input id='width' name='width' class='form-control' type='number'>
                </div>
                <button type='submit' class='btn-success'>Create</button>
                </form>
                </div>
                </body>
                </html>
                ";
            });
    return $app;


?>
