<?php

    class Student{

        var $first_name;
        var $last_name;
        var $country = 'Nome';

        function say_hello(){
            return 'Hello World!!!';
        }

        function full_name(){
            return $this->first_name . " " . $this->last_name;
        }


    }
    

    $student1 = new Student;
    $student1->first_name =  'Lucy';
    $student1->last_name = 'Ricardo';

    

    $student2 = new Student;
    $student2->first_name = 'Ethel';
    $student2->last_name = 'Mertz';
   


    echo $student1->first_name." ".$student1->last_name."<br />";
    echo $student2->first_name." ".$student2->last_name."<br />";

    echo $student1->say_hello() . '<br />';
    echo $student2->say_hello() . '<br />';


    echo "---------------  get_class_vars(); -------------------------- <br />";
    $class_vars = get_class_vars('Student');
    echo "Class vars: <br />";
    echo "<pre>";
    print_r($class_vars);
  

    
    echo "----------------------------------------- <br />";
    $object_vars = get_object_vars($student1);
    echo "Object vars: <br />";
    echo "<pre>";
    print_r($object_vars);
    echo "<pre>";

    
    echo "----------------------- get_class_methods(); ------------------ <br />";
    $class_method = get_class_methods('Student');

    echo "Class method: " . implode(', ' , $class_method) . "<br />";

    echo "<pre />";




    echo "---------------------Resultado do IF-------------------- <br />";

    if(method_exists('Student', 'full_name')){
        echo "Method full_name exists in Student class.<b/r>";
    } else {
        echo "Property firt_name does not exist in Student class.<br />";
    }


   
    
    echo $student2->full_name();