<?php include('server.php'); ?>
<!DOCTYPE html>
<html>

<html>
<link href='style.css' rel='stylesheet'>
<head>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>
<nav class="navigation-bar">
    <img class="logo" src="job.jpg">
    <ul>
  <li><a>Home</a></li>
  <li><a>login</a>
    <ul>
      <li><a href="http://localhost/login.form/login.php">clients</a></li>
      <li><a href="http://localhost/login.form/login.php">Employer</a></li>
      <li><a href="http://localhost/login.form/login.php">Agent</a></li>
    </ul>
  </li>

  <li><a>Profile</a>
  </li>

  <li><a>Education</a>
  </li>

  <li><a>Find Job</a>
  </li>

  <li><a>Employers/Post Job</a>
  </li>

  <li><a>Find salary</a>
  </li>

  <li><a>Gallery</a>
  </li>

  <li><a>News</a></li>

  <li><a href="http://localhost/FABSTECH/login.form/register.php">Sign up</a>
  </li>
</ul>
</nav>
</html>

<head>
  <title>User register</title>
  <link rel='stylesheet' type='text/css' href='style.css'>

</head>
<body>
  <div class="header">
       <h2>Register</h2>
  </div>

  <form method="post" action="register.php">

    <div class="input-group">
      <label>username</label>
      <input type="text" name="username" value="<?php echo $username; ?>" >
    </div>

    <div class="input-group">
      <label>Email</label>
      <input type="text" name="email" value="<?php echo $email; ?>">
    </div>

    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>

    <div class="input-group">
      <label>Re-password</label>
      <input type="password" name="password_2">
    </div>

    <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">sign in</a>
    </p>
  </form>
</body>
</html>
