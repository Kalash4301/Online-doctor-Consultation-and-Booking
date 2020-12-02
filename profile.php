<?php
 session_start();
 $con=mysqli_connect('localhost','root','','healthcare');
 $user_id=$_SESSION['user_id'];
 
 
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


     <style type="text/css">
       .dropdown-check-list {
  display: inline-block;
}

.dropdown-check-list .anchor {
  position: relative;
  cursor: pointer;
  display: inline-block;
  padding: 5px 50px 5px 10px;
  border: 1px solid #ccc;
}

.dropdown-check-list .anchor:after {
  position: absolute;
  content: "";
  border-left: 2px solid black;
  border-top: 2px solid black;
  padding: 5px;
  right: 10px;
  top: 20%;
  -moz-transform: rotate(-135deg);
  -ms-transform: rotate(-135deg);
  -o-transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
  transform: rotate(-135deg);
}

.dropdown-check-list .anchor:active:after {
  right: 8px;
  top: 21%;
}

.dropdown-check-list ul.items {
  padding: 2px;
  display: none;
  margin: 0;
  border: 1px solid #ccc;
  border-top: none;
}

.dropdown-check-list ul.items li {
  list-style: none;
}

.dropdown-check-list.visible .anchor {
  color: #0094ff;
}

.dropdown-check-list.visible .items {
  display: block;
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
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="findclinic.php" class="smoothScroll">Make an appointment</a></li>
                         <li><a href="findlab.php" class="smoothScroll">Book Lab Testing</a></li>
                         <li><a href="consultation.php" class="smoothScroll">Consultation</a></li>
                         <li><a href="#" class="smoothScroll" data-target="#mymodel" data-toggle="modal">Login/Sign Up</a></li>
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
  <div class="col-md-5 col-sm-5">        
  <div id="user_image" class="text-align-center"> 

  </div>

   <div id="registered detail">
   
   


   </div>
   <div id ="addition detail">
   
    <button type="submit" class="form-control"  id="add" onclick = "Openform()" name="submit" style="background-color: #a5c422;">Add Addition Details</button>
    <br>

    <button type="submit" class="form-control"  id="update" onclick = "Openform()" name="submit" style="background-color: #a5c422;">Update Addition Details</button>

                     <?php

                      $query="SELECT * FROM `additional` WHERE `user_id`='$user_id'";
                      $run=mysqli_query($con,$query);
                        if(mysqli_num_rows($run)>0){
                         while($row=mysqli_fetch_assoc($run))
                         { 
                          //print_r($row);
                       ?>

                         
                        <div class="wow fadeInUp" >
                             
                               <div class="card  bg-warning text-white">
                                 <div class="card-body">
                                 <p><b>City : <?php echo  $row['city']; ?><b></p>
                                 <p><b>Allergies : <?php echo  $row['allergy']; ?><b></p>
                                 <p><b>Surgeries : <?php echo  $row['surgery']; ?><b></p>
                                 <p><b>Injuries : <?php echo  $row['injury']; ?><b></p>
                                 <p><b>Weight : <?php echo  $row['weight']; ?><b></p>
                                 <p><b>Marietial statues : <?php echo  $row['maritial']; ?><b></p>
                               </div>
                                 

                               </div>
                               <br>
                        

                        </div>



                     <?php }} ?>


                     <?php
                     $val="";
                     $val1="";
                     $val2="";

                      if(isset($_POST['submit'])){

                        if(!empty($_POST['lang'])) {    
                            foreach($_POST['lang'] as $value){
                              $val.=   " ";
                              $val.=   $value;
                              //echo "value : ".$value.'<br/>';

                            }
                        }

                        if(!empty($_POST['lang1'])) {    
                            foreach($_POST['lang1'] as $value){
                              $val1.=   " ";
                              $val1.=   $value;
                              //echo "value : ".$value.'<br/>';

                            }
                        }
                        if(!empty($_POST['lang2'])) {    
                            foreach($_POST['lang2'] as $value){
                              $val2.=   " ";
                              $val2.=   $value;
                              //echo "value : ".$value.'<br/>';

                            }
                        }

                        $city=$_POST['city'];
                        $allergy=$val;
                        $injury=$val1;
                        $surgery=$val2;
                        $weight=$_POST['weight'];
                        $maritial=$_POST['maritial'];

                $query2 ="INSERT INTO  `additional`(`user_id`,`city`,`weight`,`allergy`,`injury`,`surgery`,`maritial`) VALUES ('$user_id','$city','$weight','$allergy' ,'$injury','$surgery','$maritial')";

              /*  $query1 =UPDATE `additional` SET `surgery` = 'legs', `injury` = 'skull facture', `allergy` = 'Mushroom', `weight` = '49' WHERE `additional`.`id1` = 2;
              "UPDATE  INTO  `additional`(`city`,`weight`,`allergy`,`injury`,`surgery`,`maritial`) VALUES ('$city','$weight','$allergy' ,'$injury','$surgery','$maritial')";*/
              
              $run1=mysqli_query($con,$query2);

              if($run1)
              { 
                //header('location:profile.php');
                //header('refresh:0.5; url=profile.php');
                echo '<script>alert("Submitted Successfully")</script>';
                
              }
              else
              echo '<script>alert("Failed Error has occured")</script>';

                    }

                    //echo $val;
                    //echo $val1;
                    //echo $val2;
                    

                     ?>

               <form id="form1" method="post" role="form" style="display:none;"action="#">

                         <!-- SECTION TITLE -->
                         <div class="section-title " data-wow-delay="0.0s">
                              <h3>Add or update details</h3>
                         </div>

                         <div>
                           <div class="col-md-4 col-sm-4">
                                   <label for="select">Current city</label>
                                   <select name="city" class="form-control">
                                        <option value="Mumbai">Mumbai</option>
                                        <option value="Pune">Pune</option>
                                        <option value="Nagpur">Nagpur</option>
                                        <option value="Bangluru">Bangluru</option>
                                        <option value="Nashik">Nashik</option>
                                        <option value="Thane">Thane</option>
                                         <option value="Delhi">Delhi</option>
                                        <option value="Agra">Agra</option>
                                        
                                   </select>
                                   
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <label for="name">Weight</label>
                                   <input type="number" class="form-control"  name="weight" placeholder="00">
                              </div>

                               

                             

                             

                              <div class="col-md-4 col-sm-4">
                                   <label for="select">Maritial Status</label>
                                   <select name="maritial" class="form-control">
                                        <option value="Married">Married</option>
                                        <option value="Unmarried">Unmarried</option>
                                        <option value="Diavorced">Diavorced</option>
                                   </select>
                                   
                              </div>

                              

                              <div class="col-md-4 col-sm-4">
                            <div>
                              <br>
                            </div>

                            <div id="list1" class="dropdown-check-list" tabindex="100">
                            <span class="anchor" ><b>Add Surgeries if any</b></span>
                            <ul class="items">
                              <li><input type="checkbox" value="Heart" name='lang[]'/>Heart </li>
                              <li><input type="checkbox" value="Liver" name='lang[]'/>Liver</li>
                              <li><input type="checkbox" value="Kidney" name='lang[]'/>Kidney</li>
                              <li><input type="checkbox" value="Facial" name='lang[]'/>Facial</li>
                              <li><input type="checkbox" value="Lungs" name='lang[]'/>Lungs</li>
                              <li><input type="checkbox" value="Brain" name='lang[]'/>Brain</li>
                              <li><input type="checkbox" value="Other" name='lang[]'/>Other</li>
                            </ul>
                          </div>

                          </div>


                          <div class="col-md-4 col-sm-4">
                            <div>
                              <br>
                            </div>

                            <div id="list2" class="dropdown-check-list" tabindex="100">
                            <span class="anchor" ><b>Add Injuries if any</b></span>
                            <ul class="items">
                              <li><input type="checkbox" value="Spinal Cord" name='lang1[]'/>Spinal Cord</li>
                              <li><input type="checkbox" value="Skull Facture" name='lang1[]'/>Skull Facture</li>
                              <li><input type="checkbox" value="Jaw Facture" name='lang1[]'/>Jaw Facture</li>
                              <li><input type="checkbox" value="Rib Facture" name='lang1[]'/>Rib Facture </li>
                              <li><input type="checkbox" value="Traumatic injury" name='lang1[]'/>Traumatic injury </li>
                              <li><input type="checkbox" value="Facial Trauma" name='lang1[]'/>Facial Trauma</li>
                              <li><input type="checkbox" value="Concussion" name='lang1[]'/>Concussion</li>
                              <li><input type="checkbox" value="Acoustic Trauma" name='lang1[]'/>Acoustic Trauma</li>
                              <li><input type="checkbox" value="Other" name='lang1[]'/>Other</li>
                            </ul>
                          </div>

                          </div>


                           <div class="col-md-4 col-sm-4">
                            <div>
                              <br>
                            </div>

                            <div id="list3" class="dropdown-check-list" tabindex="100">
                            <span class="anchor" ><b>Add Allergies if any</b></span>
                            <ul class="items">
                              <li><input type="checkbox" value="Lactose" name='lang2[]'/>Lactose</li>
                              <li><input type="checkbox" value="Soy" name='lang2[]'/>Soy</li>
                              <li><input type="checkbox" value="Nuts" name='lang2[]'/>Nuts</li>
                              <li><input type="checkbox" value="Seafood" name='lang2[]'/>Seafood</li>
                              <li><input type="checkbox" value="Eggs" name='lang2[]'/>Eggs</li>
                              <li><input type="checkbox" value="Fish" name='lang2[]'/>Fish</li>
                              <li><input type="checkbox" value="Mushroom" name='lang2[]'/>Mushroom</li>
                              <li><input type="checkbox" value="Pets" name='lang2[]'/>Pets</li>
                              <li><input type="checkbox" value="Aspirin" name='lang2[]'/>Aspirin</li>
                              <li><input type="checkbox" value="Penicillin" name='lang2[]'/>Penicillin</li>
                            </ul>
                          </div>

                          </div>

                            

                            <div>
                            
                            <div>
                            <br>
                            <br>
                          </div>  
                          
                            
                       <button type="submit" class="form-control" style="background-color: #a5c422;" name="submit">Update</button>

                       </div>
                           

                              
                            


                              
                         </div>
                   </form>

     
   </div>


  </div>
<?php
  $query=$con->prepare("SELECT * FROM `appointment` WHERE `user_id`='$user_id'");
$query->execute();
  $run= $query->get_result();
  $row=$run->num_rows;
  
  ?>
  <div class="col-md-1 col-sm-1"></div>


  <div class="col-md-6 col-sm-6">  
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
  <?php
  while($res=$run->fetch_assoc())
  {
    $doc_id=$res['doc_id'];
    $query1=$con->prepare("SELECT * FROM `doctors` WHERE `id`='$doc_id'");
$query1->execute();
  $run1= $query1->get_result();
  $res1=$run1->fetch_assoc();
  ?>
    <tr>
      <th scope="row"><?php echo $res['name']; ?></th>
      <td><?php echo $res1['name']; ?></td>
      <td><?php echo $res['date']; ?></td>
      <td><?php echo $res['time']; ?></td>
    </tr>
    <?php
  }
    ?>
  </tbody>
</table>
</div>


<?php
  $query=$con->prepare("SELECT * FROM `labbook` WHERE `id`='$user_id'");
$query->execute();
  $run= $query->get_result();
  $row=$run->num_rows;
  
  ?>

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
  <?php
  while($res=$run->fetch_assoc())
  {
    $lab_id=$res['lab_id'];
    $query1=$con->prepare("SELECT * FROM `labtest` WHERE `id`='$lab_id'");
$query1->execute();
  $run1= $query1->get_result();
  $res1=$run1->fetch_assoc();
    ?>
    <tr>
      <th scope="row"><?php echo $res['name']; ?></th>
      <td><?php echo $res1['name']; ?></td>
      <td><?php echo $res['test']; ?></td>
      <td><?php echo $res['date']; ?></td>
    </tr>
    <?php
  } 
    ?>
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
   
<script type="text/javascript">
  function Openform() {
  document.getElementById('form1').style.display = 'block';
}


var checkList = document.getElementById('list1');
checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
  if (checkList.classList.contains('visible'))
    checkList.classList.remove('visible');
  else
    checkList.classList.add('visible');
}

var checkList2 = document.getElementById('list2');
checkList2.getElementsByClassName('anchor')[0].onclick = function(evt) {
  if (checkList2.classList.contains('visible'))
    checkList2.classList.remove('visible');
  else
    checkList2.classList.add('visible');
}

var checkList3 = document.getElementById('list3');
checkList3.getElementsByClassName('anchor')[0].onclick = function(evt) {
  if (checkList3.classList.contains('visible'))
    checkList3.classList.remove('visible');
  else
    checkList3.classList.add('visible');
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