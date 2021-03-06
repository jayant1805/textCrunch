<?php
//   include('session.php');
   include("config.php");
   session_start();


   $username = $_SESSION['username'];
   $password = $_SESSION['password'];

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
  <title>Search</title>

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
                      <a href="index.html">
                        <div class="Logo">
                        <h1>TextCrunch <br>
                        </div>
                      </a>
                    </div>
                    <div class="main-menubar d-flex align-items-center">
                          <div class="button-group-area mt-40">
                          <a href="viewlisting.php" class="genric-btn primary-border radius">View My Listings<span class="lnr lnr-arrow-right"></span></a>
                          </div>&nbsp;
                          <!-- <div class="button-group-area mt-40">
                          <a href="search.php" class="genric-btn primary-border radius">Home<span class="lnr lnr-arrow-right"></span></a>
                          </div>&nbsp; -->
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
                        <h3 class="mb-30">Buy a TextBook</h3>
                        <form method="post" action="auth_search.php">
                          <div class="mt-10">
                          <input type="text" name="textauthor" placeholder="Textbook Name or ISBN or Author" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Textbook Name or ISBN or Author'" required class="single-input"></div>
                          <div style="position: absolute; left: -5000px; ">
                            <input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
                          </div>
                          <br><center>
                          <button class="primary-btn">Search<span class="lnr lnr-arrow-right"></span></button></center>
                          <div class="info"></div>
                        </form>
                      <br>
                      <center><h3 class="mb-30">Or</h3></center>

                      <div id="mc_embed_signup">
                      <h3 class="mb-30">Sell a textbook</h3>
                      <<form method="post" action="addListing.php" accept="image/gif, image/jpeg">
                        <div class="mt-10">
                        <input type="text" name="textbookname" placeholder="Textbook Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Textbook Name'" required class="single-input">
                        </div>
                        <div class="mt-10">
                        <input type="text" name="author" placeholder="Author" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Author'" required class="single-input">
                        </div>
                        <div class="mt-10">
                          <input type="text" name="price" placeholder="Price" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Price'" required class="single-input">
                        </div>
                        <div class="mt-10">
                          <input type="text" name="isbn" placeholder="ISBN" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ISBN'" required class="single-input">
                        </div>
                        <div class="mt-10">
                          <input type="file" name="pic" placeholder="pic" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Image'" >
                        </div>
                        <div class="mt-10">
                        <input type="text" name="comments" placeholder="comments" onfocus="this.placeholder = ''" onblur="this.placeholder = 'TextBook Condition?'" required class="single-input">
                        </div>

                          <div class="button-group-area mt-10">
                            <br><center>
                            <button class="primary-btn">Search<span class="lnr lnr-arrow-right"></span></button></center>
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
