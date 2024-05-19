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
            <th>Name</th>
            <th>Email</th>
            <th>Add Features</th>
            <th>Address</th>
            <th>Place</th>
            <th>Packages</th>
            <th>Number</th>
        </tr>

        <?php
        $conn = new mysqli('localhost','root','','test');
        if($conn-> connect_error){
            die("Connection Faild ".$conn-> connect_error);
        }
        $sql="SELECT name ,email,add_feature, address,place,package,number from booking ";
        $result = $conn-> query($sql);

        if($result-> num_rows >0 ){
            while($row = $result-> fetch_assoc ()){
                echo "<tr>
                    <td>".$row["name"]."</td>  
                    <td>".$row["email"]."</td> 
                    <td>".$row["add_feature"]."</td>
                    <td>".$row["address"]."</td>  
                    <td>".$row["place"]."</td> 
                    <td>".$row["package"]."</td>
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