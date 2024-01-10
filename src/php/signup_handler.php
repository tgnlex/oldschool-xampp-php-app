<?php 
$username ="";
$email = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = email_filter(sanitize_input($_POST["email"]));
  $password = sanitize_input($_POST["password"]);
  $username = sanitize_input($_POST["username"]);
}

function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function email_filter($data) {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }
  return $data;
}
?>