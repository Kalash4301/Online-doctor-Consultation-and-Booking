<?php
 session_start();
 $con=mysqli_connect('localhost','root','','healthcare');
 $query=$con->prepare("SELECT * FROM `labtest`");
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
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="findclinic.php" class="smoothScroll">Make an appointment</a></li>
                         <li><a href="findlab.php" class="smoothScroll">Book Lab Testing</a></li>
                         <li><a href="#" class="smoothScroll">Consultation</a></li>
                         <li><a href="#" class="smoothScroll" data-target="#mymodel" data-toggle="modal">Login/Sign Up</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         
                    </ul>
               </div>

         </div>
    </section>

<!-- MAKE AN APPOINTMENT -->
<section>
<div class="container">
     <br>
     <br>
     <div class="row">
          <div class="col-md-2 col-sm-2"></div>
          <div class="col-md-4 col-sm-4">
          <div class="form-group">
            <label for="city">City</label>
            <select id="city" class="form-control" onchange="selected()">
              <option selected>All</option>
              <option value="Mumbai" >Mumbai</option>
          <option value="Pune" >Pune</option>
          <option value="Nagpur" >Nagpur</option>
            </select>
          </div>
</div>
<div class="col-md-4 col-sm-4">

</div>
<div class="col-md-3 col-sm-3"></div>
</div>
<br>
<div id="type"></div>

</div>
</section>
<br>
<br>




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
   <script>
                <?php
                $query=$con->prepare("SELECT * FROM `labtest`");
                $query->execute();
                  $run= $query->get_result();
                  $row=$run->num_rows;
                 
                ?>

                var data = null;
                var d = null;
                var City = "All";
                show(data);
function show(data) { 
    let tab = ``;
    console.log(City);
         
    <?php
    while($res=$run->fetch_assoc())
    {
         ?>
         data = "<?php echo $res['city']; ?>";
         var com = data.localeCompare(City);
         console.log("com="+com);
         if(City==="All")
         {
            
            tab += `<div class="row">
          <div class="col-md-2 col-sm-2"></div>
          <div class="col-md-8 col-sm-8"> 
<div class="card w-75" style = " background-color: #f0f0f0;">

  <div class="card-body">
  
  <div class="row">
  <div class="col-md-8 col-sm-8">
  <div class="container">
    <h4 class="card-title"><?php echo $res['name']; ?></h4>
    <h5 class="card-text"><?php echo $res['ph_no']; ?> <br> 
                         <?php echo $res['mail']; ?><br> 
                         <?php echo $res['city']; ?><br> 
                         <?php echo $res['address']; ?></h5>
</div>
    </div>
    <div class="col-md-4 col-sm-4">
    <div class="container">
         <br>
         <br>
         <form action="" method="get">
    <a href="booklab.php?id=<?php echo $res['id']; ?>" class="btn btn-primary">Book Now</a>
    </form>
</div>

</div>
  </div>
</div>
</div>
</div>
<div class="col-md-2 col-sm-2"></div>
</div>
<br>`;

             document.getElementById("type").innerHTML = tab; 
             
         }
         else if(com==0)
         {
            
            tab += `<div class="row">
          <div class="col-md-2 col-sm-2"></div>
          <div class="col-md-8 col-sm-8"> 
<div class="card w-75" style = " background-color: #f0f0f0;">

  <div class="card-body">
  
  <div class="row">
  <div class="col-md-8 col-sm-8">
  <div class="container">
  <h4 class="card-title"><?php echo $res['name']; ?></h4>
    <h5 class="card-text"><?php echo $res['ph_no']; ?> <br> 
                         <?php echo $res['mail']; ?><br> 
                         <?php echo $res['city']; ?><br> 
                         <?php echo $res['address']; ?></h5>
</div>
    </div>
    <div class="col-md-4 col-sm-4">
    <div class="container">
         <br>
         <br>
         <form action="" method="get">
    <a href="booklab.php?id=<?php echo $res['id']; ?>" class="btn btn-primary">Book Now</a>
    </form>
</div>

</div>
  </div>
</div>
</div>
</div>
<div class="col-md-2 col-sm-2"></div>
</div>
<br>`;

             document.getElementById("type").innerHTML = tab; 
             
         }
         else{
          document.getElementById("type").innerHTML = tab; 
         }

        
       <?php } ?>

  }

                function selected()
               {
                    City = document.getElementById("city").value;
                     show(data); 
               }
            </script>


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