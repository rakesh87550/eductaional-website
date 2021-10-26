<?php
require('config/db.php');
session_start();
// Check user login or not
if (isset($_SESSION['login_user'])) {
  header('Location: dashboard.php');
}
if (isset($_POST['loginSubmit'])) {
  // username and password sent from form 

  $myusername = mysqli_real_escape_string($conn, $_POST['myusername']);
  $mypassword = mysqli_real_escape_string($conn, $_POST['mypassword']);

  $sql = "SELECT * FROM admin WHERE admin_email = '$myusername' and admin_pass = '$mypassword'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  $adminname = $row['admin_name'];
  if ($count == 1) {
    $_SESSION['admin_name'] = $adminname;
    $_SESSION['login_user'] = $myusername;
    echo "<script>alert('Successfully Loggedin');</script>";
    echo "<script> location.href='dashboard.php'; </script>";
    exit;
  } else {
    echo "<script>alert('Your Login Name or Password is invalid');</script>";
    echo "<script> location.href='login.php'; </script>";
    exit;
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Demo Institute</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>

  <div class="wrapper fadeInDown">
    <div id="formContent">
      <div class="fadeIn first">
        <span style="font-size: 33px;color: #641295;font-weight: 600;padding: 30px 20px;">Demo Institute</span>
      </div>
      <!-- Login Form -->
      <form name="loginForm" method="POST" enctype="multipart/form-data">
        <input type="text" id="login" class="fadeIn second" name="myusername" placeholder="username">
        <input type="text" id="password" class="fadeIn third" name="mypassword" placeholder="password">
        <input type="submit" name="loginSubmit" class="fadeIn fourth" value="Log In">
      </form>
    </div>
  </div>

  <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>

</html>