<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'ndhingra');
   define('DB_PASSWORD', 'Winter@*%2019');
   define('DB_DATABASE', 'ndhingra');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if ($db->connect_errno) {
    echo 'Failed to connect to MySQL: (' . $db->connect_errno . ') ' . $db->connect_error;
    }

    // Function to obtain mysqli connection.
//   function get_mysqli_conn()
//   {
//   $dbhost = 'localhost';
//   $dbuser = 'r6bhatt';
//   $dbpassword = 'Winter@*%2019';
//   $dbname = 'r6bhatt';
//   $mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
//   if ($mysqli->connect_errno)
//   {
//   echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
//   }
//   return $mysqli;
// }
?>
