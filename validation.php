<?php 
    session_start();

    $con = mysqli_connect('localhost','root',"");

    mysqli_select_db($con,'registration');

    $name = $_POST['createUser'];
    $pass = $_POST['createPass'];
    $email = $_POST['createEmail'];

    $s = " select * from userregisters where regUser = '$name' && regPass = '$pass'";

    $result = mysqli_query($con,$s);
    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['username'] = $name;
       header('location:homepage.php?login=succesfully');

    }
    else{
    //    header('location:index.php?login=failed');
    echo "<script type='text/javascript'> 
    alert('Login failed'); window.location='index.php?login=failed' </script>";
    }

?>