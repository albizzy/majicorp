<?php
    require "includes/config.php";
    error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Customers Admin</title>
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
        <li><a href="admin.php" >
          <span class="icon"><i class="fas fa-users-cog"></i></span>
          <span class="title">Customers</span></a></li>
        <li><a href="billing.php" class="active">
          <span class="icon"><i class="fas fa-funnel-dollar"></i></span>
          <span class="title">Billing</span>
          </a></li>
        <li><a href="#">
          <span class="icon"><i class="fas fa-search-location"></i></span>
          <span class="title">Meters</span>
          </a></li>
        
        <li><a href="adminlogin.php">
          <span class="icon"><i class="fas fa-door-open"></i></span>
          <span class="title">Logout</span>
          </a></li>
    </ul>
  </div>
  
  <div class="main_container">
  <div class="item">
      <h3>Bill Records</h3><br>
      <?php
      //Retrieving data from table bill logs ... all billing records shown here
        
                $sql = 'SELECT * FROM logs';
                
                $result = mysqli_query($db,$sql);

                if(mysqli_num_rows($result)>0){
                    echo "<table><tr><th colspan=6>Bill Logs</th></tr><tr><th>ID</th><th>Customer Name</th><th>Meter Number</th><th>Amount</th><th>Reference Number</th><th>Date Paid</th></tr>";
                    while($row = mysqli_fetch_assoc($result)){
                        
                        echo "<tr>
                        <td>".$row["ID"]."</td>
                        <td>".$row["customer"]."</td> 
                        <td>".$row["meter_no"]."</td> 
                        <td>".$row["amount"]."</td> 
                        <td>".$row["ref_no"]."</td> 
                        <td>".$row["date_paid"]."</td> </tr>";
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
	

</html>