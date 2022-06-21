<?php
session_start();
include 'partials/_dbconnect.php';
// Only those who are logged in can post a blog, this code determines whether someone is logged  in
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin = true;
}

$var = $_SESSION['username'];
$sql = "SELECT * FROM blog";
$query = mysqli_query($conn, $sql);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    
    
    if(isset($_REQUEST["new_post"])){
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];
    
        $sql = "INSERT INTO blog (id, title, content, username, dt) VALUES(NULL, '$title', '$content', '$var' , current_timestamp())";
        mysqli_query($conn, $sql);

        header("location: home.php?info=added");
        exit();
  }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post a Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">  
</head>
<?php require "partials/_nav.php"?>
  <body>
  <?php if(is_file('post.php')){ echo'
  <br>
  <img class = "bgimg" src="images/aerial.jpeg" alt="bg image">
    <div class="container mt-5">
  <h1 class = "text-center">Create Blog</h1>
        <form method="POST">
            <input type="text" placeholder="Blog Title" class="form-control my-3 bg-white text-dark text-center" name="title">
            <textarea name="content" class="form-control my-3 bg-white text-dark cols="30" rows="20""></textarea>
            <button class="btn btn-primary" name="new_post">Add Post</button>
        </form>
   </div>
  </body>
    


<br>
    
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  
</html>
';}?>
<?php require "partials/_footer.php";?> 
