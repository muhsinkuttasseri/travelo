<?php
include("db.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
 $username=mysqli_real_escape_string($con,$_POST['emailUname']);
 $password=mysqli_real_escape_string($con,$_POST['pwd']);
 $result = mysqli_query($con,"SELECT * FROM user");
 $c_rows = mysqli_num_rows($result);
 if ($c_rows!=$username) {
  header("location: index.php?remark_login=failed");
 }
 $sql="SELECT id FROM user WHERE uname='$username' and pwd='$password'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
 $active=$row['active'];
 $count=mysqli_num_rows($result);
 if($count==1) {
  $_SESSION['login_user']=$username;
  header("location: http://localhost/travelo/LoginAndSignupSystem-master/index.php");
 }
}
?>