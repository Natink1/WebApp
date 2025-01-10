<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_table = "subscribe_email";

    $db_con = "";

    $db_con = mysqli_connect($db_server, $db_user, $db_pass, $db_table );
 
    
    if(!$db_con){
        die("Connection failed: " . mysqli_connect_error());
    }


    try{
        $DB_con = new PDO("mysql:host={$db_server};dbname={$db_table}",$db_user,$DB_PASS);
        $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch(PDOException $e){
        echo $e->getMessage();
      }
?>