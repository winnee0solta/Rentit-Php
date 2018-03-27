<!DOCTYPE html>
<html>
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>

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
  <body id="merositekobody">

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

      </div>
  	</header><!--/#header-->

    <div class="column">
      <div id="sb-search" class="sb-search">
      <form>
        <input class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search">
        <input class="sb-search-submit" type="submit" value="">
        <span class="sb-icon-search"></span>
      </form>
      </div>
    </div>


      <!-- //stagret view -->
       <div id="columns">
         <!-- <figure>
           <img src="images/story/img-2.jpg">
           <h4><b >
            <figcaption><p align="justify">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
            </p></figcaption>
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
              <figcaption><b>posted by : Winnee creztha</b></figcaption>
              <figcaption><b>Date :2017-12-12</b></figcaption>
            </div>
            <div style="float:right; font-size: 18px; color:#999999; margin-top:10px;">
              <b>Phone : 9860988112</b>
            </div>
          </div>
       	</figure> -->
        <!-- end stragret -->

<?php
 include 'config.php';
 if ($connect)
 {
  $result = mysqli_query($connect, "SELECT * FROM posts ");
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
         	</figure>";
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

    <!--Import jQuery before materialize.js-->
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
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
     <script src="js/classie.js"></script>
 		<script src="js/uisearch.js"></script>
 		<script>
 			new UISearch( document.getElementById( 'sb-search' ) );
 		</script>
  </body>
</html>
