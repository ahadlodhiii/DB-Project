<?php
session_start();
include 'partials/_dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Life at GIKI</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
</head>

<body>
<?php require 'partials/_nav.php'?>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script> -->

    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img  class="d-block w-100 " src="images/gate.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h4>LIFE AT GIKI</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/giki.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/hostels.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container px-4">
        <div class="row gx-5">
            <div class="col-8">
                <div class="p-3 bg-white">
                    <H2>OVERVIEW</H2>
                    <hr style="color: rgb(201, 70, 0); height: 2px;">
                    <p>
                        In addition to its great historical character, the location of the Institute offers many
                        advantages. The northern areas of Pakistan which attract expeditions from all over the world are
                        easily accessible from here. Perhaps the most important advantage is the invaluable
                        opportunities it offers for establishing interaction between industry and university. <br><br>

                        Some of the most important national industries are located quite close to the Institute. These
                        include the Telephone Industries of Pakistan, Heavy Mechanical Complex, the Heavy Foundry and
                        Forge Engineering, the Kamra Aeronautical Complex, the Heavy Rebuild Factory and the Locomotive
                        Complex. Their proximity offers invaluable opportunities for practical training of the students.
                        <br><br>

                        Though away from the congestion, noise and pollution of big cities, the Institute has easy
                        access to important urban centers. It is less than two hours’ drive from Islamabad and Peshawar.
                        Both cities are connected with the rest of the country through frequent air, train and bus
                        services. Islamabad, the capital of Pakistan, has an international airport which provides ready
                        access to the outside world.
                    </p>

                    <br>
                    <div class="p-3 bg-white">
                        <!-- carousel -->
                        <link rel="stylesheet"
                            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
                            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
                            crossorigin="anonymous">
                        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                            crossorigin="anonymous"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                            crossorigin="anonymous"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                            crossorigin="anonymous"></script>

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="img-fluid" class="d-block w-100" src="images/gate.jpg" alt="First slide" width="1200"
                                        height="500">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4>LIFE AT GIKI</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="img-fluid"  class="d-block w-100" src="images/giki.jpeg" alt="Second slide" width="1200"
                                        height="500">
                                </div>
                                <div class="carousel-item">
                                    <img class="img-fluid" class="d-block w-100" src="images/hostels.jpg" alt="Third slide" width="1200"
                                        height="500">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="p-3 bg-white">
                        <H2>Hostel Life</H2>
                        <hr style="color: rgb(201, 70, 0); height: 2px;">
                        <p>
                            The accommodation facilities for students are entirely on-campus. There are ten hostels for
                            boys and one separate hostel for girl students. The rooms in the hostels are equipped with
                            modern furniture and attached bathroom. Freshmen and Sophomore students are provided shared
                            accommodation with attached bathroom. Junior and Senior students are usually provided single
                            rooms on merit basis. Since Topi has cold winters (with temperatures reaching -10 C), the
                            rooms are centrally heated and running hot water is available during winter. Each hostel has
                            an air conditioned common room. It has a television with a satellite receiver. The mess is
                            run on a no-profit no-loss basis and a student mess committee regulates the weekly menu and
                            the quality of the food.
                    </div>
                    <img class="img-fluid mx-4 mx-4" class="d-block w-100" src="images/hostel.jpg" alt="Third slide"height="900">

                    <br>
                    <div class="p-3 bg-white">
                        <H2><a href="Societies.php" style="color: black;">Societies</a> & <a href="Sports.php"
                                style="color: black;">Recreational Activities</a></H2>
                        <hr style="color: rgb(201, 70, 0); height: 2px;">
                        <p>Althogh Giki is isolated because of it location, but when it comes to creating opportunities
                            for entertainment through events or sports and recreational Activities,
                            the Giki community keeps shoulder to shoulder, providing its residents all the
                            entrertainment. Having 30+ societies and teams each of which have multible events planned
                            out throughout
                            the academic year.
                        </p>
                    </div>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <a href="Societies.php"></a><button type="button" class="btn btn-outline-primary mx-4">Giki Societies</button></a>
                        <a href="Sports.php"><button type="button" class="btn btn-outline-primary">Recreational Activities</button></a>
                      </div>
                </div>
                <div class="row">
                    <div class="column">
                      <img src="images/20210925_173034.jpg">
                      <img src="images/20210927_173016.jpg">
                      <img src="images/20211022_075827.jpg">
                      <img src="images/20211030_153502.jpg">
                      
                    </div>
                    <div class="column">
                      <img src="images/IMG_20220223_081017.jpg">
                      <img src="images/IMG_20220225_104756.jpg">
                      <img src="images/IMG_20220225_104810.jpg">
                      
                      
                    </div>
                    <div class="column">
                      <img src="images/WhatsApp Image 2022-05-29 at 5.58.25 PM.jpeg">
                      <img src="images/WhatsApp Image 2022-05-29 at 5.58.27 PM.jpeg">
                      <img src="images/hearder.jpg">
                      <img src="images/IMG_20220123_170212.jpg">
                    </div>
                    <div class="column">
                      <img src="images/IMG_20220213_170302.jpg">
                      <img src="images/IMG_20220213_170314.jpg">
                      <img src="images/IMG_20220225_164316.jpg">
                      <img src="images/IMG_20220225_164326.jpg">
                    </div>
                  </div>
            </div>
            <div class="col-4">
                <br>
                <h3>Messing & Restraunts</h3>
                <!-- GIKI MESS -->
                <div class="p-3 bg-light">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <H4 style="color: white;">GIK MESS</H4>
                        </div>
                        <img class="img-fluid" src="images/mess line.jpg" alt="mess picture" height="200">
                        <div class="card-body">
                            <p><u><b>GIKI MESS</b></u> is a non-profit messing system, Where the food is cooked
                                according to
                                the number of
                                mess ins in the mess directory. This is found to be the most affordable compared to
                                other
                                options available. The mess bill is charged on a monthly basis of number of mess ins and
                                outs
                            </p>
                            <br>
                            <img class="img-fluid"  src="images/mess menu.jpg" alt="mess menu" height="200">
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Affordability: $</small>
                        </div>
                    </div>
                </div>
                <!-- GIKafe -->
                <div class="p-3 bg-light">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <H4 style="color: white;">GIKafe</H4>
                        </div>
                        <img class="img-fluid"  src="images/GIKafe.jpg" alt="mess picture" height="200">
                        <div class="card-body">
                            <p><u><b>GIKafe</b></u> is an admin run cafe, where people usually come in to work over
                                group
                                projects and
                                society work, this also serves as dining hall to many faculty members and students.
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Affordability: $$</small>
                        </div>
                    </div>
                </div>
                <!-- Campus Restraunt -->
                <div class="p-3 bg-light">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <H4 style="color: white;">Campus Restraunt</H4>
                        </div>
                        <img class="img-fluid"  src="images/Raju.jpg" alt="mess picture" height="200">
                        <div class="card-body">
                            <p><u><b>Campus Restraunt</b></u> commonly known as <b><u>RAJU</u></b> is a private
                                restraunt
                                where you get to order
                                your meal from the vast variety of cuisines. You can either dine in/out or even get your
                                meal delivered to your hostel.
                                <br>Call : <a href="tel:+923345627486"> 03345627486</a>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Affordability: $$$</small>
                        </div>
                    </div>
                </div>
                <!-- Ayan Garden -->
                <div class="p-3 bg-light">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <H4 style="color: white;">Ayan Garden</H4>
                        </div>
                        <img class="img-fluid"  src="images/ayan.jpg" alt="mess picture" height="200">
                        <div class="card-body">
                            <p><u><b>Ayan Garden</b></u> or also called <b><u>AYAN</u></b> is a private restraunt where
                                you
                                get to order
                                your meal from the vast variety of cuisines. You can either dine in/out or even get your
                                meal delivered to your hostel.
                                <br>Call : <a href="tel:+923025786466"> 03025786466</a>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Affordability: $$$</small>
                        </div>
                    </div>
                </div>
                <!-- Hot&Spicy -->
                <div class="p-3 bg-light">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <H4 style="color: white;">Hot&Spicy</H4>
                        </div>
                        <img class="img-fluid"  src="images/Hot&Spicy.png" alt="mess picture" height="200">
                        <div class="card-body">
                            <p><u><b>HOT&SPICY</b></u> is a private restraunt where you get to order your meal from the
                                vast
                                variety of cuisines.
                                You can either dine in/out or even get your meal delivered to your hostel.
                                <br>Call : <a href="tel:+923410590879"> 03410590879</a>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Affordability: $$$</small>
                        </div>
                    </div>
                </div>
            </div>

            <div></div>
            
</body>

</html>
<?php require 'partials/_footer.php'?>