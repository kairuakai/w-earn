<?php 
    session_start();
    // header('location:index.php');

    $con = mysqli_connect('localhost','root',"");

    mysqli_select_db($con,'registration');

    $name = $_POST['createUser'];
    $pass = $_POST['createPass'];
    $email = $_POST['createEmail'];

    $s = " select * from userregisters where regUser = '$name'";

    $result = mysqli_query($con,$s);
    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "<script type='text/javascript'> 
        alert('Account Already Taken'); window.location='index.php' </script>";

    }
    else{
        $reg = " insert into userregisters(regUser, regPass, regEmail) values ('$name','$pass','$email')";

        mysqli_query($con,$reg);
        echo "<script type='text/javascript'> 
        alert('Registration Successfully'); window.location='index.php?register=successfully' </script>";
    }

?>