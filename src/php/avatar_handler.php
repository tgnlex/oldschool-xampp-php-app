<?php
$target_dir = "../files/avatars/";

$target_file = $target_dir . basename($_FILES["new_avatar"]["name"]);
$upload_success = 1;

if (isset($_POST["submit"])) {
  $validate_avatar = getimagesize($_FILES["new_avatar"]["tmp_name"]);
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG andNGs are allowed files are allowed.";
    $uploadOk = 0;
  } else {  
    if($validate_avatar !== false) {
	  
		// SUCCESS CODE GOES HERE //

	  echo "Image detected - " . $validate_avatar["mime"] . ".";
	  echo "Uploading Avatar...";
	  $uploadOk = 1;

		  // END OF SUCCESS CODE //

	} else {
	  echo "Error: Please select a valid image file.";
  	  $uploadOk = 0; 
	};
  };
};
if ($uploadOk == 0) {
	echo "Sorry your file was not uploaded. 
		  Please ensure you are using a 
		  valid Image file.";
} else {
  if (move_uploaded_file($_FILES["new_avatar"]["tmp_name"], $target_file)) {
		echo "The file ". htmlspecialchars( basename( $_FILES["new_avatar"]["name"])). " has been uploaded";
  } else {
		echo "Sorry, an error ocurred while trying to upload your avatar.";
	};
};
?>