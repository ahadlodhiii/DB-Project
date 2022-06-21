<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
  include 'partials/_dbconnect.php';

  $username = $_POST["username"];
  $password = $_POST["password"];

  $sql = "SELECT * from users where username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if ($num == 1){
      $login = true;
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
      header("location: home.php");
  }

  else{
    $showError = "Invalid Credtials";
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
  </head>
  <img class = "bgimg" src="images/gate.jpeg" alt="bg image">
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
    <?php require 'partials/_nav.php'?>
    <?php    
    if($login){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You have been logged into your account.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if($showError){
      
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error! </strong>'.$showError.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
    ?>
      <br><br>
    <div class="container my-2">
        <h1 class = "text-center">Login to the GIKI Blog</h1>
        <br><br><br><br><br> 
    <form action ="/project/login.php" method = "POST">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name= "username">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name= "password">
  </div>


  <button type="submit" class="btn btn-primary">Login</button>
</form>
<br>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php require 'partials/_footer.php'?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  
</html>