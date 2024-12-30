<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_table = "subscribe";

    $db_con = "";

    $db_con = mysqli_connect($db_server, $db_user, $db_pass, $db_table );
 
    
    if(!$db_con){
        die("Connection failed: " . mysqli_connect_error());
    }
?>