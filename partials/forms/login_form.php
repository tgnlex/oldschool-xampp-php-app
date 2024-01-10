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