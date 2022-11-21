<?php
    session_start();
    $conn = new mysqli('localhost', 'root', '', 'ecommerce');
    if(isset($_POST['creg']))
    {
    $fname = $_POST['first'];
    $lname = $_POST['last'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // echo "name is $fname $lname";
    // echo "Mobile $mobile";
    
    $cmd = "insert into reg(fname, lname, mobile, email, password) values('$fname','$lname', '$mobile', '$email', '$password')";
    $m = mysqli_query($conn, $cmd);
    if($m){
        header('location:http://localhost/miproject/login.html');
    }
    else{
        echo "<h2>Mobile/Mail Id is already Registered</h2>";
        echo "<a href='registration.html'>Try Again</a>";
    }
    }
?>