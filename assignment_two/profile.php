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

$sql = "INSERT INTO profile (userid, Campus, College, school, Department,Level,GroupName,Regnumber)
VALUES ('$_POST[user]', '$_POST[campus]', '$_POST[college]', '$_POST[School]','$_POST[department]', '$_POST[level]','$_POST[group]','$_POST[regNumber]')";

if ($conn->query($sql) === TRUE) {
    echo "data inserted  successfully<br>";
    header("location:")
} else {
    echo "Error inserting  data: " . $conn->error;
}

// Close connection
$conn->close();
?>
