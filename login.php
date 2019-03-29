<?php
   include("config.php");

   session_start();

   $msg = '';

   if (isset($_POST['login']) && !empty($_POST['username'])
      && !empty($_POST['password'])) {

      if ($_POST['username'] == 'username' &&
         $_POST['password'] == '1234') {
         // $_SESSION['valid'] = true;
         // $_SESSION['timeout'] = time();
         // $_SESSION['username'] = 'tutorialspoint';

         echo 'You have entered valid use name and password';
      }else {
         $msg = 'Wrong username or password';
      }
   }
   // if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
       // username and password sent from form
   // if($_SERVER["REQUEST_METHOD"] == "POST") {
   //     $myusername = mysqli_real_escape_string($db,$_POST['username']);
   //     $mypassword = mysqli_real_escape_string($db,$_POST['password']);
   //
   //     $sql = "SELECT * FROM USERS WHERE User_name = '$myusername' and User_password = '$mypassword'";
   //     $result = mysqli_query($db,$sql);
   //     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   //     $active = $row['active'];
   //
   //     $count = mysqli_num_rows($result);
   //
   //     // If result matched $myusername and $mypassword, table row must be 1 row
   //
   //    if($count == 1) {
   //        //session_register("myusername");
   //        $_SESSION['myusername'] = $myusername;
   //        header("location: search.php");
   //
   //     }else {
   //        $error = "Your Login Name or Password is invalid";
   //        echo $error;
   //     }
   //  }
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

      <link rel="stylesheet" href="css/style.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">


</head>

<body class="dup-body">
  <div class="dup-body-wrap">
       <header class="default-header">
        <div class="header-wrap">
          <div class="header-top d-flex justify-content-between align-items-center">
                    <div class="logo">
                      <a href="index.html">
                        <div class="Logo">
                        <h1>TextCrunch <br>
                        </div>
                      </a>
                    </div>
                    <div class="main-menubar d-flex align-items-center">
                          <div class="button-group-area mt-40">
                          <a href="index.php" class="genric-btn primary-border radius">Home<span class="lnr lnr-arrow-right"></span></a>
                          </div>
                   </div>
          </div>
        </div>
      </header>
<div class="section-top-border">
  <div class="row">
  <div class="col-lg-8 col-md-8">
  <div class="row justify-content-center">
  <div class="col-lg-6">
  <div id="mc_embed_signup">

  <div class="user">
    <header class="user__header">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
        <h1 class="user__title">Login</h1>
    </header>

    <form class="form" action="post">
        <div class="form__group">
            <input type="text" name="username" value="username" placeholder="Username" class="form__input" />
        </div>

        <div class="form__group">
            <input type="email" name="email" value="email"placeholder="Email" class="form__input" />
        </div>

        <div class="form__group">
            <input type="password" name="password" value="password" placeholder="Password" class="form__input" />
        </div>

        <button class="btn" name="login" value="login" type="button">Login</button>
    </form>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</div>
    <script  src="js/index.js"></script>

</body>

</html>
