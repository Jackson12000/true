<?php
$servername = "localhost"; 
$username = "admin"; 
$password = "bityear2@2024"; 
$dbname = "bityeartwo2024"; 

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select the database
$conn->select_db($dbname);

$sql = "INSERT INTO role (userid,rolename)
VALUES ('$_POST[user]', '$_POST[role]')";

if ($conn->query($sql) === TRUE) {
    echo "data inserted  successfully<br>";
} else {
    echo "Error inserting  data: " . $conn->error;
}

// Close connection
$conn->close();
?>
