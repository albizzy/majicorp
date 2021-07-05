<?php
require "includes/config.php";
session_start();
echo $_SESSION['majimeter'];
if(!isset($_SESSION['majimeter'])){
    echo "Hakuna";
   }
   else{
     echo "Ipo";
}
?>