<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="CodePixar">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>My Listings</title>

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
    <link rel="stylesheet" href="css/table.css">
  </head>

<body class = "dup-body">
  <div class="dup-body-wrap">
    <!-- Start Header Area -->
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
                          <a href="search.php" class="genric-btn primary-border radius">Home<span class="lnr lnr-arrow-right"></span></a>
                          </div>&nbsp;
                           <div class="button-group-area mt-40">
                          <a href="logout.php" class="genric-btn primary-border radius">Log Out<span class="lnr lnr-arrow-right"></span></a>
                          </div>
                    </div>
          </div>
        </div>
      </header>
    <!-- End Header Area -->
    <!--Search Area-->



        <footer class="section-gap footer-widget-area">
        <div class="section-top-border">
          <div class="row">
            <div class="col-lg-8 col-md-8">
              <div class="overlay"></div>
              <div class="container">
      <section class="col-xs-12 col-sm-6 col-md-12">

<!-- PHP script in between to access data and put it into the table -->


<?php
// Enable error logging:
error_reporting(E_ALL ^ E_NOTICE);
// mysqli connection via user-defined function
//establishes a connection with database
include('./config.php');

session_start();

$mysqli = get_mysqli_conn();

$username = $_SESSION['username'];
$userid = $_SESSION['userid'];

$query = "SELECT l.Image,l.Name, l.Author, l.Price,l.ISBN, l.Additional_Information FROM((LISTINGS l NATURAL JOIN HAS h) NATURAL JOIN USERS u) WHERE h.USERID = $userid";

$result = mysqli_query($mysqli, $query);

          
if ($result->num_rows > 0) {
    echo'<h2 class = "mb30">My Listings</h2><div class="table-container"><table class = "table table-filter"><tr><td>Image</td><td>Name</td><td>Author</td><td>Price</td><td>ISBN</td><td>Additional Information</td></tr>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo '<td><img src="data:image/jpeg;base64,'.base64_encode( $row['Image'] ).'"height="100" width="100"/></td>';
      echo "<td>" . $row['Name']. "</td>";
      echo "<td>" . $row['Author']. "</td>";
      echo "<td>" . $row['Price']. "</td>";
      echo "<td>" . $row['ISBN']. "</td>";
      echo "<td>" . $row['Additional_Information']. "</td>";
      echo "</tr>";
    }
    $db = mysqli_connect("localhost","root","","DbName"); //keep your db name

    echo "</table>";
     echo "</div>";
} else {
    echo "0 results";
} 
$mysqli->close();
?>                          

                           </section>
                           </div>   

                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </section>
          </footer>

              </body>

</html>
