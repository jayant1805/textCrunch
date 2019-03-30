<?php
	include("config.php");

// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($db,$username);
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($db,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($db,$password);
  $query = "INSERT into `USERS` (User_name, User_email, User_password) VALUES ('$username', '$email', '$password')";
  $result = mysqli_query($db,$query);
    if($result){
            echo "<div class='form'>
						<h3>You are registered successfully.</h3>
						<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign-up Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href="css/style.css">


</head>

<body>

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
            <input type="email" name="email" placeholder="Email" class="form__input" />
        </div>

        <div class="form__group">
            <input type="password" name="password" placeholder="Password" class="form__input" />
        </div>

        <button class="btn" type="button">Register</button>
    </form>
</div>



    <script  src="js/index.js"></script>




</body>

</html>
