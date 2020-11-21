<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "test1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO test1 (fname, phone, email)
VALUES ('$fname', '$phone', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>