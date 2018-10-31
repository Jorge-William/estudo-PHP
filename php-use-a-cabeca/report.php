<?php  
        $_name = $_POST['firstname'];
        $_lastName = $_POST['lastname'];
        $_when_it_happened = $_POST['whenithappened'];
        $_how_long = $_POST['howlong'];
        $_how_many = $_POST['howmany'];
        $_alien_description = $_POST['aliendescription'];
        $_what_they_did = $_POST['whattheydid'];
        $_fang_spotted = $_POST['fangspoted'];
        $_email = $_POST['email'];
        $_other = $_POST['other'];
       

        $connection = mysqli_connect('localhost','root','','aliendatabase')
             or die("Nao foi possivel se conectar ao banco de dados!!!");

        $query = "INSERT INTO aliens_abduction (first_name, last_name, when_it_happen, how_long, how_many," .
                  "alien_description, what_they_did, fang_spotted, other, email)" .
                  "VALUES ('$_name', '$_lastName', '$_when_it_happened', '$_how_long', '$_how_many'," .
                  "'$_alien_description', '$_what_they_did', '$_fang_spotted', '$_other', '$_email')";       

            
        $result = mysqli_query($connection, $query)
             or die("Algo deu errado com a conexao");

             mysqli_close($connection);

        ?>