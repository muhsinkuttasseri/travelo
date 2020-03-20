<?php
include("db.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
 $username=mysqli_real_escape_string($con,$_POST['emailUname']);
 $password=mysqli_real_escape_string($con,$_POST['pwd']);
 $result = mysqli_query($con,"SELECT * FROM travelo_admin");
 $c_rows = mysqli_num_rows($result);
 if ($c_rows!=$username) {
  header("location: index.php?remark_login=failed");
 }
 $sql="SELECT id FROM travelo_admin WHERE uname='$username' and pwd='$password'";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
 $active=$row['active'];
 $count=mysqli_num_rows($result);
 if($count==1) {
  $_SESSION['login_admin']=$username;
  setcookie('login_admin', $username, time() + (86400 * 30), "");
  header("location:http://localhost/travelo");
 }
}
?>