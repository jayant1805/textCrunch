<?php
// Enable error logging:
error_reporting(E_ALL ^ E_NOTICE);
// mysqli connection via user-defined function
//establishes a connection with database
include('./config.php');
$mysqli = get_mysqli_conn();

$username = stripcslashes($_POST['username']);
$password = stripcslashes($_POST['password']);
echo $username;
echo $password;

$query = "SELECT * FROM USERS WHERE User_name = '$username' and User_password = '$password'";

$result = mysqli_query($mysqli, $query);
header($username);

if(mysqli_num_rows($result) > 0){
  echo 'test';

  header("Location: search.php?username=$username");
}
else{
  echo "Invalid";
}
?>
