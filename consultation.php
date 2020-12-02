<?php
session_start();
$user_id=$_SESSION['user_id'];
$con=mysqli_connect('localhost','root','','healthcare');

 
      if(isset($_POST['submit']))
      {     
            $name=$_POST['name'];
            $email=$_POST['email'];
            $age=$_POST['age'];
            $weight=$_POST['weight'];
            $gender=$_POST['gender'];
            $treatment=$_POST['treatment'];
            $q1=$_POST['Q1'];
            $q2=$_POST['Q2'];
            $title=$_POST['title'];
            $desc=$_POST['desc'];

           /*$filename=$_FILES['fileupload']['name'];
            $tempname=$_FILES['fileupload']['tmp_name'];
            $folder="recipeimages/.$filename";
           
            move_uploaded_file( $tempname,  $folder);
            
          $k=$_SESSION['person_id'] ;
 
          //echo $email.' '.$name.' '.$recipename.' '.$recipe.' '.$img;
    
    */
      
        $query2 ="INSERT INTO  `consultation`(`user_id`,`guest_name`,`guest_age`,`weight`,`guest_gender`,`guest_currentcon`,`guest_gmail`,`guest_allergy`,`problem`,`title`,`description`) VALUES ('$user_id','$name','$age','$weight' ,'$gender','$q1','$email','$q2','$treatment' ,'$title','$desc')";
              
              $run1=mysqli_query($con,$query2);

              if($run1)
              { 
                echo '<script>alert("Submitted Successfully")</script>';

                
              }
              else
                echo "bye";
              
              


      }
      

    
      ?>
<!--DOCTYPE html-->

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


     <style type="text/css">
       
       .yellow{
        background-color: rgb(255, 255, 153);
       }
       .green{
        background-color: rgb(77, 255, 166);
       }
     </style>

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

<!-- MAKE AN APPOINTMENT -->
<section id="appointment" data-stellar-background-ratio="3">
     <div class="container">
          <div class="row">

               <div class="col-md-4 col-sm-4">
                      <h3 style="color: #a5c422;">Pending</h3>
                      <br>
                     <?php
                      $query="SELECT * FROM `consultation`  where  `flag`=0 AND `user_id`='$user_id'";
                      $run=mysqli_query($con,$query);
                        if(mysqli_num_rows($run)>0){
                         while($row=mysqli_fetch_assoc($run))
                         { 
                          //print_r($row);
                       ?>

                         
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                             
                               <div class="card yellow bg-warning text-white">
                                 <div class="card-body"><p><?php  echo  $row['guest_name']; ?></p>

                                 <p><?php echo  $row['title']; ?></p></div>

                               </div>
                               <br>
                             
                               

                             
                               

                              
                               

                        </div>



                     <?php }} ?>

                        <h3 style="color: #a5c422;">Answered Querries</h3>
                        <br>
                     <?php
                            
                      $query="SELECT * FROM `consultation`  where  `flag`=1 AND `user_id`='$user_id'";
                      $run=mysqli_query($con,$query);
                        if(mysqli_num_rows($run)>0){
                         while($row=mysqli_fetch_assoc($run))
                         { 
                          //print_r($row);
                       ?>

                         
                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                             
                               <div class="card green bg-warning text-white">
                                 <div class="card-body"><p><?php  echo  $row['guest_name']; ?></p>

                                 <p><?php echo  $row['title']; ?></p></div>

                               </div>
                               <br>
                             
                          

                        </div>



                     <?php }} ?>

               </div>
                     
                 <div class="col-md-2 col-sm-2">

                 </div>


               <div class="col-md-6 col-sm-6">
                    <!-- CONTACT FORM HERE -->
                    <form id="appointment-form" role="form" method="post" action="#">

                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                              <h2>ASK FOR CONSULTATIONS</h2>
                         </div>

                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <div class="col-md-6 col-sm-6">
                                   <label for="name">Name</label>
                                   <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <label for="email">Email</label>
                                   <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                              </div>

                              <div class="col-md-2 col-sm-2">
                                   <label for="age">Age</label>
                                   <input type="number" class="form-control" id="age" name="age" placeholder="Age">
                              </div>
                              
                              <div class="col-md-2 col-sm-2">
                                   <label for="weight">Weight</label>
                                   <input type="number" class="form-control" id="weight" name="weight" placeholder="Weight">
                              </div>
                              

                              <div class="col-md-4 col-sm-4">
                                   <label for="select">Gender</label>
                                   <select name="gender" class="form-control">
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                        <option value="O">Other</option>
                                   </select>
                                   
                              </div>
                              

                              <div class="col-md-4 col-sm-4">
                                   <label for="select">Treatment Type</label>
                                   <select name="treatment" class="form-control">
                                        <option value="General Health">General Health</option>
                                        <option value="Cardiology" >Cardiology</option>
                                        <option value="Dental" >Dental</option>
                                        <option value="Medical Research" >Medical Research</option>
                                   </select>
                                   
                              </div>

                              



                              <div class="col-md-12 col-sm-12">
                                  
                                    <label for="name">Are you under Medication or any previously diagnosed condition?</label>
                                   <input type="text" class="form-control"  name="Q1" placeholder="Description">

                                   <label for="name">Do you have any Allergy?</label>
                                   <input type="text" class="form-control"  name="Q2" placeholder="Description">


                                   <label for="name">Title</label>
                                   <input type="text" class="form-control"  name="title" placeholder="Max 40 chars">
                              
                                   <label for="Message">Description</label>
                                   <textarea class="form-control" rows="5" id="desc" name="desc" placeholder="Description (100-1000 chars)"></textarea>
                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                              </div>
                         </div>
                   </form>
               </div>

          </div>
     </div>
</section>

<br>
<br>







    <footer data-stellar-background-ratio="5">
        <div class="container">
             <div class="row">
               <div class="col-md-2 col-sm-2"> </div>
               <div class="col-md-4 col-sm-4">
                    <div class="footer-thumb"> 
                         <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                         <p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat ultricies.</p>

                         <div class="contact-info">
                              <p><i class="fa fa-phone"></i> 010-070-0170</p>
                              <p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
                         </div>
                    </div>
               </div>

               
               <div class="col-md-1 col-sm-1"> </div>
               <div class="col-md-4 col-sm-4"> 
                    <div class="footer-thumb">
                         <div class="opening-hours">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                              <p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
                              <p>Saturday <span>09:00 AM - 08:00 PM</span></p>
                              <p>Sunday <span>Closed</span></p>
                         </div> 

                         <ul class="social-icon">
                              <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                              <li><a href="#" class="fa fa-twitter"></a></li>
                              <li><a href="#" class="fa fa-instagram"></a></li>
                         </ul>
                    </div>
               </div>
               <div class="col-md-1 col-sm-1"> </div>


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