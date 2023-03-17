<?php

session_start();

$conn = mysqli_connect('127.0.0.1:3307','root','','userregistration');

mysqli_select_db($conn, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from usertable where name='$name' && password= '$pass' ";

$result =mysqli_query($conn, $s);

$num=mysqli_num_rows($result);

if($num==1){
    
    header("location:home.php");
}else{
        header("location:login.php");
          }

?>
