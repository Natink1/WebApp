<?php

    $db_server = "fdb1029.awardspace.net";
    $db_user = "4573616_subscribe";
    $db_pass = "Na591,.//.,";
    $db_table = "4573616_subscribe";

    $db_con = "";

    $db_con = mysqli_connect($db_server, $db_user, $db_pass, $db_table );
 
    
    if(!$db_con){
        die("Connection failed: " . mysqli_connect_error());
    }

	   
	try{
        $DB_con = new PDO("mysql:host={$db_server};dbname={$db_table}",$db_user,$db_pass);
        $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch(PDOException $e){
        echo $e->getMessage();
      }
	
?>