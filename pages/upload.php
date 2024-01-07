<!DOCTYPE html>
<html lang="en">
<head> 
  <title>Upload</title>
  <?php include '../partials/global/head.php'?>  
  <link rel="stylesheet" href="../src/style/upload.css" />
</head>
 <body>
  <?php include '../partials/global/navbar.php'?>
  <div id="main" class='container'>
    <div id="upload-container" class="form-container">
      <h3>Upload Files To Storage</h3>
      <?php 
        include '../partials/forms/upload_form.php'
      ?>
    </div>
    <?php include '../partials/global/imports.php'?>
  </div>
</body>
</html>