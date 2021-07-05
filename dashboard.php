<?php
require "includes/config.php";
session_start();
if(!isset($_SESSION['majimeter'])){
    header("location: login.php");
   }
   else{
$id=$_SESSION['id'];
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
  
  
  <title>Dashboard</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
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
require "includes/dashnav.php";
?>  

<section class="content4 cid-sA9hffn0fd" id="content4-r">
    
    
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-10">
                <br>
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-5"><strong>Hello,</strong></h3>
                
                
            </div>
        </div>
    </div>
</section>

<section class="content8 cid-sA9CFX9f8Q" id="content8-y">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="counter-container col-md-12 col-lg-10">
                
                <div class="mbr-text mbr-fonts-style display-5">
                    <?php
                    $majiuser="SELECT * FROM majiusers WHERE maji_id='$id'";
                    $sqlmajiuser=mysqli_query($db, $majiuser);
                    while($rowmajiuser=mysqli_fetch_array($sqlmajiuser)){
                    ?>
                    <ul>
                        <li><strong>Name: </strong><?php echo $rowmajiuser['maji_name']; ?></li>
                        <li><strong>Meter No: </strong><?php echo $rowmajiuser['maji_meter']; ?></li>
                        <li><strong>Contacts: </strong><?php echo $rowmajiuser['maji_contacts']; ?></li>
                        <li><strong>Location:</strong>&nbsp;<?php echo $rowmajiuser['maji_region']; ?> | <?php echo $rowmajiuser['maji_location']; ?></li>
                    </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="form2 cid-so43m0Wo11" id="form2-n">

    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="7v//4nrQEpKdP35muaHvlIxRbBXye1XqhYB3iW6IxqsP1BUlCrebDInK9yqQgExaNmEIJabc5+IQjLYaIgVZjEJpLnetLwsttSZAz773oPdYlU+qsDGh9ZLRyvMs0M1H">
                    <div class="">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling
                            out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="mbr-section-title mb-4 display-2">
                                <strong>Get Voucher Request</strong></h1>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                        </div>
                        <div class="col-lg col-md col-12 form-group" data-for="email">
                            <input type="number" name="amount" placeholder="Amount" data-form-field="name" class="form-control" id="name-form2-n">
                        </div>
                        <div class="mbr-section-btn col-md-auto col"><button type="submit" class="btn btn-primary-outline display-4">Submit</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="gallery6 mbr-gallery cid-smGw9T4l06" id="gallery6-c">
    

    

    <div class="container-fluid">
        
        <div class="row mbr-gallery mt-4">
            
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-target="#sAa6nWVLH4-modal">
                    <img class="w-100" src="assets/images/mbr-566x375.jpg" alt="" data-slide-to="0" data-target="#lb-sAa6nWVLH4">
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-target="#sAa6nWVLH4-modal">
                    <img class="w-100" src="assets/images/mbr-566x377.jpg" alt="" data-slide-to="1" data-target="#lb-sAa6nWVLH4">
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-target="#sAa6nWVLH4-modal">
                    <img class="w-100" src="assets/images/mbr-566x376.jpg" alt="" data-slide-to="2" data-target="#lb-sAa6nWVLH4">
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                
            </div><div class="col-12 col-md-6 col-lg-3 item gallery-image">
                <div class="item-wrapper" data-toggle="modal" data-target="#sAa6nWVLH4-modal">
                    <img class="w-100" src="assets/images/mbr-1-566x377.jpg" alt="" data-slide-to="3" data-target="#lb-sAa6nWVLH4">
                    <div class="icon-wrapper">
                        <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="modal mbr-slider" tabindex="-1" role="dialog" aria-hidden="true" id="sAa6nWVLH4-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="carousel slide" id="lb-sAa6nWVLH4" data-interval="5000">
                            <div class="carousel-inner">
                                
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="assets/images/mbr-566x375.jpg" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/mbr-566x377.jpg" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/mbr-566x376.jpg" alt="">
                                </div><div class="carousel-item">
                                    <img class="d-block w-100" src="assets/images/mbr-1-566x377.jpg" alt="">
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-slide-to="0" class="active" data-target="#lb-sAa6nWVLH4"></li>
                                <li data-slide-to="1" data-target="#lb-sAa6nWVLH4"></li>
                                <li data-slide-to="2" data-target="#lb-sAa6nWVLH4"></li>
                                <li data-slide-to="3" data-target="#lb-sAa6nWVLH4"></li>
                            </ol>
                            <a role="button" href="" class="close" data-dismiss="modal" aria-label="Close">
                            </a>
                            <a class="carousel-control-prev carousel-control" role="button" data-slide="prev" href="#lb-sAa6nWVLH4">
                                <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next carousel-control" role="button" data-slide="next" href="#lb-sAa6nWVLH4">
                                <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer7 cid-smE1biSazQ" once="footers" id="footer7-9">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2021 MajiCorporation - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: flex;"><a href="https://mobirise.site/j" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Make your own website with <a href="https://mobirise.site/z" style="color:#aaa;">Mobirise</a></p></section><script src="assets/web/assets/jquery/jquery.min.js"></script>  <script src="assets/popper/popper.min.js"></script>  <script src="assets/tether/tether.min.js"></script>  <script src="assets/bootstrap/js/bootstrap.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>  <script src="assets/dropdown/js/nav-dropdown.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
  <input name="animation" type="hidden">
  </body>
</html>
<?php }?>