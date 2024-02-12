<?php 
session_start();
$server = "localhost";
$user = "root";
$pass="";
$dbname = "myappdb";
$conn = new mysqli($server, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = "";
$password = "";
if ( !isset($_POST['email'], $_POST['password']) ) {
  // Exit if any forms are empty
  exit('Please ensure you fill out all fields!');
}

if ($stmt = $conn->prepare('SELECT id, username, password FROM accounts where email = ?')) {
  $stmt->bind_param('s', $_POST['email']);
  $stmt->execute();
  $stmt->store_result();
  if ($stmt-> num_rows > 0) {
    $stmt->bind_result($id, $username, $password);
    $stmt->fetch();

    if (password_verify($_POST['password'], $password)) {
      session_regenerate_id();
      $_SESSION['loggedin'] = TRUE;
      $_SESSION['name'] = $username;
      $_SESSION['id'] = $id;
      echo 'Welcome ' . $_SESSION['name'] . '!';
    } else {
      echo 'Incorrect email &or password';
    } 
  } else {
    echo 'Incorrect email &or password';
  }
  $stmt->close();
};

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



$conn->close();



?>