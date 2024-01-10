<?php
$target_dir = "../files/avatars/";

$target_file = $target_dir . basename($_FILES["new_avatar"]["name"]);
$upload_success = 1;

if (isset($_POST["submit"])) {
  $validate_avatar = getimagesize($_FILES["new_avatar"]["tmp_name"]);
  if($validate_avatar !== false) {
	echo "Image detected - " . $validate_avatar["mime"] . ".";
	echo "Uploading Avatar...";
	$upload_success = 1;
  } else {
	echo "Error: Please select a valid image file.";
  	return $upload_success = 0; 
  }
  
}
?>