<?php
   session_start();
    include 'partials/_dbconnect.php';
    $sql = "SELECT * FROM blog";
    $query = mysqli_query($conn, $sql);
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>Giki Today</title>
</head>

<body>
<?php require 'partials/_nav.php'?>

    <section id="Home">
        <div class="home">
            <div">
                <p>Giki Today</p>
        </div>
        </div>
    </section>

    <div class="container">
        

        <div class="row" style="margin-bottom: 35px;">
            <div class="col-md-12" id="newsandblogs">
                <br>
                <h3>NEWS & BLOGS</h3>
                <div class="row">
            <?php foreach($query as $q){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-dark mt-5" style="width: 28rem;">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $q['title'];?></h5>
                            <p class="card-text"><?php echo substr($q['content'], 0, 50);?>...</p>
                            <p class="card-text" align: right>Author: <?php echo substr($q['username'], 0, 50);?></p>
                            <a href="viewblog.php?id=<?php echo $q['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>

                <!-- <div class="row row-cols-1 row-cols-md-2 g-1" style="padding-bottom: 50px;">
                    <div class="col">
                        <div class="card">
                            <img src="images/aerial.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="images/audi 2 resized.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="images/gate resize.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in
                                    to additional content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="images/tree resize.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in
                                    to additional content. </p>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>

            <!-- <div class="col-4">
                <h3>Events</h3>
            </div> -->
            
        </div>
    </div>
    <?php require 'partials/_footer.php'?>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>



</body>

</html>