<?php 
include 'partials/_dbconnect.php';
session_start();
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
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css'>
  <title>Societies</title>
</head>




<body>
<?php require 'partials/_nav.php'?>
 <div class="mainsociety">
   
 </div>


  <div class="container" id="soc">
    <div class="row col" id="society_heading">
      <h1>Never a Dull Moment - Student Life at GIKI</h1>
      <p>Life at GIKI is not all about academics and study alone. We know that students need a respite from their tough
        study schedules.
        This is necessary to re-invigorate their energies and for overall holistic development of the participants.
        Here is a list of the clubs and societies that are open to membership for all students.</p>
    </div>

    
    <hr class="solid">
<!-- lds -->
    <div class="row col">
      <br><br><br>
      <h4 style="margin-top: 15px;">Literary And Debating Society</h4><br><br>
    </div>
    <div class="row">
      <div class="col-3">
        <img src="images/ldsmain.jpg" width="200" height="200" alt="">
      </div>
      <div class="col-7">
        <p>This society holds debates, declamation contests and literary evenings including sessions of poetry recitation.
           It also arranges participation of the GIK team in debates and declamation contests held by other universities. 
           A special item on its agenda is the student-teacher discussion usually held in the auditorium. 
           These collective sessions prove invaluable for self-assessment and a critical evaluation of the diverse aspects of the GIK life,
           and go a long way in promoting rapport between the students and the faculty</p>
      </div>
    </div>

    <hr class="solid">
    <!-- cbs -->
    <div class="row col">
      <br><br><br>
      <h4 style="margin-top: 15px;">Character Building Society</h4><br><br>
    </div>
    <div class="row">
      <div class="col-8">
        <p>Character Building Society is a society that has been established on the working principle of trying to
           incorporate a sense of a personality buildup amongst fellow beings. We tend to provide a platform of no
           t only encouraging a buildup of skills in your character arsenal but hope to instill and 
           inculcate myriads of technical skill developments that would prove helpful for you. 
           The Character Building Society (C.B.S.) intends to nurture knowledge, skills, attitude & behavior that will help our 
           student body in leading a better quality life. 
          In doing so, CBS hopes that this process can lead to distinct personality trait developments.</p>
      </div> 
      <div class="col-3">
        <img src="images/cbs.png" width="200" height="200" >
      </div>
      
    </div>
    <!-- ---- -->

    
    <hr class="solid">
    <!-- wes -->
    <div class="row col">
      <br><br><br>
      <h4 style="margin-top: 15px;">Women Engineering Society</h4><br><br>
    </div>
    <div class="row">
      <div class="col-3">
        <img src="images/wes.png" width="200" height="200" alt="">
      </div>
      <div class="col-7">
        <p>Women in Pakistan have traditionally not played their due role in professional fields,
           but an evident change is gradually emerging. In fact, a quiet revolution is taking place in Pakistan.
            Women are determining the dynamics of this revolution and will certainly influence the economy of the 
            country in the coming decades. Amidst the challenges of the 21st century, women in Pakistan have chosen a
             focused agenda i.e. self-development and greater economic empowerment. </p>
      </div>
    </div>
    <!-- ---- -->

    
    <hr class="solid">
    <!-- Netronix-->
    <div class="row col">
      <br><br><br>
      <h4 style="margin-top: 15px;">Netronix</h4><br><br>
    </div>
    <div class="row">
      <div class="col-8">
        <p>GIK Institute computer network is one of the largest in the country.
           This society is the caretaker of the hostel network which consists of over 600 workstations.
            The range of its services is broad and sundry: it maintains IRC and mail servers, many dedicated cyber gaming servers,
             provide internet connectivity and other useful network applications. The students enjoy millions of shared files on the
              network. The society promotes the learning of networking and server management by holding various workshops. The hostel
               network administrators volunteer for help around the clock. NETRONiX is the organizer of the first ever all Pakistan
                network gaming marathon named Über.
          GameX which is now held annually.</p>
      </div> 
      <div class="col-3">
        <img src="images/netronix_main.jpg" width="200" height="200" >
      </div>
      
    </div>
    <!-- ---- -->
    <hr class="solid">
  
  </div>
  <?php require 'partials/_footer.php'?>




</body>

</html>