<?php

include('database.php');


if($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){

$email = filter_input(INPUT_POST, 'email');
$name = filter_input(INPUT_POST, 'name', );
$message = filter_input(INPUT_POST, 'message', );

$sql = "INSERT INTO contactus (name, email, message)
 VALUES ('$name', '$email', '$message')";

$result = mysqli_query($db_con, $sql);

if($result) {
    echo "<script>
    alert('Message sent successfully');
    window.location = '" . $_SERVER['PHP_SELF'] . "';
    </script>";



} else {
echo "Error: ";
}    


}

?>