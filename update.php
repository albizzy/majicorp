<?php 
    require "includes/config.php";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // this code updates user account data
    $sql = "UPDATE users SET fname = '$fname', lname = '$lname', phone = '$phone', email = '$email', password = '$password' WHERE ID = 1";
    $result = mysqli_query($db,$sql);

    if($result){
        echo '<script>alert("Data Updated Successfully")</script>';
        header("location: account.php");
    } else{
        echo '<script>alert("Failed To Update Data")</script>';
        header("location: account.php");
    }
?>