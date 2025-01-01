<?php

    include('database.php');
   
    if($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_POST['email1'])) {
        $em = filter_input(INPUT_POST, 'email1', FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_EMAIL); 

       $ins = "INSERT INTO subscribe (email)
               VALUES ('$em')";     

      // mysqli_query($db_con, $ins);
      
      if (mysqli_query($db_con, $ins)) {
        
        header("Location: " . $_SERVER['PHP_SELF']);
  
    } else {
        echo "Error: " . mysqli_error($db_con);
    }
  }



// if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
//  $name = filter_input(INPUT_POST, 'name', );
//  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
//  $message = filter_input(INPUT_POST, 'message', );

//  $stmt = $db_con->prepare("INSERT INTO contactus (name, email, message) VALUES (?, ?, ?)");
//  $stmt->bind_param("sss", $name, $email, $message);

//  if ($stmt->execute()) {
//      echo "<script>alert('Message sent successfully!');</script>";
//  } else {
//      echo "Error: " . $stmt->error; 
//  }

//  $stmt->close();
// }


    
?>

