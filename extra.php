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
if($email){
$query = "INSERT INTO USERS (User_name,User_email,User_password) VALUES (?,?,?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param('sss', $username, $email, $password);
if ($stmt->execute()){
  header("Location: welcome.php?username=$username");
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
            <input value = "" type="email" name="email" placeholder="Email" class="form__input" />
        </div>

        <div class="form__group">
            <input type="password" name="password" placeholder="Password" class="form__input" />
        </div>

        <div class = "submit">
		<br>
		<button type="submit" class="btn btn-primary btn-lg" value = "Register">Register</button>
		</div>
	</form>

</div>



    <script  src="js/index.js"></script>




</body>

</html>
