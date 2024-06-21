<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./Styles/login.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
  <?php

  require ('db.php');
  session_start();
  // When form submitted, check and create user session.
  if (isset($_POST['username'])) {
    $username = stripslashes($_REQUEST['username']); // removes backslashes
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    // Check user is exist in the database
    $query = "SELECT * FROM `users` WHERE username='$username' AND password='" . md5($password) . "'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
      $_SESSION['username'] = $username;
      // Redirect to user dashboard page
      header("Location: index.php");
    } else {
      echo "<div class='form'>
              <h3>Incorrect Username/password.</h3><br/>
              <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
              </div>";
    }
  } else {
    ?>
    <div class="main">
      <img class="imglogin1" src="./assets/Mobile login-amico.svg" alt="Backimg">
      <form method="post" action="#" class="loginform">
        <h1>Register</h1>
        <div class="inputContainer">
          <input required="required" id="inputField" placeholder="Username" type="text">
          <label class="usernameLabel" for="inputField">Username</label>
          <svg viewBox="0 0 448 512" class="userIcon">
            <path
              d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
            </path>
          </svg>
        </div>
        <div class="inputContainer">
          <input required="required" id="inputField" placeholder="Password" type="text">
          <label class="usernameLabel" for="inputField">Password</label>
          <svg class="userIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
            fill="rgba(255,255,255,1)">
            <path
              d="M19 10H20C20.5523 10 21 10.4477 21 11V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V11C3 10.4477 3.44772 10 4 10H5V9C5 5.13401 8.13401 2 12 2C15.866 2 19 5.13401 19 9V10ZM17 10V9C17 6.23858 14.7614 4 12 4C9.23858 4 7 6.23858 7 9V10H17ZM11 14V18H13V14H11Z">
            </path>
          </svg>
        </div>
        <div class="inputContainer">
          <input required="required" id="inputField" placeholder="Confirm Password" type="text">
          <label class="usernameLabel" for="inputField">Confirm Password</label>
          <svg class="userIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
            fill="rgba(255,255,255,1)">
            <path
              d="M19 10H20C20.5523 10 21 10.4477 21 11V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V11C3 10.4477 3.44772 10 4 10H5V9C5 5.13401 8.13401 2 12 2C15.866 2 19 5.13401 19 9V10ZM17 10V9C17 6.23858 14.7614 4 12 4C9.23858 4 7 6.23858 7 9V10H17ZM11 14V18H13V14H11Z">
            </path>
          </svg>
        </div>
        <div class="loginbutton">
          <input type="submit" value="Signup">
        </div>
        <div class="loginbottom">
          <div class="createaccount">
            <a onclick="changescreen1()" href="#">Already have account?</a>
          </div>
        </div>
      </form>
      <form method="post" action="#" class="loginform">
        <h1>Login</h1>
        <div class="inputContainer">
          <input required="required" id="inputField" placeholder="Username" type="text">
          <label class="usernameLabel" for="inputField">Username</label>
          <svg viewBox="0 0 448 512" class="userIcon">
            <path
              d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
            </path>
          </svg>
        </div>
        <div class="inputContainer">
          <input required="required" id="inputField" placeholder="Password" type="text">
          <label class="usernameLabel" for="inputField">Password</label>
          <svg class="userIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
            fill="rgba(255,255,255,1)">
            <path
              d="M19 10H20C20.5523 10 21 10.4477 21 11V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V11C3 10.4477 3.44772 10 4 10H5V9C5 5.13401 8.13401 2 12 2C15.866 2 19 5.13401 19 9V10ZM17 10V9C17 6.23858 14.7614 4 12 4C9.23858 4 7 6.23858 7 9V10H17ZM11 14V18H13V14H11Z">
            </path>
          </svg>
        </div>
        <div class="loginbutton">
          <input type="submit" value="Login">
        </div>
        <div class="loginbottom">
          <div class="createaccount">
            <a onclick="changescreen()" href="#">Create account</a>
          </div>
          <div class="Forgetpass">
            <a href="./passforget.php">
              Forget password?
            </a>
          </div>
        </div>
      </form>
    </div>
    <div class="background1">
    </div>
  <?php } ?>
</body>
<script src="./js/login.js"></script>

</html>