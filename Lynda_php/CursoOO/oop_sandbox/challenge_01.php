<?php
    class Bycicle{

        var $brand;
        var $model;
        var $year;
        var $description; 
        var $weight_k = 0.0;

        function name(){
            return $this->brand ." ". $this->model ." (". $this->year. ")"; 
        }
        //  1 KG = 2.2046226218 lbs

        function weight_lbs(){
            return floatval($this->weight_kg) * 2.2046226218;
        }

        function set_weight_lbs($value){
            $this->weight_kg = floatval($value) / 2.2046226218;
        }
    }    

    $bike = new Bycicle;
    $bike->brand = 'caloi';
    $bike->model = 'aro 16';
    $bike->year = 2018;
    $bike->weight_kg = 3.5;

    $bike2 = new Bycicle;
    $bike2->brand = 'shimano';
    $bike2->model = 'aro 10';
    $bike2->year = '2010';
    $bike2->weight = 8.0;

    echo 'Nome: ' . $bike->name() . "<br />";
    echo 'Nome: ' . $bike2->name() . "<br />";

    echo 'Peso em KG Bicicleta 1: ' . $bike->weight_kg . "<br />";
    echo 'Peso em Libras Bicicleta 1: ' . $bike->weight_lbs(). "<br />";

    $bike->set_weight_lbs(2);
    echo 'Valor em kilos '. $bike->weight_kg . "<br />";
    echo 'Valor em libras '.$bike->weight_lbs(). "<br />";
    


    
    
    
    
    
