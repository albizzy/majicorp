<?php
    require "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bill Management</title>
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
    </style>
</head>
<body>
        <!--Body Starts Here-->
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
        <li><a href="welcome" class="active">
          <span class="icon"><i class="fas fa-receipt"></i></span>
          <span class="title">Manage Bills</span></a></li>
        <li><a href="billpayment.php">
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
      <h3>Logs</h3><br>
      <?php
      //Retrieving data from table bill logs ... all billing records shown here
        
                $sql = 'SELECT * FROM bill_logs';
                
                $result = mysqli_query($db,$sql);

                if(mysqli_num_rows($result)>0){
                    echo "<table><tr><th colspan=6>Billing Records</th></tr><tr><th>ID</th><th>Paid By</th><th>Amount</th><th>Reference Number</th><th>Date Paid</th></tr>";
                    while($row = mysqli_fetch_assoc($result)){
                        
                        echo "<tr>
                        <td>".$row["ID"]."</td>
                        <td>".$row["Payer"]."</td> 
                        <td>".$row["Amount"]."</td> 
                        <td>".$row["Ref_No"]."</td> 
                        <td>".$row["Date_Paid"]."</td> </tr>";
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
	
</!->
</html>