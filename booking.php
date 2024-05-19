<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	
    $add_feature = $_POST['add_feature'];
    $address = $_POST['address'];
    $place = $_POST['place'];
    $package = $_POST['package'];
    $number = $_POST['number'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into booking(name, email, add_feature,address,place,package, number) values(?, ?, ?, ?, ?,  ?, ?)");
		$stmt->bind_param("ssssssi", $name, $email, $add_feature, $address,$place,  $package, $number);
		$execval = $stmt->execute();
		//echo $execval;
		include 'sucess_1.html' ;
		$stmt->close();
		$conn->close();
		
	}
?>