<?php
    include('database.php');

    ob_start();
   

    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email1'])) {
        $em = filter_input(INPUT_POST, 'email1', FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_EMAIL); 

       $ins = "INSERT INTO subscribe_email (email)
               VALUES ('$em')";
        mysqli_query($db_con, $ins);

        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
      }

      ob_end_flush();
?>

