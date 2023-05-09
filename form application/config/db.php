<?php

    $server = "sql205.epizy.com";
    $username = "epiz_34166628";
    $password = "Q40Xtkhw5Er";
    $dbname = "epiz_34166628_crudoperation";


    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
        die('connection error');
    }



?>