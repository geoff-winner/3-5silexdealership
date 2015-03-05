<?php
class Car
{
    private $make_model;
    private $price;
    private $miles;
    private $image;

    function worthBuying($max_price, $max_miles) {
        return $this->price < $max_price && $this->miles < $max_miles;
    }
    function __construct($type_car, $value_car, $miles_car, $image_car) {
        $this->make_model = $type_car;
        $this->price = $value_car;
        $this->miles = $miles_car;
        $this->image = $image_car;
    }
    function setMake($new_make){
        $string_model = (string) $new_make;
         if ($string_model != 0) {
             $this->make_model = $string_model;
         }
    }
    function setMiles($new_miles){
        $string_miles = (float) $new_miles;
        if ($float_miles != 0) {
            $this->miles = $float_miles;
        }
    }
    function setPrice($new_price){
        $float_price = (float) $new_price;
         if ($float_price != 0) {
            $this->price = $float_price;
        }
    }
    function setImage($new_image){
        $new_image = $this->image;
    }
    function getImage(){
        return $this->image;
    }
    function getMake(){
        return $this->make_model;
    }
    function getMiles(){
        return $this->miles;
    }
    function getPrice(){
        return $this->price;
    }
    function save(){
        array_push($_SESSION['foundcars'], $this);
    }
    static function getAll(){
        return $_SESSION['foundcars'];
    }
    static function deleteAll(){
        $_SESSION['foundcars'] = array();
    }

}

?>
