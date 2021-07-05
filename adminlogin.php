<?php 
    require "includes/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title> Admin Login</title>
    <meta charset="UTF-8">
	
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
body{
	margin: 0 auto;
	background-image: url("img/4.jpg");
	background-repeat: no-repeat;
	background-size: 100% 720px;
}

.container{
	width: 500px;
	height: 450px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(20, 20, 20,0.7);
	margin-top: 160px;
}

.container img{
	width: 150px;
	height: 150px;
	margin-top: -60px;
}

input{
    width: 40%;
        padding: 5px 10px;
        margin: 3px 0;
        box-sizing: border-box;
        border: none;
        border-bottom: 1px solid #4895ef;
        background-color: rgba(20, 20, 20, 0.1);
        color:  white;
        }

.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
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
            background-color: rgba(20, 20, 20, 0.1); 
            color: #4895ef; 
            border: 1px solid #4895ef;
        }

        .button2:hover {
            background-color: #4895ef;
            color: white;
        }
        #edit{
            color: #4895ef;
        }
        #homeboi{
            margin-left: 60px;
        }

    </style>
</head>
<body>
	<div class="container">
        <br><br><br>
	<img src="img/icon.png"/>
    <form action="adminlogin.php" method="post" > 
    
    <label for="fname" id="edit">Username</label><br>
    <input type="text" id="username" name="username" required><br>

    <label for="lname" id="edit">Password</label><br>
    <input type="password" id="password" name="password" required><br>

    

    <button class="button button2">Login</button> <a href="index.php"><div class="button button2" id="homeboi">Home</div> </a>
    <p style="color: red;" id="msg"></p>
</form>

	</div>

    <?php 
        if(isset($_POST['username'])){
    
            $uname=$_POST['username'];
            $password=$_POST['password'];
            
            $sql= "SELECT * FROM officials WHERE username = '$uname' AND passcode = '$password'";
            
            $result=mysqli_query($db,$sql);
            
            if(mysqli_num_rows($result)==1){
                header("location: admin.php");
            }
            else{
                //$message = "You Have Entered Incorrect Password or Username";
                echo "<script type='text/javascript'>document.getElementById('msg').innerHTML = 'You Have Entered Incorrect Password or Username';</script>";
                exit();
            }
                
        }
    ?>
</body>
</html>
