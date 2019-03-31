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

$query = "SELECT l.Name, l.Author, l.Price, l.Image, l.ISBN, l.Additional_Information FROM((LISTINGS l NATURAL JOIN HAS h) NATURAL JOIN USERS u) WHERE h.USERID = $userid";

$result = mysqli_query($mysqli, $query);

?>

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
                          <!-- <div class="button-group-area mt-40">
                          <a href="#" class="genric-btn primary-border radius">View My Listings<span class="lnr lnr-arrow-right"></span></a>
                          </div>&nbsp; -->
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
                  <div class="row justify-content-center">
                    <div class="col-lg-6">
                     <div id="mc_embed_signup">
                        <h3 class="mb-30">My Listings</h3>

<!-- PHP script in between to access data and put it into the table -->
<table align="left" border = "1px" style="width:600px; line-height:40px;">
  <th> Name </th>
  <th> Author </th>
  <th> Price </th>
  <th> ISBN </th>
  <th> Additional_Information </th>

  <?php

  if(mysqli_num_rows($result) > 0){
    //outputting data to table
    while($row = mysqli_fetch_assoc($result)){

  ?>

<tr>
  <td><?php echo $row["Name"]; ?></td>
  <td><?php echo $row["Author"]; ?></td>
  <td><?php echo $row['Price']; ?></td>
  <td><?php echo $row['ISBN']; ?></td>
  <td><?php echo $row['Additional_Information']; ?></td>
</tr>
<!--      echo "Name: " . $row["Name"]. " - Author: " . $row["Author"] . " - Price: " . $row["Price"] . " - ISBN: " . $row["ISBN"] . " - Addn Info. " . $row["Additional_Information"] . "<br>";
-->
  <?php  }

  }

  else{
    echo "0 Results";
  }

  ?>
</table>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </section>
          </footer>

              </body>

</html>
