<div class="wrapper">
    <div class="title-text">
      <div class="title login">Login Form</div>
      <div class="title login">SignUp Form</div>
      <link rel="stylesheet" href="stylee.css"/>
    </div>
    <div class="form-container">
      <div class="slide-controls">
        <input type="radio" name="slide" id="login" checked>
        <input type="radio" name="slide" id="signup">
        <label for="login" class="slide login">Login</label>
        <label for="signup" class="slide signup">Signup</label>
        <div class="slider-tab"></div>
      </div>
      
      <?php
      require('db.php');
      // When form submitted, insert values into the database.
      session_start();
      // When form submitted, check and create user session.
      if (isset($_POST['username'])) {
          $username = stripslashes($_REQUEST['username']);    // removes backslashes
          $username = mysqli_real_escape_string($con, $username);
          $password = stripslashes($_REQUEST['password']);
          $password = mysqli_real_escape_string($con, $password);
          // Check user is exist in the database
          $query    = "SELECT * FROM `users` WHERE username='$username' AND password='" . md5($password) . "'";
          $result = mysqli_query($con, $query) or die(mysql_error());
          $rows = mysqli_num_rows($result);
          if ($rows == 1) {
              $_SESSION['username'] = $username;
              // Redirect to user dashboard page
              header("Location: dashboard.php");
          } else {
              echo "<div class='form'>
                    <h3>Incorrect Username/password.</h3><br/>
                    <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                    </div>";
          }
      } else {
  ?>   
      <div class="form-inner">
        <form action="#" class="login">
          <div class="field">
            <input type="text" placeholder="Username" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Password" required>
          </div>
          <div class="pass-link"><a href="#">Forgot password?</a></div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Login" >
          </div>
          <div class="signup-link">Not a member? <a href="signup.php">Signup now</a></div>
        </form>
        <?php
      }
  ?>
  <ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
      </div>
    </div>
  </div>

 
  
