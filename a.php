<?php


$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS student_db";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->select_db("student_db");

$sql = "CREATE TABLE IF NOT EXISTS Students (
    Stud_id VARCHAR(20) PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    Email VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>


HTML

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

    <h2>Add Student</h2>
    <form action="insert.php" method="post">
        <label for="stud_id">Student ID:</label><br>
        <input type="text" id="stud_id" name="stud_id" required><br><br>

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Add Student">
    </form>

</body>
</html>
PHP







function validateForm() {

  const username = document.getElementById("username").value;
  const email = document.getElementById("email").value;
  const password = document.getElementById("password").value;
  const confirmPassword = document.getElementById("confirmPassword").value;


  if (username === "" || email === "" || password === "" || confirmPassword === "") {
    alert("Please fill in all fields.");
    return false;
  }

  if (!emailRegex.test(email)) {
    alert("Invalid email address.");
    return false;
  }

  if (password !== confirmPassword) {
    alert("Passwords do not match.");
    return false;
  }
  return true;
}


<form method="post" action="insert_employee.php">
    Emp ID: <input type="text" name="empid"><br>
    Full Name: <input type="text" name="fullname"><br>
    Date of Birth: <input type="date" name="dob"><br>
    Year of Experience: <input type="text" name="experience"><br>
    Salary: <input type="text" name="salary"><br>
    <input type="submit" value="Submit">
</form>


<?php
$conn = new mysqli("localhost", "root", "", "employees_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$empid = $_POST['empid'];
$fullname = $_POST['fullname'];
$dob = $_POST['dob'];
$experience = $_POST['experience'];
$salary = $_POST['salary'];

$sql = "INSERT INTO employees (EmpID, Full_Name, Date_of_Birth, Year_of_Experience, Salary)
        VALUES ('$empid', '$fullname', '$dob', '$experience', '$salary')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>





<!DOCTYPE html>
<html>
<head>
  <title>JavaScript Example</title>
</head>
<body>

  <script>

    var userName = prompt("Please enter your name:");

    alert("Welcome, " + userName + "!");

 
    var today = new Date();
    var dateString = today.toDateString();

    document.write("Today's date is: " + dateString);
  </script>

</body>
</html>