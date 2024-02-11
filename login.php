<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "test";
  $email=$_POST['email'];
  $password=$_POST['password'];

  $conn = new mysqli("localhost","root","","test");
  if($conn->connect_error){
    die("failed to connect:".$conn->connect_error);
  }
  else{
    $stmt = $conn->prepare("select * FROM registration WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0)
    {
        $data=$stmt_result->fetch_assoc();
        if($data['password']=== $password){
          include 'main.html';
        }
        else{
            include 'login.html';
            echo "<script>alert('invalid password');</script>";
        }
    }
  }


?>