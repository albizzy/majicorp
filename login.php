<?php
session_start();
include('includes/config.php');

if(isset($_POST['login'])){
    
    $majimeter = $_POST['majimeter'];
    $majipass = $_POST['majipass'];

    $majirequest="SELECT maji_id FROM majiusers WHERE maji_meter = '$majimeter' AND maji_pass = '$majipass'";
    $sql=mysqli_query($db, $majirequest);
    $row = mysqli_fetch_array($sql,MYSQLI_ASSOC); 
    $count = mysqli_num_rows($sql);

    if($count==1){
      $_SESSION['login']=$_POST['majimeter'];
      $_SESSION['id']=$row['maji_id'];
      echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
    } else {
      echo "<script>alert('Wrong Password');</script>"; 
    }
  }
?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.3.0, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.3.0, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/20210121-0412-01-128x128-1.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Login</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
<?php
require "includes/nav.php";
?>  

<section class="form4 cid-smGtVPIaKA mbr-fullscreen" id="form4-7">

    <div class="container">
        <div class="row content-wrapper justify-content-center">
            <div class="col-lg-3 offset-lg-1 mbr-form" >
            <form action="test.php" method="post">
                    
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="mbr-section-title mb-4 display-2"><strong>Login</strong></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class="mbr-text mbr-fonts-style mb-4 display-7">Kindly enter you username and password to login.<br></p>
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group">
                            <input type="text" name="majimeter" placeholder="Meter Number" class="form-control" value="">
                        </div>
                        <div class="col-lg-12 col-md col-12 form-group">
                            <input type="text" name="majipass" placeholder="Password" class="form-control" value="" >
                        </div>
                        <div class="col-12 col-md-auto mbr-section-btn"><button type="submit" name="login" class="btn btn-primary-outline display-4">Submit</button></div>
                    </div>
                </form>
            </div>
            <div class="col-lg-7 offset-lg-1 col-12">
                <div class="image-wrapper">
                    <img class="w-100" src="assets/images/about01-500x500.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer7 cid-smE1biSazQ" once="footers" id="footer7-6">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2021 MajiCorporation - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/u" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Mobirise page software - <a href="https://mobirise.site/p" style="color:#aaa;">See here</a></p></section><script src="assets/web/assets/jquery/jquery.min.js"></script>  <script src="assets/popper/popper.min.js"></script>  <script src="assets/tether/tether.min.js"></script>  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>  <script src="assets/dropdown/js/nav-dropdown.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
  <input name="animation" type="hidden">
  </body>
</html>