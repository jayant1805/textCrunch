<?php
   include("config.php");
   include('session.php');

   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT * FROM USER WHERE User_name = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;

         header("location: search.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href="css/style.css">


</head>

<body>

  <div class="user">
    <header class="user__header">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
        <h1 class="user__title">Login</h1>
    </header>

    <form class="form">
        <div class="form__group">
            <input type="text" name="username" placeholder="Username" class="form__input" />
        </div>

        <div class="form__group">
            <input type="email" name="email" placeholder="Email" class="form__input" />
        </div>

        <div class="form__group">
            <input type="password" name="password" placeholder="Password" class="form__input" />
        </div>

        <button class="btn" type="button">Login</button>
    </form>
</div>



    <script  src="js/index.js"></script>




</body>

</html>
