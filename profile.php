<?php
 session_start();
 $con=mysqli_connect('localhost','root','','healthcare');
 $query=$con->prepare("SELECT * FROM `doctors`");
$query->execute();
  $run= $query->get_result();
  $row=$run->num_rows;
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" sizes="16x16" href="images/icon.jpg">
     <title>Health - Medical Website Template</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

    <!-- PRE LOADER -->
    <section class="preloader">
         <div class="spinner">

              <span class="spinner-rotate"></span>
              
         </div>
    </section>


    


    <!-- MENU -->
    <section class="navbar navbar-default navbar-static-top" role="navigation">
         <div class="container">

              <div class="navbar-header">
                   <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                   </button>

                   <!-- lOGO TEXT HERE -->
                   <a href="index.html" class="navbar-brand"><i class="fa fa-h-square"></i>ealth Center</a>
              </div>

              <!-- MENU LINKS -->
              <div class="collapse navbar-collapse">
                   <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html" class="smoothScroll">Home</a></li>
                    <li><a href="#" class="smoothScroll">Book Lab Testing</a></li>
                    <li><a href="#" class="smoothScroll">Consultation</a></li>
                    <li><a href="#" class="smoothScroll">My Profile</a></li>
                    <li><a href="#about" class="smoothScroll">About Us</a></li>
                   </ul>
              </div>

         </div>
    </section>

<section data-stellar-background-ratio="3">
<div class="container">
  <div class="row">
  <br>
  <br>
  <div class="col-md-3 col-sm-3">        
  <div id="user_image"></div>
  </div>
  <div class="col-md-1 col-sm-1"></div>
  <div class="col-md-7 col-sm-7">  
  <h3 style="color: #a5c422;">Past Appointments</h3>
  <br>
  <div class="table-responsive" style="background-color: #f0f0f0;">
  <table class="table table-borderless">
  <thead>
    <tr>
    <th scope="col">Name</th>
    <th scope="col">Doctor</th>
    <th scope="col">Date</th>
    <th scope="col">Time</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>


<h3 style="color: #a5c422;">Past Lab Booking</h3>
  <br>
  <div class="table-responsive" style="background-color: #f0f0f0;">
  <table class="table table-borderless">
  <thead>
    <tr>
    <th scope="col">Name</th>
    <th scope="col">Lab Name</th>
    <th scope="col">Test</th>
    <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>




<h3 style="color: #a5c422;">Consultations</h3>
  <br>
  <div class="table-responsive" style="background-color: #f0f0f0;">
  <table class="table table-borderless">
  <thead>
    <tr>
    <th scope="col">Name</th>
    <th scope="col">Lab Name</th>
    <th scope="col">Test</th>
    <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>



  </div>
  <div class="col-md-1 col-sm-1">        
  </div>
  </div>
  </div>

</section>


<footer data-stellar-background-ratio="5">
        <div class="container">
             <div class="row">
               


               <div class="col-md-12 col-sm-12 border-top">
                    <div class="col-md-4 col-sm-6">
                        
                    </div>
                    <div class="col-md-6 col-sm-6">
                         
                    </div>
                    <div class="col-md-2 col-sm-2 text-align-center">
                         <div class="angle-up-btn"> 
                             <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                         </div>
                    </div>   
               </div>
                  
             </div>
        </div>
   </footer>
   <!-- SCRIPTS -->
   


   <script src="js/jquery.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery.sticky.js"></script>
   <script src="js/jquery.stellar.min.js"></script>
   <script src="js/wow.min.js"></script>
   <script src="js/smoothscroll.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/custom.js"></script>

</body>
</html>