<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Search Website</title>
</head>
<body><center>
<table border="1">
    <tr>
    <th>ID</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Username</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Password</th>
        <th>Credation_Date</th>
        <th>activation_Code</th>
        <th>Is_activated</th>
    </tr>
<?php

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["query"])) {

    $search_query = $_GET["query"];
$servername = "localhost"; 
$username = "admin"; 
$password = "bityear2@2024"; 
$dbname = "bityeartwo2024"; 

  
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "SELECT * FROM user WHERE username LIKE '%$search_query%'";

   
    $result = $conn->query($sql);

   
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p><strong>welcome:</strong> " . $row["username"] . "</p>";
            echo "<hr>";
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["firstname"]."</td>";
            echo "<td>".$row["lastname"]."</td>";
            echo "<td>".$row["username"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["telephone"]."</td>";
             echo "<td>".$row["password"]."</td>";
             echo "<td>".$row["creationdate"]."</td>";
             echo "<td>".$row["activation_code"]."</td>";
             echo "<td>".$row["is_activated"]."</td>";
            echo "</tr>";
           
        }
    } else {
        echo "No results found.";
    }

    // Close connection
    $conn->close();
}
?>
</table></center>/<br>
<center><button style="width: 100px;height: 40px; background-color: violet; color: white;"><a href="home page.html">back</a></button></center>
</body>
</html>
