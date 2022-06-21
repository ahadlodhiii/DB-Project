<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    include 'partials/_dbconnect.php';
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists = false;
    $existsSQL = "SELECT * FROM users WHERE username = '$username' OR  email = '$email'";
    $result = mysqli_query($conn, $existsSQL);
    $numofExistRows = mysqli_num_rows($result);
    if($numofExistRows > 0){
      $exists = true;

    }

    if(($password == $cpassword) &&  $exists == false){
        $sql = "INSERT INTO `users` (`sno`, `email`, `username`, `password`, `dt`) VALUES ( NULL, '$email', '$username', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    elseif($exists == true){
      $showError = "Username or Email is already taken";
    }
    else{
      $showError = "Passwords do not match";
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
    <img class = "bgimg" src="images/gate.jpeg" alt="bg image">
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
    <?php require 'partials/_nav.php'?>
    <?php    
    if($showAlert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your account has been created and you can login now.
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
    <br><br><br>
    <div class="container">
        <h1 class = "text-center">Signup to the GIKI Blog</h1>
        <br><br><br>
    <form action ="/project/signup.php" method = "POST">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name= "email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name= "username">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name= "password">
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label"> Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name= "cpassword">
  </div>

  <button type="submit" class="btn btn-primary">Sign up</button>
</form>
    </div>
    <br><br><br>
    <?php require 'partials/_footer.php'?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  
</html>