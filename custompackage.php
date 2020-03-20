<?php
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'travelo');
if(!$conn){
	echo "Connection Failed...";
}

function checkIfSet($attr) {
	if (isset($_POST[$attr])) {
		if ($_POST[$attr] == 'on') {
			return 1;
		}

		return 0;
	} else {
		return 0;
	}

	return 1;
}

if (isset($_POST['first_name'])) {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$passport_no = $_POST['passport_no'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$destination = $_POST['destination'];
	$travel_type = $_POST['travel_type'];
	$country = $_POST['country'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$language = $_POST['language'];
	$visa = checkIfSet("visa");
	$tickets = checkIfSet("tickets");
	$treatment = checkIfSet("treatment");
	$taxi = checkIfSet("taxi");
	$hotel = checkIfSet("hotel");
	$guid = checkIfSet("guid");
        


	$sql="INSERT INTO custom_package VALUES('$first_name','$last_name','$passport_no','$email','$address',
	'$destination','$travel_type','$country','$phone','$message','$language','$visa',
	'$tickets','$treatment','$taxi','$hotel','$guid');";

	$result = mysqli_query($conn,$sql);

	if($result){
		echo "Register Successfull....";

		header('location:http://localhost');
	}
	else {
		echo "Failed";
	}

}
?>



