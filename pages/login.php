<?php include '../server/login_validator.php' ?>
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
  <div id="main" class="container">
    <h1>User Login</h1>    
    <form
      id="login"
      class="auth-form login"   
      method="POST"
      action="../src/php/login_handler.php" 
    >
        Username: <input 
          id="login-email"
          class="form-control auth email"
          name="email"
          type="text"
          placeholder="Enter your Email..."
          required
        />
        Password: <input 
          id="login-password"
          class="form-control auth password"
          name="password"
          type="password"
          placeholder="Enter your password..."
          required
        /> 
        <input           
          id="submit-signup" 
          class="btn btn-submit btn-login" 
          type="submit" 
          value="Login"
        />
    </form>
    <div id="signup-link-area">
        <h4>Don't have an account?</h4>
        <a id="signup-link" href="./signup.php">
            <h4>Click here to create one!</h4>
        </a>
    </div>
  </form>
</div>
<?php include '../partials/imports.php' ?>

</body>
</html>
