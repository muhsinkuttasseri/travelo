<?php
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'travelo');
if(!$conn){
	echo "Connection Failed...";
}

if (isset($_POST['contact'])) {
	/*$variable name=post[form feild name] */
	$msg = $_POST['message'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	// $course = implode(', ', $_POST['txtcrs']);
	$sub = $_POST['subject'];
	//insert into table name(feild name)valus(variable name)//
	$sql="INSERT INTO contact(message,name,email,subject) VALUES('$msg','$name','$email','$sub')";
	$result = mysqli_query($conn,$sql);
	if($result){
		echo "Register Successfull....";
		//form path//
		header('location:http://localhost/travelo/contact.html');
	}
	else {
		echo "Failed";
	}

}
?>



