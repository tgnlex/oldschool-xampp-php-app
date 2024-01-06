<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <?php include '../partials/global/head.php' ?>     
</head>
<body>
  <header>
    <?php include '../partials/global/navbar.php' ?>
  </header> 
  <div id="main" class="container">
    <h1>User Login</h1>    
    <?php include '../partials/forms/login_form.php' ?>
    <div id="signup-link-area">
        <h4>Don't have an account?</h4>
        <a id="signup-link" href="./signup.php">
            <h4>Click here to create one!</h4>
        </a>
    </div>
  </form>
</div>
<?php include '../partials/global/imports.php' ?>

</body>
</html>
