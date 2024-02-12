<?php 
$email = $username = $password = "";
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS="";
$DB_USER = "myappdb";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = sanitize_input(email_filter($_POST["email"]));
  $password = sanitize_input($_POST["password"]);
  $username = sanitize_input($_POST["username"]);
  $conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
  $sql="INSERT INTO accounts".
  "(username, email, password)".
  "VALUES"."('$username','$email','$password')";
  if ($conn->query($sql) === TRUE) {
    echo "Database updated successfully";
  } else {
    echo "Error updating database";
  }
  $conn->close();
}
 

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function email_filter($data) {
  if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }
  return $data;
}
?>