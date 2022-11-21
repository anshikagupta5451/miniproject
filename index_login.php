<?php
$conn = new mysqli('localhost', 'root', '', 'ecommerce');
if($conn->connect_error){
    echo "Error in connection";
    die;
}
$email = $_POST['email'];
$pass = $_POST['password'];
$res = "select * from admin where email = '$email' and password = '$pass' limit 1";
$res2 = mysqli_query($conn, $res);
$count = mysqli_num_rows($res2);
if($count == 0){
    echo '<script>alert("Invalid username or password")</script>';
    exit();
}
else{
    $row=mysqli_fetch_assoc($res2);
    session_start();
    $_SESSION['client_id']=$row['id'];
    $_SESSION['client_name']=$row['fname'];
    header('location:A_Index.php');
}
?>