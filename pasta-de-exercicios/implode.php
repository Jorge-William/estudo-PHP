<?php
    $frutas1 = Array('Banana', 'Uva', 'Laranja','Manga');
    

    $frutas2 = Array(1=>'Banana',
                    2=> 'Uva',
                    3=> 'Laranja',
                    4=>'Manga');
    


    $virgula = implode(", " , $frutas1);
    echo $virgula;


?>