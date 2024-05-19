<?php 
  
  $servername = "localhost"; 
  $username = "root"; 
  $password = ""; 
  $databasename = "test"; 
  
  // CREATE CONNECTION 
  $conn = mysqli_connect($servername,  
    $username, $password, $databasename); 
  
  // GET CONNECTION ERRORS 
  if (!$conn) { 
      die("Connection failed: " . mysqli_connect_error()); 
  } 
  
  // SQL QUERY 
  $query = "SELECT Roll_No, Name FROM Student Details;"; 
  // FETCHING DATA FROM DATABASE 
  $result = mysqli_query($conn, $query); 
  
  if (mysqli_num_rows($result) > 0) { 
      // OUTPUT DATA OF EACH ROW 
      while($row = mysqli_fetch_assoc($result)) { 
          echo "Roll No: " . $row["name"] 
          . " - Name: " . $row["email"]. "<br>"; 
      } 
  } else { 
      echo "0 results"; 
  } 
  
  $conn->close(); 
  
?>