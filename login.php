
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <div class="logincontainer">
        <div class="lil">
  
      <form action="logging.php" class="logina" method="post">
      <h1>Login</h1>

  <!-- Error Handle-->
<?php if(isset($_GET['error'])){
  ?>
  <p>  <?php echo $_GET['error']; ?> </p>
<?php
}
?>
        <label>Username</label><br>
        <input name="user" type="text"><br>
        <label>Password</label><br>
        <input name="pass" type="password"><br>
        <button type="submit">Login</button>
        </form>
      </div>
      </div>
</body>
</html>

