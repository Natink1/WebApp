<?php
    include('database.php');


    if(isset($_POST['email1'])) {
        $em = $_POST['email1']; 

       $ins = "INSERT INTO subscribe_email (email)
               VALUES ('$em')";
        mysqli_query($db_con, $ins);
      
      }
      

      
?>