<?php
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'travelo');
if(!$conn){
	echo "Connection Failed...";
}

if (isset($_POST['btn_reg'])) {
	$name = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	// $course = implode(', ', $_POST['txtcrs']);
	$uname = $_POST['uname'];
	$dob = $_POST['dob'];
	$pass = $_POST['pwd'];

	$sql="INSERT INTO travelo_admin(fname,lname,email,uname,dob,pwd) VALUES('$name','$lname','$email','$uname','$dob','$pass')";
	$result = mysqli_query($conn,$sql);
	if($result){
		echo "Register Successfull....";
		header('location:http://localhost/admin/html/adminsignup.html');
	}
	else {
		echo "Failed";
	}

}
?>



