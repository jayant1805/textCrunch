

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
  <title>Search Results</title>

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
  
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>

<body class = "dup-body">
  <div class="dup-body-wrap">
    <!-- Start Header Area -->
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
                          <a href="#" class="genric-btn primary-border radius">View My Listings<span class="lnr lnr-arrow-right"></span></a>
                          </div>&nbsp;
                          <div class="button-group-area mt-40">
                          <a href="search.php" class="genric-btn primary-border radius">Home<span class="lnr lnr-arrow-right"></span></a>
                          </div>&nbsp;
                           <div class="button-group-area mt-40">
                          <a href="#" class="genric-btn primary-border radius">Log Out<span class="lnr lnr-arrow-right"></span></a>
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

    <hgroup class="mb20">
    <h1>Search Results</h1>
     </hgroup>

    <section class="col-xs-12 col-sm-6 col-md-12">

  </section>
</div>                
<?php
// Enable error logging:
error_reporting(E_ALL ^ E_NOTICE);
// mysqli connection via user-defined function

include('./config.php');
$mysqli = get_mysqli_conn();

//Store LID from drop down
$lid = $_GET['LID'];


// SQL statement
$sql = "SELECT * FROM LISTINGS WHERE Name LIKE '%Stats%' || Author LIKE '% %' || ISBN LIKE '% %'"
/*
"SELECT * "
  . "FROM ((RESTAURANTS_DETAILS r NATURAL JOIN IS_OF i) NATURAL JOIN RESTAURANT_TYPE t), HAS h "
  . "WHERE h.LID = $lid AND h.RID = r.RID ";
*/
$result  = mysqli_query($mysqli, $sql);

// Prepared statement, stage 1: prepare
$stmt = $mysqli->prepare($sql);

// "i" for integer, "d" for double, "s" for string, "b" for blob
$stmt->bind_param('i', $lid);

// Prepared statement, stage 2: execute
$stmt->execute();

//Bind result variables
/*$stmt->bind_result($RID, $Hours_of_Ops, $Name, $Pricing, $Website, $Contact_num, $Contact_email, $Menu, $Type, $Accessibility, $Parking_space, $Home_delivery_takeout, $Patio_seating);*/
$stmt->bind_result($image, $Name, $Author, $Price, $ISBN, $Additional_Information);

/* fetch values (table) */
echo '<div class = "tables">';
echo"<table border='1'>";
echo"<tr><td>Image</td><td>Name</td><td>Author</td><td>Price</td><td>ISBN</td><td>Additional Information</td><td>";
while($row=mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>" . $row['Image']. "</td>";
      echo "<td>" . $row['NAME']. "</td>";
      echo "<td>" . $row['Author']. "</td>";
      echo "<td>" . $row['Price']. "</td>";
      echo "<td>" . $row['ISBN']. "</td>";
      echo "<td>" . $row['Additional_Information']. "</td>";
      echo "<td>" . "<div class="button-group-area mt-10">".
                    "<input type="submit" value="Submit">"."</div>";
      echo "</tr>";
      }

  echo "</table>";
  echo '</div>';

session_start();
$_SESSION['LID'] = $lid;

/* close statement and connection*/
$stmt->close();
$mysqli->close();
?>

                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </section>
          </footer>

              </body>

</html>
