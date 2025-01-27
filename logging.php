<?php

  include("database.php");

    session_start();

    if(isset($_POST['user']) && isset($_POST['pass'])){

        $name = $_POST['user'];
        $pass = $_POST['pass'];
    }


if(empty($name)){
    header("location: login.php?error= username is required");
    exit();
}

if(empty($pass)){
    header("location: login.php?error= password is required");
    exit();
}

    $query = "SELECT * from users WHERE uname='$name' AND pass='$pass'";

    $result = mysqli_query($db_con, $query);

    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if($row['uname'] === $name && $row['pass'] === $pass) {
        echo "Logged In";
        $_SESSION['uname'] = $row['uname'];
        $_SESSION['pass'] = $row['pass'];
        header("Location: view_reservations.php");
        exit();
        }

        }
        
        else {
            header("Location: login.php?error= Username and Password is Incorrect");
        exit();
    }

//     if ($name === $uname && $pass === $passw)
//     {
//         $_SESSION['user'] = $uname;
//         header('Location: view_reservations.php')
//     }
// else 
// {
//     echo "<script>alert("incorrect password");</script>";header
// }


    // echo "<script>
    // window.location = '" . $_SERVER['view_reservations.php'] . "';
    // </script>";








?>