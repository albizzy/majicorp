<?php
    require "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Wallet</title>
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
        <li><a href="billpayment.php">
          <span class="icon"><i class="fas fa-money-check"></i></span>
          <span class="title">Bill Payment</span>
          </a></li>
        <li><a href="wallet.php" class="active">
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

  <?php  //This code initializes Account Number from Meter Number in Database
     $sql = "SELECT * FROM maji_users WHERE maji_id = 1";
     foreach (mysqli_query($db,$sql) as $row) {
         $acc = $row['maji_meter'];
     }
  ?>
  <div class="main_container">
    <div class="item">
      <h3>Account Number: <?php echo " ".$acc?> </h3><br>
    
    </div>
    <div class="item">
        <!--Menu to select Action-->
        <h3>Menu</h3>
        
        <ul>
            <li class="mylist" id="deposit">Deposit to Wallet</li>
            <li class="mylist" id="draw">Draw From Wallet</li>
            <li class="mylist" id="details">Wallet Details</li>
        </ul>
        
    
    </div>
    <script> ///This Script Displays the selected Content
document.getElementById("deposit").addEventListener("click", show);

function show() {
  document.getElementById("depo").style.display = "block";
  document.getElementById("withdraw").style.display = "none";
  document.getElementById("info").style.display = "none";
}
</script>
    <!-- Deposit Form-->
    <div class="item" id="depo">
    <h3>Deposit</h3>

    <form method="post" action="#"> 
     
        <label for="fname">Amount</label><br>
        <input type="number" id="fname" name="fname"><br>
        <label for="lname">Description(Optional)</label><br>
        <input type="text" id="lname" name="lname"><br>
        
        <button class="button button2">Deposit via Mobile</button> <button class="button button2">Deposit via PayPal</button>
    </form>
    </div>
    <script> ///This Script Displays the selected Content
        document.getElementById("draw").addEventListener("click", show);

        function show() {
        document.getElementById("withdraw").style.display = "block";
        document.getElementById("depo").style.display = "none";
        document.getElementById("info").style.display = "none";
}
</script>
    <!-- Withdraw Form-->
    <div class="item" id="withdraw">
    <h3>Cash Out</h3>

    <form method="post" action="#"> 
     
        <label for="fname">Amount</label><br>
        <input type="number" id="fname" name="fname"><br>
        <label for="lname">Description(Optional)</label><br>
        <input type="text" id="lname" name="lname"><br>
        
        <button class="button button2">Deposit to Mobile</button> <button class="button button2">Deposit to PayPal</button>
    </form>
    </div>

    <script> ///This Script Displays the selected Content
        document.getElementById("details").addEventListener("click", show);

        function show() {
        document.getElementById("info").style.display = "block";
        document.getElementById("depo").style.display = "none";
        document.getElementById("withdraw").style.display = "none";
}
</script>
    
    <div class="item" id="info">
      <h3>My Wallet</h3><br>
      <?php ///Information About Users Wallet

      //Retrieving data from table wallets ... all wallet records shown here
        
                $sql = 'SELECT * FROM wallets';
               
                $result = mysqli_query($db,$sql);

                if(mysqli_num_rows($result)>0){
                    echo "<table><tr><th colspan=6>Wallet Details</th></tr><tr><th>ID</th><th>Acc. Number</th><th>Balance</th><th>Date Created</th></tr>";
                    while($row = mysqli_fetch_assoc($result)){
                        // print_r($row);exit;
                        echo "<tr>
                        <td>".$row["ID"]."</td>
                        <td>".$row["acc_number"]."</td> 
                        <td>".$row["balance"]."</td> 
                        
                        <td>".$row["date_created"]."</td> </tr>";
                    }
                    echo "</table>";
                } else{
                    echo "0 results";
                }
                 mysqli_close($db);   
                
            ?>




    </div>
    
  </div>
</div>
	
</body>
</html>