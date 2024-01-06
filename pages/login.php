<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <?php include '../partials/head.php' ?>     
</head>
<body>
  <header>
    <?php include '../partials/navbar.php' ?>
  </header> 
  <div class="container">
    <h1>User Login</h1>    
    <form action="<?php $_PHP_SELF ?>" method="POST">
        Email:  <input 
          id="login-email"
          class="form-control"
          name="email"
          type="text"
        />
        Username: <input 
          id="login-user"
          class="form-control"
          name="username"
          type="text"
        />
        Password: <input 
          id="login-password"
          class="form-control"
          name="password"
          type="password"
        /> 
        <input 
          class="btn btn-submit btn-login" 
          id="submit-signup" 
          type="submit" />
    </form>
    <div id="signup-link-area">
        <h3>Don't have an account?</h3>
        <a id="signup-link" href="./signup.php">
            <h3>Click here to create one!</h3>
        </a>
    </div>
  </form>
</div>
<?php include '../partials/imports.php' ?>

</body>
</html>
