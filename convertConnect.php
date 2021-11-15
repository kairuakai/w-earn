<?php 
    session_start();

    $con = mysqli_connect('localhost','root',"");

    mysqli_select_db($con,'registration');
    $money = $_POST['money'];
    $user = $_POST['user'];
    
    $s = " INSERT INTO pointsinfo (username, points) VALUES ('$user', '$money');";

    $result = mysqli_query($con,$s);

    // header("Location: homepage.php?money=send successfully");

    echo "<script type='text/javascript'> 
    alert('Money send successfully'); window.location='homepage.php?money=send successfully' </script>";
