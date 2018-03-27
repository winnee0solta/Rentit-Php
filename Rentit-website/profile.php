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
    $result1 = mysqli_query($connect, "SELECT * FROM credentials where id='$id'");

    if ($result1)
    {
       while($row = mysqli_fetch_assoc($result1))
       {

         $name = $row['username'];
        $phone = $row['phone'];
        $address = $row['address'];
        $ppimage = $row['pplocation'];

       }

    }
  }
?>

<?php
  if (isset($_POST['logout']))
  {
    session_destroy();
  }
  if (isset($_POST['editprofile']))
  {
    header('Location:profileedit.php');
  }
 ?>

  <!-- //for the post ie form -->
  <?php
  if (isset($_POST['upload'])
  && !empty($_POST['title'])
  && !empty($_POST['description'])
  && !empty($_POST['price'])
  && !empty($_POST['address']))
   {
    $target = "images/posts/".basename($_FILES['image']['name']);

          $image = $_FILES['image']['name'];
          $title_p = $_POST['title'];
          $description_p = $_POST['description'];
          $price_p = $_POST['price'];
          $address_p = $_POST['address'];
          $date_p = date("Y-m-d");

          $sql = mysqli_query($connect, "insert into posts (country,address,imagel,title,description,date,price,userid)
                                            values ( 'Nepal','$address_p','$image','$title_p','$description_p','$date_p','$price_p','$id')");

  if ($sql)
  {

    mysqli_query($connect, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
      echo "$msg";
    }else{
      $msg = "Failed to upload image";
        echo "$msg";
    }
  }
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
              <div class="col-md-4" style="margin-left:-0px; padding:0px;" >
                <div id="columns">
                  <figure>
                    <?php
                        if ($ppimage == "NO") {
                        echo "<img src='images/gravatar.jpg'>";
                      }else {
                      echo "<img src='images/profilepics/".$ppimage."'>";
                      }
                     ?>

                    <h4><b >
                     <figcaption>
                       <p align="center">
                         <?php echo "$name"; ?>
                     </p>
                   </figcaption>
                   </b></h4>

                    <center>
                     <div style="display:inline-block; font-size: 14px; margin-top:10px; width:100%; color:#999999;">
                       <figcaption>
                         <b>
                            <?php echo "$address"; ?>
                         </b>
                       </figcaption>
                     </div>
                   </center>
                   <center>
                     <div style="display: inline-block; ont-size: 14px;width:100%; color:#999999; margin-top:10px;">
                       <b>
                          <?php echo "$phone"; ?>
                       </b>
                     </div>
                    </center>

                    <form class="" action="" method="post">
                  <center>
                   <div  style=" display: inline-block; margin-top:10px; width:100%; color:#999999;">

                    <center>
                            <input type='submit' name='editprofile' value='Edit Profile'style='width:100%; background:#e78482; border:none; color:white; padding:5px;   box-shadow: 0 8px 6px 0 rgba(0,0,0,0.2); '>
                          </center>
                   </div>
                   <div  style=" display: inline-block; margin-top:10px; width:100%; color:#999999;">

                        <center>
                            <input type='submit' name='logout' value='  Log out'style='width:100%; background:#e78482; border:none; color:white; padding:5px;   box-shadow: 0 8px 6px 0 rgba(0,0,0,0.2); '>
                          </center>

                   </div>
                  </center>
                  </form>
                 </figure>
               </div>
              </div>
              <div class="col-md-8" style="margin-left:0px; padding:0px;">
                <div id="columns">
                  <figure>
                    <h2><b >
                     <figcaption><p align="center">Create a Rent Post</p></figcaption>
                   </b></h2>

                   <center>
                    <div  style=" display: inline-block; margin-top:10px; width:100%; color:#999999;">
                         <!-- <center>
                           <button type="button" name="button" style="width:100%; background:#e78482; border:none; color:white; padding:5px;   box-shadow: 0 8px 6px 0 rgba(0,0,0,0.2);">
                             Edit Profile
                           </button>
                         </center> -->
                           <center>
                             <form class="" action="" method="post" enctype="multipart/form-data" >
                               <br>
                               <input type="hidden" name="size" value="1000000" style="width:100%; height:50px; font-size:18px; border:none; padding:5px; box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.2);" required>
                            			<input type="file" name="image" required/>
                                  <br>

                               <input type="text" name="title" placeholder="Title " value=""  style="width:100%; height:50px; font-size:18px; border:none; padding:5px; box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.2);" required>
                               <br><br>
                               <textarea  name="description"placeholder="Description"rows="5" cols="100%" style="width:100%;  font-size:18px; border:none; padding:5px; box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.2);" required></textarea>
                               <br><br>
                               <input type="number" name="price" placeholder="Price " value=""  style="width:100%; height:50px; font-size:18px; border:none; padding:5px; box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.2);" required>
                               <br><br>
                               <input type="text" name="address" placeholder="Address " value=""  style="width:100%; height:50px; font-size:18px; border:none; padding:5px; box-shadow: 2px 2px 2px 2px rgba(0,0,0,0.2);" required>
                               <br><br>
                                <input type="submit" name="upload" value="Submit"style="width:100%; background:#e78482; border:none; color:white; padding:5px;   box-shadow: 0 8px 6px 0 rgba(0,0,0,0.2); margin-bottom:30px">
                             </form>
                           </center>

                    </div>
                   </center>
                 </figure>
               </div>


              </div>
              </div>
            </div>


   <div id="columns">
   <figure>
     <h1>
       <b >
      <center>
        <span>
          <p align="center" min-width="100" style="width:100%;">My Posts
          </p>
        </span>
      </center>
    </b>
  </h1>
  </figure>
   </div>
   <hr style="margin-top:-40px; height:5px;">

            <div id="columns">
              <!-- <figure>
              <img src="images/story/img-2.jpg">
                <h4><b >
                 <figcaption><p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p></figcaption>
               </b></h4>

               <div style=" font-size: 14px; margin-top:10px; ">
                 <div style="float:left;margin-top:10px; color:#999999;">
                   <figcaption>Mitrapark,Kathmandu</figcaption>
                 </div>
                 <div style="float:right; font-size: 18px; color: #e78482!important; margin-top:10px;">
                   <b>Price : Rs 90000</b>
                 </div>
               </div>
               <div  style=" display: inline-block; margin-top:10px; line-height:1.3em; font-size: 13px; font-style:justify; color:#999999;">
                  <figcaption><p align="justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                     It has survived not only five centuries, but also the leap into electronic typesetting,
                     remaining essentially unchanged. It was popularised in the 1960s with the release of Letrase
                     t sheets containing Lorem Ipsum passages, and more recently with desktop publishing software l
                     ike Aldus PageMaker including versions of Lorem Ipsum.</p>
                   </figcaption>
               </div>

               <div style=" font-size: 14px; margin-top:10px; ">
                 <div style="float:left;margin-top:10px; color:#999999;">
                     <figcaption><b>Date :2017-12-12</b></figcaption>
                 </div>

               </div>
               <center>
                <div  style=" display: inline-block; margin-top:10px; width:100%; color:#999999;">

                     <center><button type="button" name="button" style="width:100%; background:#e78482; border:none; color:white; padding:5px;   box-shadow: 0 8px 6px 0 rgba(0,0,0,0.2);">
                       Delete Post
                     </button></center>

                </div>
               </center>
             </figure> -->


             <?php

              include 'config.php';
              if ($connect)
              {
               $result = mysqli_query($connect, "SELECT * FROM posts where userid='$id'");
               if ($result)
               {
                  while($row = mysqli_fetch_assoc($result))
                  {
                     echo "<figure>";
                     $id_post = $row['id'];
                     echo "<img src='images/posts/".$row['imagel']."'>";
                     echo "<h4><b>
                      <figcaption><p align='justify'>".$row['title']." </p></figcaption>
                      </b></h4>";
                      echo "<div style=' font-size: 14px; margin-top:10px;'>
                        <div style='float:left;margin-top:10px; color:#999999;'>
                          <figcaption>".$row['address']."</figcaption>
                        </div>
                        <div style='float:right; font-size: 18px; color: #e78482!important; margin-top:10px;'>
                          <b>".$row['price']."</b>
                        </div>
                      </div>";
                      echo "<div  style=' display: inline-block; margin-top:10px; line-height:1.3em; font-size: 13px; font-style:justify; color:#999999;'>
                         <figcaption>
                         <p align='justify'>
                         ".$row['description']."
                         </p>
                          </figcaption>
                      </div>
                      ";

                   $id_user = $row['userid'];
                   $date_p = $row['date'];
                   $result1 = mysqli_query($connect, "SELECT * FROM credentials where id='$id_user'");
                   if ($result1)
                   {
                     while($row1 = mysqli_fetch_assoc($result1))
                     {
                       echo "  <div style=' font-size: 14px; margin-top:10px; '>
                           <div style='float:left;margin-top:10px; color:#999999;'>
                             <figcaption><b>posted by : ".$row1['username']."</b></figcaption>
                             <figcaption><b>Date :".$date_p."</b></figcaption>
                           </div>
                           <div style='float:right; font-size: 18px; color:#999999; margin-top:10px;'>
                             <b>
                             Phone : ".$row1['phone']."
                             </b>
                           </div>
                         </div>
                         <center>
                           <div  style=' display: inline-block; margin-top:10px; width:100%; color:#999999;'>
                                <center>
                                <form class='' action=''method='post'>
                                <input type='hidden' name='delete_rec_id' value='".$id_post."'/>
                                <input type='submit' name='delete_p' value='Delete Post'style='width:100%; background:#e78482; border:none; color:white; padding:5px;   box-shadow: 0 8px 6px 0 rgba(0,0,0,0.2); margin-bottom:30px'>

                                </form>
                                  </center>
                           </div>
                          </center>
                      	";
                      if (isset($_POST['delete_p'])) {
                        $id_post_h = $_POST['delete_rec_id'];
                        $rslt = mysqli_query($connect, "DELETE  FROM posts WHERE id='$id_post_h'");
                        if ($rslt) {

                        }
                      }

                      echo "</figure>";
                     }
                   }
                  }
               }
              }

              ?>


</div>



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
