<?php
  $target_dir = "../files/storage/";
  $target_file = $target_dir . basename($_FILES["uploaded_file"]["name"]);
  $upload_success = 1;

  if (isset($_POST["submit"])) {
  	if(file_exists($target_file)) {
  		echo "Sorry, file already exists.";
  	}
  }
  $


?>
