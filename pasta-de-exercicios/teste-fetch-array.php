<?php

    $dbc = mysqli_connect('localhost','root','','elvis_store');

    $query = "SELECT * FROM email_list";

    $result = mysqli_query($dbc, $query);

    $row = mysqli_fetch_array($result);

    echo $row[0].' '.$row[1].' '.$row[2];

    mysqli_close($dbc);