<?php
// require('config.php');
//   include('session.php'); 

   session_start();
   // Check if the user is already logged in, if yes then redirect him to welcome page


   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: search.php");
    exit;
    }

    // Include config file
    require_once "config.php";

     // $myusername = mysqli_real_escape_string($db,$_POST['username']);
     // $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      // Define variables and initialize with empty values
      $username = $password = "";
      $username_err = $password_err = "";

      // Processing form data when form is submitted
      if($_SERVER["REQUEST_METHOD"] == "POST"){
 
      // Check if username is empty
      if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
        } else{
        $username = trim($_POST["username"]);
        }
    
      // Check if password is empty
      if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
        } else{
        $password = trim($_POST["password"]);
        }
    
      // Validate credentials
      if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT * FROM USERS WHERE User_name = '$myusername' and User_password = '$mypassword'";
        
      if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: search.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
      /*$result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
         session_register("myusername");
         $_SESSION['myusername'] = $myusername;
         
         header("location: search.php");

      }else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
     }*/
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

    <form class="form">
        <div class="form__group">
            <input type="text" name="username" placeholder="Username" class="form__input" required>
        </div>

        <div class="form__group">
            <input type="password" name="password" placeholder="Password" class="form__input" required>
        </div>

        <button class="btn" type="button">Login</button>
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
