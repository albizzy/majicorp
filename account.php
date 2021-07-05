<?php
    require "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Account</title>
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
        .mylist{
            list-style-type: circle;
            list-style-position: inside;
            cursor: pointer;
        }
        .mylist:hover{
            color: #4895ef;
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
        input{
            width: 40%;
            padding: 5px 10px;
            margin: 3px 0;
            box-sizing: border-box;
            border: none;
            border-bottom: 1px solid #4895ef;
        }
        #depo{
            display: none;
        }
        #withdraw{
            display: none;
        }
        #info{
            display: none;
        }
        #edit{
            color: #4895ef;
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
       <!--SIDE NAVIGATION-->         
  <div class="sidebar">
      <ul>
        <li><a href="welcome.php" >
          <span class="icon"><i class="fas fa-receipt"></i></span>
          <span class="title">Manage Bills</span></a></li>
        <li><a href="billpayment.php">
          <span class="icon"><i class="fas fa-money-check"></i></span>
          <span class="title">Bill Payment</span>
          </a></li>
        <li><a href="wallet.php" >
          <span class="icon"><i class="fas fa-wallet"></i></span>
          <span class="title">Wallet</span>
          </a></li>
        <li><a href="account.php" class="active" >
          <span class="icon"><i class="fas fa-user"></i></span>
          <span class="title">My Account</span>
          </a></li>
        <li><a href="index.php">
          <span class="icon"><i class="fas fa-home"></i></span>
          <span class="title">Home</span>
          </a></li>
    </ul>
  </div>

  <?php  //This code GETS Metre number as Account Number
     $sql = "SELECT * FROM maji_users WHERE maji_id = 1";
     foreach (mysqli_query($db,$sql) as $row) {
         $acc = $row['maji_meter']; //set meter number as account number
     }
  ?>
  <div class="main_container">
    <div class="item">
      <h3>Account Number: <?php echo " ".$acc?> </h3><br>
    
    </div> 
    <!--Menu for Action Selection-->
    <div class="item">
        <h3>Menu</h3>
        
        <ul>
            <li class="mylist" id="deposit">View Profile</li>
            <li class="mylist" id="draw">Edit Profile</li>
            
        </ul>
        
    
    </div>
    <script>  ///This Script Adds Event Listener For Displaying the required Data
document.getElementById("deposit").addEventListener("click", show);

function show() {
  document.getElementById("depo").style.display = "block";
  document.getElementById("withdraw").style.display = "none";
  document.getElementById("info").style.display = "none";
}
</script>
    <!-- Deposit Form-->
    <div class="item" id="depo">
    

    <?php //This code initializes The customer Details from Database for Displaying Profile
      //Retrieving data from table bill logs ... all billing records shown here
        //require "includes/config.php";
                $sql = 'SELECT * FROM users WHERE ID = 1';

                foreach (mysqli_query($db,$sql) as $row) {
                $fname = $row['fname'];
                $lname = $row['lname'];
                $phone = $row['phone'];
                $email = $row['email'];
                } 
                
            ?> <!--Display The Profile-->
            <h3>Profile</h3><br>
            <img src="img/user.png"><br>
            First Name: <?php echo $fname ?><br>
            Last Name: <?php echo $lname ?><br>
            Phone Number: <?php echo $phone ?><br>
            Email: <?php echo $email ?><br>
    </div>
    <script> ///This script also Adds Event Listener for Displaying the clicked Data
        document.getElementById("draw").addEventListener("click", show);

        function show() {
        document.getElementById("withdraw").style.display = "block";
        document.getElementById("depo").style.display = "none";
        document.getElementById("info").style.display = "none";
}
</script>
    <!-- Form to update user data-->
    <div class="item" id="withdraw">
    <h3>Edit Profile</h3>

    <form action="update.php" method="post" > 
    
        <label for="fname" id="edit">First Name</label><br>
        <input type="text" id="fname" name="fname" value="<?php echo $fname?>" required><br>

        <label for="lname" id="edit">Last Name</label><br>
        <input type="text" id="lname" name="lname" value="<?php echo $lname?>" required><br>

        <label for="phone" id="edit">Phone Number</label><br>
        <input type="number" id="lname" name="phone" value="<?php echo $phone?>" required><br>

        <label for="email" id="edit">Email</label><br>
        <input type="text" id="lname" name="email" value="<?php echo $email?>"><br>

        <button class="button button2">Update</button>  
    </form>
    </div>

    <script> ///This script also Adds Event Listener for Displaying the clicked Data
        document.getElementById("details").addEventListener("click", show);

        function show() {
        document.getElementById("info").style.display = "block";
        document.getElementById("depo").style.display = "none";
        document.getElementById("withdraw").style.display = "none";
}
</script>
    
    
    
  </div>
</div>
	
</body>
</html>