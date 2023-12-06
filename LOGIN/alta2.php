<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$name=$_POST["name"];
$surname=$_POST["surname"];
$email=$_POST["email"];
$username=$_POST["surname"];
$password=$_POST["password"];


$sql = "INSERT INTO Usuaris(name, surname, email, username, password)
VALUES('$name', '$surname', '$email', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

