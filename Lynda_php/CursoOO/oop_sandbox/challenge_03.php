<?php
class Bycicle
{
    public $wheels = true;
    var $brand;
    var $model;
    var $year;
    var $description;
    var $weight_k = 0.0;


    function wheels_details(){
        
    }

    function name()
    {
        return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }
//  1 KG = 2.2046226218 lbs

    function weight_lbs()
    {
        return floatval($this->weight_kg) * 2.2046226218;
    }

    function set_weight_lbs($value)
    {
        $this->weight_kg = floatval($value) / 2.2046226218;
    }
}


class Monocycle extends Bycicle
{
    var $wheels = false;
    
}

$bike = new Bycicle;

echo $bike->wheels_details();