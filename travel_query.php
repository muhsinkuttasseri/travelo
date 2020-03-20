<?php
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'travelo');
if(!$conn){
	echo "Connection Failed...";
}

if (isset($_POST['place'])) {
	/*$variable name=post[form feild name] */
	$place = $_POST['place'];
	$date = date("Y-m-d H:i:s", strtotime($_POST['datepicker']));
	$phone = $_POST['phone'];

	//insert into table name(feild name)valus(variable name)//
	$sql="INSERT INTO travel_query VALUES('$place','$date','$phone');";
	$result = mysqli_query($conn,$sql);
	if($result){
        echo "Register Successfull....";
        header("HTTP/1.1 200 OK");
	}
	else {
		echo "Failed";
	}

}
?>



