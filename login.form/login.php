<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>

<link href='style.css' rel='stylesheet'>
<head>
</h1>
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />


<body>
<nav class="navigation-bar">
    <img class="logo" src="job.jpg">
    <ul>
  <li><a href="http://localhost/FABSTECH/dropdown/">Home</a></li>
  <li><a>login</a>
      <ul>
      <li><a href="http://localhost/FABSTECH/login.form/login.php">clients</a></li>
      <li><a href="http://localhost/FABSTECH/login.form/login.php">Employer</a></li>
      <li><a href="http://localhost/FABSTECH/login.form/login.php">Agent</a></li>
      </ul>
  </li>

   <li>
    <a>Profile</a>
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
</body>
</h1>

</html>

<html>

<body>
  <div class="header">
       <h2>login</h2>
  </div>
</head>

  <form method="post" action="login.php">

    <!--display validation errors-->
    <?php include('errors.php'); ?>

    <div class="input-group">
      <label>username</label>
      <input type="text" name="username">
    </div>

    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>

    <div class="input-group">
            <button type="submit" name="login" class="btn">login</button>
    </div>
    <p>
      Not yet a member? <a href="register.php">sign up</a>
    </p>
  </form>
</body>
</html>

</html>
