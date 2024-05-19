<?php
	$Name = $_POST['Name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into revive(Name,email,message) values(?, ?, ?)");
		$stmt->bind_param("sss", $Name, $email, $message);
		$execval = $stmt->execute();
		

        echo '<script>alert("Sucefully Message is sent")</script>';
		echo '<center><button id="go-back">Go back!</button></center>
		<style>
		#go-back{
			margin: 50px;
		}
		</style>
		    
		<script>	
			document.getElementById("go-back").addEventListener("click", () => {
		 	history.back();
		    });
		</script>';

		$stmt->close();
		$conn->close();
	}
?>