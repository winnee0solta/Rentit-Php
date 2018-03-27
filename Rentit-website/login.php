<?php session_start(); ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>

<link href="images/ico/favicon.jpg" rel="icon" type="image">
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
      <link rel="stylesheet" href="css/style.css">
      <!--Import Google Icon Font-->
</head>
<body>

  <div  id="nino-header">
    <form action="" method="post">
      <div class="login-form">
         <h1>Rentit</h1>
         <div class="form-group ">
           <input type="email" class="form-control" placeholder="Email " id="UserName" name="email" required>
           <i class="fa fa-user"></i>
         </div>
         <div class="form-group log-status">
           <input type="password" class="form-control" placeholder="Password" id="Passwod" name="password" required>
           <i class="fa fa-lock"></i>
         </div>
          <span class="alert">Invalid Credentials</span>
          <a class="link" href="Register.php">create New Account?</a>
         <input type="submit" class="log-btn" name="fsubmit" value="Login" >

       </div>
    </form>
  </div>

<?php
include_once("config.php");
if ($connect)
{
  if (isset($_POST['fsubmit']) && !empty($_POST['email']) && !empty($_POST['password'])  )
  {


             $password_post = $_POST['password'];
             $email_post = $_POST['email'];

             $result = mysqli_query($connect, "SELECT * FROM credentials where email='$email_post' and password='$password_post'");

             if ($result)
             {
               session_start();
                while($row = mysqli_fetch_assoc($result))
                {
                  $_SESSION["username"] = $row['username'];
                  $_SESSION["id"] = $row['id'];

                }
                header('Location:profile.php');
            }


            //  $result = mysqli_query($connect, "insert into
            //   userscredential (username, email, password) values('$name_post', '$email_post','$password_post')');
             //
            //  if ($result)
            //  {
             //
            //    header('Location:home.php');
            //  }
            //  else {
             //
            //  }
  }

}

 ?>


  <script src="js/index.js"></script>



</body>
</html>
