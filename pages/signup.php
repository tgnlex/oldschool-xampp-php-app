<!doctype html>
<html lang="en">
<head>
    <title>Signup</title>
    <?php  include '../partials/head.php' ?>
</head>
<body>
  <header>
    <?php include '../partials/navbar.php' ?>
  </header> 
  <div class="container">
    <h1>User Signup</h1>    
    <form action="<?php $_PHP_SELF ?>" method="POST">
        Email:  <input 
          id="signup-email"
          class="form-control"
          name="email"
          type="text"
        />
        Username: <input 
          id="signup-user"
          class="form-control"
          name="username"
          type="text"
        />
        Password: <input 
          id="signup-password"
          class="form-control"
          name="password"
          type="password"
        /> 
        <input 
          class="btn btn-submit btn-signup" 
          id="submit-signup" 
          type="submit" />
  </form>
</div>
<?php include '../partials/imports.php' ?>
</body>
</html>
