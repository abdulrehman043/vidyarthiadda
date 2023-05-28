<?php
$servername = "localhost";
$username = "root";
$password = "Shivam@009";

// Connection
$conn = new mysqli(
  $servername,
  $username,
  $password,
  "vidyarthiadda_db"
);

// For checking if connection is
// successful or not
if ($conn->connect_error) {
  die("Connection failed: "
    . $conn->connect_error);
}
