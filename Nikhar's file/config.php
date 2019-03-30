
<?php
 define('DB_SERVER', 'mansci-db.uwaterloo.ca');
   define('DB_USERNAME', 'ndhingra');
   define('DB_PASSWORD', 'Winter@*%2019');
   define('DB_NAME', 'ndhingra');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

	//setup connection to database
/*	function get_mysqli_conn() {
		$dbhost = 'mansci-db.uwaterloo.ca';
		$dbuser = 'ndhingra';
		$dbpassword = 'Winter@*%2019';
		$dbname = 'ndhingra';
		$mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
    
		if ($mysqli->connect_errno) {
			echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
		}
		
		return $mysqli;
	}	*/	
?>