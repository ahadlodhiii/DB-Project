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
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
</head>

<body>
    <!-- navigation bar -->
    <?php require 'partials/_nav.php'?>
    <div class="header">
        <h2 style="left: 0px;">About Us</h2>
        <div class="header1">
            <h1><u style="color: rgb(255, 255, 255);">GIKI TODAY</u></h1>
        </div>
        <p></p>
    </div>
    <DIV class="ques my-4 mx-4 bg-light">
        <h2>How did the idea of Giki Today emerge?</h2>
        <hr style="color: rgb(201, 70, 0); height: 2px;">
        <p>Observing the issues and inconveniences faced by GIKIans, especially freshman on a daily basis, a group of 5
            students from Batch 30 came up with this simple but essential and constructive idea of GIKI Today.</p>
    </DIV>
    <br>
    <DIV class="ques my-2 mx-4 bg-light text-align: center ">
        <h2>What is the purpose of Giki Today?</h2>
        <hr style="color: rgb(201, 70, 0); height: 2px;">
        <p>Observing the issues and inconveniences faced by GIKIans, especially freshman on a daily basis, a group of 5
            students from Batch 30 came up with this simple but essential and constructive idea of GIKI Today.</p>
    </DIV>

    <!-- meet the team -->

    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="sec-heading text-center">
                        <h6>Meet The Team</h6>
                    </div>
                    <hr style="color: rgb(201, 70, 0); height: 2px;">
                </div>
            </div>
        </div>
        <div class="testimonial-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="team-slider owl-carousel">
                            <div class="single-box text-center">
                                <div class="img-area"><img alt="" class="img-fluid move-animation" src="images/IMG_6424.JPG">
                                </div>
                                <div class="info-area">
                                    <h4>Ahad Lodhi</h4>
                                    <p class="title">CEO & Founder</p>
                                    <p>Ahad is a team player when it comes to web development specialising in the
                                        front-end component of the process,but this has not hindered him from persuing
                                        his passion for basketball and he continues to play as a League basketball
                                        player,striving to acheive excellence in both fields.His discipline to work as a
                                        team player has helped him not only in the process of web development,but also
                                        to organise sporting events during his school and university life.
                                    </p>
                                    <p>ahadlodhi2011@gmail.com</p>
                                    <a href="mailto:ahadlodhi2011@gmail.com">Send Mail</a>
                                </div>
                            </div>
                            <div class="single-box text-center">
                                <div class="img-area"><img alt="" class="img-fluid move-animation" src="images/hadi.jpg"></div>
                                <div class="info-area">
                                    <h4>Syed Hadi</h4>
                                    <p class="title">Senior Software Engineer</p>
                                    <p>Even though Hadi is a person with a philisophical character who actively takes
                                        part in intellectual discussions,he also has a deep interest computers
                                        and this interest has motivated him to not only to learn but also gain hands-on
                                        experience in the field of web development.Playing basketball since a
                                        young age has provided him with the coordination skills that he needs as
                                        full-stack developer where he is required to work with a team of developers.
                                    </p>
                                    <p>smhadi.2002@gmail.com</p>
                                    <a href="mailto:smhadi.2002@gmail.com">Send Mail</a>
                                </div>
                            </div>
                            <div class="single-box text-center">
                                <div class="img-area"><img alt="" class="img-fluid move-animation" src="images/jaff2.jpg">
                                </div>
                                <div class="info-area">
                                    <h4>Muhammad Abdullah</h4>
                                    <p class="title">COO</p>
                                    <p>Abdullah,apart from being a full stack developer is an effective team leader who
                                        enjoys confronting challenges that come his way.To polish his communication
                                        skills and keep up-to-date with the current world affairs,he regulary
                                        participates in healthy debating competitions.Even though being a full stack
                                        developer
                                        and a debate team member takes up most of his time,Abdullah manages to take out
                                        time for football to keep himself fit and relish the much needed de-stressing.
                                        that it provides.
                                    </p>
                                    <p>af03313535714@gmail.com</p>
                                    <a href="mailto:af03313535714@gmail.com"">Send Mail</a>
								</div>
							</div>
							<div class=" single-box text-center">
                                        <div class="img-area"><img alt="" class="img-fluid move-animation"
                                                src="images/dani.jpg"></div>
                                        <div class="info-area">
                                            <h4>Daniyal Naveed</h4>
                                            <p class="title">CFO</p>
                                            <p>Daniyal,even though being a full stack developer who specialises in
                                                back-end development,is also enthusiastic about entrepreneurship and
                                                management.
                                                To improve his interpersonal skills,he often engages in small-scale
                                                entrepreneurial ventures and constructive discussions.Along with
                                                engaging in productive
                                                activities that refine his soft skills,Daniyal regularly partakes in
                                                various sporting activities to unwind and keep his fitness in check.
                                            </p>
                                            <p>daniyal81@gmail.com</p>
                                            <a href="mailto:daniyal81@gmail.com">Send Mail</a>
                                        </div>
                                </div>
                                <div class="single-box text-center">
                                    <div class="img-area"><img alt="" class="img-fluid move-animation" src="images/afeef.jpg">
                                    </div>
                                    <div class="info-area">
                                        <h4>Afeef Ejaz</h4>
                                        <p class="title">CTO</p>
                                        <p>Belonging from a family of bureaucrats,Afeef too plans to join the
                                            bureaucracy after his undergraduate studies.But belonging to a country like
                                            Pakistan which
                                            has not kept up with the pace of global technological advancements,Afeef
                                            wishes to bring a change in Pakistan's bureaucratic system by increasing the
                                            role
                                            of technology in its operations.
                                        </p>
                                        <p>ejazafeef@gmail.com</p>
                                        <a href="mailto:ejazafeef@gmail.com">Send Mail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
    </script>
    <script>
        $('.team-slider').owlCarousel({
            loop: true,
            nav: false,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 450,
            margin: 20,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                991: {
                    items: 3
                },
                1200: {
                    items: 3
                },
                1920: {
                    items: 3
                }
            }
        });
    </script>
<br><br>
<?php require 'partials/_footer.php'?>

</body>

</html>