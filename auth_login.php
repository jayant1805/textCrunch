<?php
// Enable error logging:
error_reporting(E_ALL ^ E_NOTICE);
// mysqli connection via user-defined function
//establishes a connection with database
include('./config.php');

session_start();

$mysqli = get_mysqli_conn();


//$username = stripcslashes($_POST['username']);
$_SESSION['username'] = stripcslashes($_POST['username']);
$_SESSION['password'] = stripcslashes($_POST['password']);

$username = $_SESSION['username'];
$password = $_SESSION['password'];


$query = "SELECT * FROM USERS WHERE User_name = '$username' and User_password = '$password'";

$result = mysqli_query($mysqli, $query);

if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_assoc($result)){
  $_SESSION['userid'] = $row["USERID"];
}
  header("Location: search.php");
}

else{
  echo "Invalid";
}
?>
