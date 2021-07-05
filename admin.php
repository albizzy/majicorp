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
        <li><a href="admin.php" class="active">
          <span class="icon"><i class="fas fa-users-cog"></i></span>
          <span class="title">Customers</span></a></li>
        <li><a href="billing.php">
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
        <!--Menu to select Action-->
        <h3>Action</h3>
        
        <ul>
            <li class="mylist" id="deposit">View Customers</li>
            <li class="mylist" id="draw">Add Customer</li>
            <li class="mylist" id="details">Delete Customer</li>
        </ul>
        
    
    </div>
    <script> ///This Script Displays the selected Content
document.getElementById("deposit").addEventListener("click", show);

function show() {
  document.getElementById("depo").style.display = "none";
  document.getElementById("withdraw").style.display = "none";
  document.getElementById("info").style.display = "block";
}
</script>
    <!-- Deposit Form-->
    <div class="item" id="depo">
    <h3>Delete Customer</h3>

    <form method="post" action="admin.php"> 
     
        <label for="fname">Meter Number</label><br>
        <input type="number" id="fname" name="meter" required><br>
        
        
        <button class="button button2" type="submit">Delete</button> 
    </form>
        <?php 
            
            $meter = $_POST['meter'];
            if(isset($meter)){

                $sql = "DELETE FROM customers WHERE meter_no = '$meter'";
                $result = mysqli_query($db,$sql);
                if($result){
                    $message = "Customer Deleted Successfully!";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }

            }
        ?>
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
    <h3>Add New Customer</h3>

    <form method="post" action="admin.php"> 
     
        <label for="fname">First Name</label><br>
        <input type="text" id="fname" name="fname" required><br>

        <label for="lname">Last Name</label><br>
        <input type="text" id="lname" name="lname" required><br>

        <label for="meter">Meter Number</label><br>
        <input type="number" id="lname" name="meterno" required><br>
        
        <button class="button button2">Register</button> 
    </form>

    <?php 

        


        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $meterno = $_POST['meterno'];
        $timestamp = date("Y-m-d H:i:s");

        $sql = "SELECT fname, meter_no FROM customers";
        $check = mysqli_query($db, $sql);
        $result = mysqli_fetch_assoc($check);

        if($result == 1){
            $message = "Customer Already Registered";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else{

        if(isset($fname, $lname, $meterno)){
        $sql = "INSERT INTO customers (fname, lname, meter_no, reg_date) VALUES ('$fname','$lname','$meterno','$timestamp')";
        $result = mysqli_query($db,$sql);
        if($result){
            $message = "Customer Registered Successfully!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
}
    ?>
    </div>

    <script> ///This Script Displays the selected Content
        document.getElementById("details").addEventListener("click", show);

        function show() {
        document.getElementById("info").style.display = "none";
        document.getElementById("depo").style.display = "block";
        document.getElementById("withdraw").style.display = "none";
}
</script>
    <div class="item" id="info">
      
      <?php
      //Retrieving data from table bill logs ... all billing records shown here
        
                $sql = 'SELECT * FROM customers';
                
                $result = mysqli_query($db,$sql);

                if(mysqli_num_rows($result)>0){
                    echo "<table><tr><th colspan=6>Registered Customers</th></tr><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Meter Number</th><th>Registration Date</th></tr>";
                    while($row = mysqli_fetch_assoc($result)){
                        
                        echo "<tr>
                        <td>".$row["ID"]."</td>
                        <td>".$row["fname"]."</td> 
                        <td>".$row["lname"]."</td> 
                        <td>".$row["meter_no"]."</td> 
                        <td>".$row["reg_date"]."</td> </tr>";
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