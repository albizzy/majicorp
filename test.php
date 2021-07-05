<?php
require "includes/config.php";
session_start();
if(isset($_POST['login'])){
    
    $majimeter = $_POST['majimeter'];
    $majipass = $_POST['majipass'];
    //$username = $_SESSION['majimeter'];

    $sql="SELECT maji_id FROM maji_users WHERE maji_meter = '$majimeter' AND maji_pass = '$majipass'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
      
    $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         //$_SESSION['user'] = $majimeter;
         
         header("location: welcome.php");
      }else {
         echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
      }
   }

  
?>