<?php
session_start();
include 'partials/_dbconnect.php';
$sql = "SELECT * FROM blog";
    $query = mysqli_query($conn, $sql);
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM blog WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Blog using PHP & MySQL</title>
</head>

<body>
<?php require 'partials/_nav.php'?>
   <div class="container mt-5">

        <?php foreach($query as $q){?>
            <div class="bg-light p-5 rounded-lg text-dark text-left">
                <h1><?php echo $q['title'];?></h1>
                <h5>Author: <?php echo $q['username'];?></h5>
                <h5>Date: <?php echo $q['dt'];?></h5>

                <div class="d-flex mt-2 justify-content-center align-items-center">                   
                    <input type="text" hidden value='<?php echo $q['id']?>' name="id">                    
                </div>

            </div>
            <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
        <?php } ?>    


   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<br><br><br><br>
    <?php require 'partials/_footer.php'?>
</body>
</html>