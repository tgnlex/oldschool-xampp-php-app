<?php 
$email = "";
$password = "";
$i = 1;
$field = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = email_filter(sanitize_input($_POST["email"]));
  $password = sanitize_input($_POST["password"]);  
  $submission = [$email, $password];
}



function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function email_filter($email) {
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }
  return $email;
}
?>