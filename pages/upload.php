<!DOCTYPE html>
<html lang="en">
<head> 
  <?php include '../partials/global/head.php'?>
</head>
 <body>
  <?php include '../partials/global/navbar.php'?>
  <div id="main" class='container'>
    <form 
      id="upload-form"
      method="post"
      enctype="multipart/form-data"
      action="../server/upload_handler.php">
  
    </form>
  </div>
  <?php include '../partials/global/imports.php'?>
 </body>
</html>