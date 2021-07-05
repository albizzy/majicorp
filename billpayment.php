<?php
    require "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bill Payment</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			   $(".wrapper").toggleClass("collapse");
			});
		});
	</script>

    <style type="text/css">
        table{
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td,th{
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){
            background-color: #dddddd;
        }
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .button2 {
            background-color: white; 
            color: black; 
            border: 1px solid #4895ef;
        }

        .button2:hover {
            background-color: #4895ef;
            color: white;
        }
        

        #invoice{
            border: 1px solid #4895ef;
            border-radius: 8px;
            width: 300px;
            display: none;
        }
        input{
            width: 40%;
            padding: 5px 10px;
            margin: 3px 0;
            box-sizing: border-box;
            border: none;
            border-bottom: 1px solid #4895ef;
        }
        #form1{
            display: none;
        }
    </style>
</head>
<body>
        <!--BODY STARTS HERE-->
<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="one"></div>
       <div class="two"></div>
       <div class="three"></div>
    </div>
    <div class="top_menu">
      <div class="logo"><img src="img/icon.png" height="80px" width="80px"></div>
      <ul>
        <li><a href="#">
          <i class="fas fa-search"></i></a></li>
        <li><a href="#">
          <i class="fas fa-bell"></i>
          </a></li>
        <li><a href="#">
          <i class="fas fa-user"></i>
          </a></li>
      </ul>
    </div>
  </div>
        <!--SIDE BAR HERE-->
  <div class="sidebar">
      <ul>
        <li><a href="welcome.php" >
          <span class="icon"><i class="fas fa-receipt"></i></span>
          <span class="title">Manage Bills</span></a></li>
        <li><a href="billpayment.php" class="active">
          <span class="icon"><i class="fas fa-money-check"></i></span>
          <span class="title">Bill Payment</span>
          </a></li>
        <li><a href="wallet.php">
          <span class="icon"><i class="fas fa-wallet"></i></span>
          <span class="title">Wallet</span>
          </a></li>
        <li><a href="account.php" >
          <span class="icon"><i class="fas fa-user"></i></span>
          <span class="title">My Account</span>
          </a></li>
        <li><a href="index.php">
          <span class="icon"><i class="fas fa-home"></i></span>
          <span class="title">Home</span>
          </a></li>
    </ul>
                
  </div>
  
  <div class="main_container">
    <div class="item">
    <button class="button button2" id="mybtn">Create Invoice</button>
    

<script> ///This script also Adds Event Listener for Displaying the clicked Data
document.getElementById("mybtn").addEventListener("click", show);

function show() {
  document.getElementById("invoice").style.display = "block";
  document.getElementById("mybtn").style.display = "none";
}
</script>
    <!--Form pops up when user clicks create invoice-->
    <?php $refnum = time() . rand(10*45, 100*98);

        $sql = "SELECT * FROM units WHERE meterNo = 54321";
        foreach (mysqli_query($db,$sql) as $row) {
            $units = $row['units'];
        }
        $balance = $units * 150;
    ?>
    <div id="invoice">
        <img src="img/icon.png" height="80px" width="80px"><br>
        Units Used: <?php echo $units ?>
        <br>Balance: <?php echo $balance ?>
        <br>Reference Number: <?php echo $refnum?>
        <button class="button button2" id="mybtn2">Pay</button>
    </div>
    <script>
        document.getElementById("mybtn2").addEventListener("click", show2);

        function show2() {
            document.getElementById("form1").style.display = "block";
            document.getElementById("invoice").style.display = "none";
}
</script>
    
        <!--Form to Pay For Bill Invoice-->
    <div id="form1">
    <form method="post" action="#"> 
     
        <label for="fname">Name</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="lname">Amount</label><br>
        <input type="number" id="lname" name="lname"><br>
        <label for="lname">Ref. No</label><br>
        <input type="number" id="rfnum" name="rfnum"><br>
        <button class="button button2">Pay via Mobile Networks</button> <button class="button button2">Pay via PayPal</button>
    </form>
    </div>



    </div>
                
  </div>
</div>
	
</body>
</html>

