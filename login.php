<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
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
    $query = "SELECT * FROM `userdata` WHERE username='$username' AND password='" . md5($password) . "'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    $rows = mysqli_num_rows($result);
    if ($rows >= 1) {
      $_SESSION['username'] = $username;
      header("Location: index.php");
      // Redirect to user dashboard page
    } else {
      echo '<script language="javascript">';
      echo 'alert("Incorrect Username/password.");';
      echo 'document.location.href = "./login.php";';
      echo '</script>';
      exit();
    }
  } elseif (isset($_REQUEST['username1'])) {
    // removes backslashes
    //escapes special characters in a string
    $username = stripslashes($_REQUEST['username1']);
    $username = mysqli_real_escape_string($con, $username);
    $email = stripslashes($_REQUEST['email1']);
    $email = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password1']);
    $password = mysqli_real_escape_string($con, $password);
    $confirmpassword = stripslashes($_REQUEST['confirm_password1']);
    $confirmpassword = mysqli_real_escape_string($con, $confirmpassword);
    $create_datetime = date("Y-m-d H:i:s");
    if ($password != $confirmpassword) {
      echo '<script language="javascript">';
      echo 'alert("Password do not match");';
      echo 'document.location.href = "./login.php";';
      echo '</script>';
      exit();
    }
    $query1 = "SELECT * FROM `userdata` WHERE `username` = '$username' OR `email` = '$email'"
    ;
    $result1 = mysqli_query($con, $query1);
    $rows1 = mysqli_num_rows($result1);
    if ($rows1 >= 1) {
      echo '<script language="javascript">';
      echo 'alert("Username or email already exists.");';
      echo 'document.location.href = "./login.php";';
      echo '</script>';
      exit();
    }
    $query = "INSERT into `userdata` (username, email, password, datetime) VALUES ('$username',  '$email','" . md5($password) . "', '$create_datetime')";
    $result = mysqli_query($con, $query);
    if ($result) {
      echo '<script language="javascript">';
      echo 'alert("You are registered successfully.");';
      echo 'document.location.href = "./login.php";';

      echo '</script>';
    } else {
      echo '<script language="javascript">';
      echo 'alert("Required fields are missing");';
      echo 'document.location.href = "./login.php";';
      echo '</script>';
    }
  } else {
    ?>
    <div class="main">
      <!-- <img class="imglogin1" src="./assets/Mobile login-amico.svg" alt="Backimg"> -->
      <form method="post" id="form1" class="loginform regform">
        <h1>Register</h1>
        <div class=" inputContainer">
          <input name="username1" required="required" id="inputField" placeholder="Username" type="text">
          <label class="usernameLabel">Username</label>
          <svg class="userIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
            fill="rgba(0,0,0,1)">
            <path
              d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z">
            </path>
          </svg>
        </div>
        <div class="inputContainer">
          <input name="email1" required="required" id="inputField" placeholder="Email" type="email">
          <label class="usernameLabel">Email</label>
          <svg class="userIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
            fill="rgba(0,0,0,1)">
            <path
              d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM12.0606 11.6829L5.64722 6.2377L4.35278 7.7623L12.0731 14.3171L19.6544 7.75616L18.3456 6.24384L12.0606 11.6829Z">
            </path>
          </svg>
        </div>
        <div class="inputContainer">
          <input name="password1" class="password1" minlength="8" required="required" id="inputField"
            placeholder="Password" type="password">
          <i onclick="eyechange(this,'password1')" class="ri-eye-off-fill"></i>
          <label class="usernameLabel">Password</label>
          <svg class="userIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
            fill="rgba(255,255,255,1)">
            <path
              d="M19 10H20C20.5523 10 21 10.4477 21 11V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V11C3 10.4477 3.44772 10 4 10H5V9C5 5.13401 8.13401 2 12 2C15.866 2 19 5.13401 19 9V10ZM17 10V9C17 6.23858 14.7614 4 12 4C9.23858 4 7 6.23858 7 9V10H17ZM11 14V18H13V14H11Z">
            </path>
          </svg>
        </div>
        <div class="inputContainer">
          <input name="confirm_password1" class="confirm_password1" min="8" required="required" id="inputField"
            placeholder="Confirm Password" type="password">
          <i onclick="eyechange(this,'confirm_password1')" class="ri-eye-off-fill"></i>
          <label class="usernameLabel">Confirm Password</label>
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
      <form method="post" id="form2" class="loginform loginform1">
        <h1>Login</h1>
        <div class="inputContainer">
          <input name="username" required="required" id="inputField" placeholder="Username" type="text">
          <label class="usernameLabel">Username</label>
          <svg class="userIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
            fill="rgba(0,0,0,1)">
            <path
              d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z">
            </path>
          </svg>
        </div>
        <div class="inputContainer">
          <input name="password" class="password" minlength="8" required="required" id="inputField" placeholder="Password"
            type="password">
          <i onclick="eyechange(this,'password')" class="ri-eye-off-fill"></i>
          <label class="usernameLabel">Password</label>
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


<script src="./js/login.js">

</script>


</html>