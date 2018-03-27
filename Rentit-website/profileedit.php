<?php
 session_start();

 include 'config.php';
  if (  $_SESSION["id"] == null)
   {
      header('Location:login.php');
      exit;
  }
  else
  {
    $id = $_SESSION["id"];

  }
?>


<!DOCTYPE html>
<html>
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

     <link href="images/ico/favicon.jpg" rel="icon" type="image">
     	<!-- css -->
     	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
     	<link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
     	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css" />
     	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
     	<link rel="stylesheet" type="text/css" href="css/unslider.css" />
     	<link rel="stylesheet" type="text/css" href="css/template.css" />
	     <link rel="stylesheet" type="text/css" href="css/homemade.css" />
        <link rel="stylesheet" type="text/css" href="css/cards.css" />
        <link rel="stylesheet" type="text/css" href="css/default.css" />
    		<link rel="stylesheet" type="text/css" href="css/component.css" />
        <link rel="stylesheet" type="text/css" href="css/posts.css" />
    		<script src="js/modernizr.custom.js"></script>


  </head>
  <body>

    <header id="rednavcolor" id="nino-header">
  		<div id="nino-headerInner">
  			<nav id="nino-navbar" class="navbar navbar-default" role="navigation">
  				<div class="container">

  					<!-- Brand and toggle get grouped for better mobile display -->
  					<div class="navbar-header">
  						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
  							<span class="sr-only">Toggle navigation</span>
  							<span class="icon-bar"></span>
  							<span class="icon-bar"></span>
  							<span class="icon-bar"></span>
  						</button>
  						<a class="navbar-brand" href="index.php">Rentit</a>
  					</div>

  					<!-- Collect the nav links, forms, and other content for toggling -->
  					<div class="nino-menuItem pull-right">
  						<div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
  							<ul class="nav navbar-nav">
  								<li>
  									<a href="index.php">Home </a></li>
  								<li><a href="index.php#nino-story">About</a></li>
  								<li><a href="posts.php">Posts</a></li>
  								<li><a href="profile.php">My Account</a></li>
  							</ul>
  						</div>

  					</div>
  				</div><!-- /.container-fluid -->
  			</nav>
  		</div>
  	</header><!--/#header-->



            <div class="row" style="margin-top:-20px; ">
              <center>
              <div class="col-md-8" style="width:100%">
                <div id="columns">
                  <figure>
                    <h2><b >
                     <figcaption><p align="center">Edit Profile</p></figcaption>
                   </b></h2>

                   <center>
                    <div  style=" display: inline-block; margin-top:10px; width:100%; color:#999999;">
                           <center>
                             <form class="" action="" method="post" enctype="multipart/form-data" >
                               <br>
                               <h5><b>Select Profile Image</b></h5>
                               <input  required type="hidden" name="size" value="1000000" style="width:100%; height:50px; font-size:18px; border:none; padding:5px; box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.2);" required>
                            			<input required type="file" name="image"  required/>
                                  <br>

                               <input  required type="text" name="username" placeholder="Username" value=""  style="width:100%; height:50px; font-size:18px; border:none; padding:5px; box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.2);" required>
                               <br><br>

                               <input  requiredtype="text" name="phone" placeholder="Phone " value=""  style="width:100%; height:50px; font-size:18px; border:none; padding:5px; box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.2);" required>
                               <br><br>
                               <input required type="text" name="address" placeholder="Address " value=""  style="width:100%; height:50px; font-size:18px; border:none; padding:5px; box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.2);" required>
                               <br><br>
                                <input  required type="submit" name="updateprofile" value="Update Profile"style="width:100%; background:#e78482; border:none; color:white; padding:5px;   box-shadow: 0 8px 6px 0 rgba(0,0,0,0.2); margin-bottom:30px">
                             </form>
                           </center>

                    </div>
                   </center>
                 </figure>
               </div>
              </div>
            </div>
          </center>
            </div>
</div>

<?php
  if (isset($_POST['updateprofile']) )
  {
    $target = "images/profilepics/".basename($_FILES['image']['name']);

          $image = $_FILES['image']['name'];
          $username_u = $_POST['username'];
          $phone_u = $_POST['phone'];
          $address_u = $_POST['address'];

    $result_update =  mysqli_query($connect, "UPDATE credentials  SET pplocation='$image' ,username='$username_u',phone='$phone_u',address='$address_u' WHERE id='$id'");
    if ($result_update)
    {
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
      {
          header('Location:profile.php');
          exit;
      }
    }
  }

 ?>


 <!-- Footer
 ================================================== -->
 <footer id="footer" >
     <div class="container" style="color:#999999;">
       <div class="row">
         <div class="col-md-12">
           <div class="colInfo">
             <div class="footerLogo">
               <a href="#" >Rentit</a>
             </div>

             <div class="nino-followUs">
               <div class="socialNetwork">
                 <span class="text">Follow Us: </span>
                 <a href="" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
                 <a href="" class="nino-icon"><i class="mdi mdi-twitter"></i></a>
                 <a href="" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
                 <a href="" class="nino-icon"><i class="mdi mdi-pinterest"></i></a>
                 <a href="" class="nino-icon"><i class="mdi mdi-google-plus"></i></a>
                 <a href="" class="nino-icon"><i class="mdi mdi-youtube-play"></i></a>
                 <a href="" class="nino-icon"><i class="mdi mdi-dribbble"></i></a>
                 <a href="" class="nino-icon"><i class="mdi mdi-tumblr"></i></a>
               </div>
             </div>
           </div>
         </div>
       </div>
   <div class="nino-copyright" style="color:#999999;">Copyright &copy; 2017 <a target="_blank" href="" >Rentit</a>. All Rights Reserved. <br/> </div>
     </div>
 </footer><!--/#footer-->

    <!-- javascript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.97074.js"></script>
    <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="js/template.js"></script>
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>

  </body>
</html>
