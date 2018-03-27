<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Register</title>

<link href="images/ico/favicon.jpg" rel="icon" type="image">
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
      <link rel="stylesheet" href="css/style.css">


</head>

<body>
<form class="" action="" method="post" >
  <div class="login-form">
     <h1>Join us</h1>
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="Username " id="UserName" name = "username" required>

     </div>
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="Email " id="UserName" name = "email" required>

     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Password" id="Passwod" name = "password" required>

     </div>
     <div class="form-group log-status">
       <input type="text" class="form-control" placeholder="Phone" id="Passwod" name = "phone" required>

     </div>
     <div class="form-group log-status">
       <input type="text" class="form-control" placeholder="Address" id="Passwod" name = "address" required>

     </div>

      <span class="alert" id="invalidpassword">Invalid Credentials</span>
      <a class="link" href="login.php">Have Account? Login Here</a>
     <input type="submit" class="log-btn" value="submit" name="fsubmit">
   </div>
</form>


<?php
     include_once("config.php");
if ($connect) {
       if (isset($_POST['fsubmit'])
        && !empty($_POST['username'])
       && !empty($_POST['password'])
        && !empty($_POST['email'])
        && !empty($_POST['phone'])
        && !empty($_POST['address']) )
       {

                   $name_post = $_POST['username'];

                  $password_post = $_POST['password'];

                  $email_post = $_POST['email'];

                  $phone_post = $_POST['phone'];

                  $address_post = $_POST['address'];

  $result = mysqli_query($connect, "insert into credentials (email,password,phone,address,pplocation,country,username)
  values('$email_post','$password_post','$phone_post','$address_post','NO','Nepal','$name_post')");

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
                  else {

                  }

       }

}


 ?>


  <script src="js/index.js"></script>

</body>
</html>
