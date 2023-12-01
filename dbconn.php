<?php
$servername = "localhost";
$username = "root";
$password = "";

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
