<?php

    $db = mysqli_connect("localhost","vidantac_mainu","malaiktha1290","vidantac_main");

    if(!$db){
        die("Connection to database failed! Error: " . mysqli_connect_error());
    }

?>