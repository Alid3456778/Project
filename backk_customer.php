<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            border:black 2px solid;
            font-family: monospace;
            width:100%;
            font-size: 20px;
            text-align: left;
        }
        th{
            background-color:blue;
            border:black 2px solid;
        }
        td{
            border:black 2px solid;
            width:50px;
        }
    </style> 
</head>
<body>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>number</th>
        </tr>

        <?php
        $conn = new mysqli('localhost','root','','test');
        if($conn-> connect_error){
            die("Connection Faild ".$conn-> connect_error);
        }
        $sql="SELECT firstname ,lastname,email,password,number from registration ";
        $result = $conn-> query($sql);

        if($result-> num_rows >0 ){
            while($row = $result-> fetch_assoc ()){
                echo "<tr>
                    <td>".$row["firstname"]."</td>  
                    <td>".$row["lastname"]."</td> 
                    <td>".$row["email"]."</td>
                    <td>".$row["password"]."</td>  
                    <td>".$row["number"]."</td> 
                </tr>";
            }
            echo"</table>";
        }
        else{
            echo'<script>alert("Zero Result Found")</script>';
        }
        $conn-> close();

        ?>

    </table>
</body>
</html>