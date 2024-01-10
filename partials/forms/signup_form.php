<form
      id="signup"
      class="auth-form signup" 
      action="../src/php/signup_handler.php" 
      method="POST"
    > 
    
        Email:  <input 
          id="signup-email"
          class="form-control auth email"
          name="email"
          type="text"
          placeholder="Enter a valid email address..."
          required
        />
        Username: <input 
          id="signup-user"
          class="form-control auth username"
          name="username"
          type="text"
          placeholder="Create a username..."
          required
        />
        Password: <input 
          id="signup-password"
          class="form-control auth password"
          name="password"
          type="password"
          placeholder="Create a password..."
          required
        /> 
        <input 
          class="btn btn-submit btn-signup" 
          id="submit-signup" 
          value="Create"
          type="submit" 
          required
          />
  </form>