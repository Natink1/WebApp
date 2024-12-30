<?php
    include('database.php');


    if(isset($_POST['email1'])) {
        $em = filter_input(INPUT_POST, 'email1', FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_EMAIL); 

       $ins = "INSERT INTO subscribe_email (email)
               VALUES ('$em')";
        mysqli_query($db_con, $ins);
      
      }
      
    
      
?>