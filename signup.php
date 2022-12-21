<div class="wrapper">
  <div class="title-text">
    <div class="title login">Signup Form</div>
    <div class="title signup">Login Form</div>
    <link rel="stylesheet" href="stylee.css"/>
  </div>
  <div class="form-container">
    <div class="slide-controls">
      <input type="radio" name="slide" id="login"  >
      <input type="radio" name="slide" id="signup"checked>
      <label for="login" class="slide login">Login</label>
      <label for="signup" class="slide signup">Signup</label>
      <div class="slider-tab"></div>
    </div>
    <?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        
        $username = stripslashes($_REQUEST['username']);
     
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <div class="form-inner">
      <form action="#" class="login">
        <div class="field">
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        </div>
        <div class="field">
        <input type="email" class="login-input" name="email" placeholder="Email Address" required>
        </div>
        <div class="field">
        <input type="password" class="login-input" name="password" placeholder="Password" required>
        </div>
        
        <div class="field btn">
          <div class="btn-layer"></div>
          <input type="submit" value="SignUp">
        </div>
        <div class="signup-link">Already a Member? <a href="login.php">Login now</a></div>
      </form>
      <?php
    }
?>
    </div>
  </div>
</div>
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
