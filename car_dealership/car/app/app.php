<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/cartype.php";

    session_start();

    if(empty($_SESSION['foundcars'])) {
        $_SESSION['foundcars'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));


    $app->get("/", function() use ($app) {

        return $app['twig']->render('carinput.php', array('sale' => Car::getAll()));

        });

    $app->post("/view_car", function() use ($app) {

        $user_car = new Car($_POST['make'], $_POST['mileage'], $_POST['price'], $_POST['pic']);
        $user_car->save();

        return $app['twig']->render('carresults.php', array('usercars' => Car::getAll()));

    });

    $app->post("/delete", function() use($app) {
        Car::deleteALL();
        return $app['twig']->render('carresults.php');
    });

        // $mercedes = new Car("Mercedes Benz CLS550",39900,37979,"images/mercedes.jpeg");
        // $porsche = new Car("2004 Porsche 911",114991,7862,"images/porsche.jpeg");
        // $ford = new Car("2011 Ford F450",55885,14241,"images/ford.jpeg");
        // $lexus = new Car("2013 Lexus RX 350",44700,20000,"images/lexus.jpeg");
        //
        // $our_cars = array($ford, $porsche, $lexus, $mercedes);
        // $cars_matching_search = array();


        // foreach ($our_cars as $car) {
        //     if ($car->worthBuying($_GET['price'], $_GET['mileage'])) {
        //         array_push($cars_matching_search, $car);
        //     }
        // }

    //     $output = "";
    //     foreach ($cars_matching_search as $car) {
    //         $value = $car->getPrice();
    //         $miles = $car->getMiles();
    //         $make = $car->getMake_model();
    //         $output = $output . "<img src='$car->image'>" .
    //         "<ul>" . "<li> $make </li>" .
    //             "<li> $$value </li>" .
    //              "<li> Miles: $miles </li>" .
    //          "</ul>";
    //     };
    //
    //     if (empty($cars_matching_search)){
    //        echo "<h2>Sorry, no cars match your search at this time.</h2>";
    //    }
    //
    //
    //     return  "


    //             ";
    //



    return $app;

?>
