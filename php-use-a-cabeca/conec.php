<?php
    
    $connectDB = mysqli_connect('localhost','root','','aliendatabase')
        or die('Error connecting to Mysql server!!!');

    $query = "INSERT INTO aliens_abduction(first_name, last_name,  when_it_happen, how_long," .
                "how_many, alien_description, what_they_did, fang_spotted, other, email)" .
                "VALUES ('Mattos', 'Deiverson', '15 days ago', 'ten days', '48', 'green tentacles', " . 
                "'we just talked and played with a dog', 'yes', 'i may have seen your dog. Contact me.', " .
                "'sally@gregs-lst.net')" ; 

    $result = mysqli_query($connectDB, $query)
        or die('Error querying database!!!');


    mysqli_close($connectDB);