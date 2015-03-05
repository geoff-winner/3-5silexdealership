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

    $mercedes = new Car("Mercedes Benz CLS550",39900,37979,"/images/mercedes.jpeg");
    $porsche = new Car("2004 Porsche 911",114991,7862,"/images/porsche.jpeg");
    $ford = new Car("2011 Ford F450",55885,14241,"/images/ford.jpeg");
    $lexus = new Car("2013 Lexus RX 350",44700,20000,"/images/lexus.jpeg");

    $our_cars = array($ford, $porsche, $lexus, $mercedes);




    $app->get("/", function() use ($app) {

        return $app['twig']->render('carinput.php', array('sale' => Car::getAll()));

        });




    $app->post("/view_car", function() use ($app) {

        $user_car = new Car($_POST['make'], $_POST['mileage'], $_POST['price'], $_POST['pic']);

        if (!in_array($user_car, Car::getAll())){
            $user_car->save();
        }
        global $our_cars;

        return $app['twig']->render('carresults.php', array('usercars' => Car::getAll(), 'ourcars' => $our_cars));

    });





    $app->post("/delete", function() use($app) {
        Car::deleteAll();
        global $our_cars;

        return $app['twig']->render('carresults.php', array('ourcars' => $our_cars));
    });

    $app->post("/results", function() use ($app) {
        $cars_matching_search = array();

        foreach (Car::getAll() as $scar) {
            if ($scar->worthBuying($_POST['searchprice'], $_POST['searchmiles'])) {
                array_push($cars_matching_search, $scar);
            }
        }

        return $app['twig']->render('result.php', array('search' => $cars_matching_search));
    });





    return $app;

?>
