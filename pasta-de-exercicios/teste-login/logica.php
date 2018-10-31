<?php

include('cabecalho.php');


    $user_name = $_POST['nome'];

    $user_password = $_POST['senha'];

?>
  <?php  if($user_name == 'Jorge William' && $user_password == '142536'){
        echo 'Bem vindo '.$user_name;
    } else { ?>
        echo 'Usuario nao reconhecido';
    <?php } ?>

    <?php
        include('footer.php');
    ?>