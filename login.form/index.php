<?php include('server.php');

//if user is not logged in, they cannot acess this password_get_info
if(empty($_SESSION['username'])){
  header('location: login.php');
}

 ?>
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
       <h2>home page</h2>
  </div>
  <div class="content">
    <?php if (isset($_SESSION['success'])): ?>
               <div class="error success">
                 <h3>
                   <?php
                   echo $_SESSION['success'];
                   unset($_SESSION['success']);
                    ?>
                 </h3>

               </div>
    <?php endif ?>

      <?php if(isset($_SESSION["username"])): ?>
        <P>
          welcome <strong><?php echo $_SESSION['username']; ?></strong>
        </P>

        <P>
        <a href="index.php?logout='1'" style="color:red;">Logout</a>
        </P>
      <?php endif ?>

  </div>

</body>
</html>
