<?php
// Enable error logging:
error_reporting(E_ALL ^ E_NOTICE);
// mysqli connection via user-defined function
//establishes a connection with database
include('./config.php');
$mysqli = get_mysqli_conn();
$username = stripcslashes($_POST['username']);
$email = stripcslashes($_POST['email']);
$password = stripcslashes($_POST['password']);
if($username&& $email&& $password){
$query = "INSERT INTO USERS (User_name,User_email,User_password) VALUES (?,?,?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('sss', $username, $email, $password);
if ($stmt->execute()){
  header("Location: login.php?username=$username");
}
else{
  echo '<h1>Failure!</h1>';
}
$stmt->close();		
}

?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign-up Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="css/style.css"> <!--
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

<body>
    <div class="dup-body-wrap">
       <header class="default-header">
        <div class="header-wrap">
          <div class="header-top d-flex justify-content-between align-items-center">
                    <div class="logo">
                      <a href="index.php">
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

  <div class="user">

    <header class="user__header">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
        <h1 class="user__title">Sign-up form</h1>
    </header>

   
	<form name="registration" action="" method="post" class="form">
        <div class="form__group">
            <input type="text" name="username" placeholder="Username" class="form__input" />
        </div>

        <div class="form__group">
            <input value = "" type="email" name="email" placeholder="Email" class="form__input" />
        </div>

        <div class="form__group">
            <input type="password" name="password" placeholder="Password" class="form__input" />
        </div>

        <div class = "submit">
		<button type="submit" class="btn" value = "Register">Register</button>
		</div>
	</form>

</div>



    <script  src="js/index.js"></script>




</body>

</html>
