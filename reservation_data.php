<?php
include('database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $fields = ['name', 'email', 'roomType', 'phone', 'checkIn', 'checkOut', 'message'];
    
    $formData = [];

    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            $formData[$field] = $_POST[$field];
        } else {
            
            echo "Please fill in all fields!";
            exit;
        }
    }

  
    $stmt = $db_con->prepare("INSERT INTO Reservation (name, email, roomType, phone, checkIn, checkOut, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $formData['name'], $formData['email'], $formData['roomType'], $formData['phone'], $formData['checkIn'], $formData['checkOut'], $formData["message"]);

    
    if ($stmt->execute()) {
        
        header("Location: " . $_SERVER['PHP_SELF']);
        
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}






























// if($_SERVER['REQUEST_METHOD'] === 'POST' 
//     || isset($_POST['name']) || isset($_POST['email']) || isset($_POST['roomType']) || isset($_POST['name']) || isset($_POST['name'])
//     || isset($_POST['phone']) || isset($_POST['checkIn']) || isset($_POST['CheckOut']) || isset($_POST['CheckOut'])  ) {
    
//     $resevre = [name, email, roomType, phone, checkIn, checkOut];

//     if (!empty($resevre)) {
//    $ins = "INSERT INTO subscribe (email)
//            VALUES ('$reserve')";     

//   // mysqli_query($db_con, $ins);
  
//   if (mysqli_query($db_con, $ins)) {
    
//     header("Location: " . $_SERVER['PHP_SELF']);

// } else {
//     echo "Error: " . mysqli_error($db_con);
// }
// }


//     }
?>