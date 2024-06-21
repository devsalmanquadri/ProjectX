<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password?</title>
    <link rel="stylesheet" href="./Styles/login.css">
</head>

<body>
    <?php
    require ('db.php');
    session_start();
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']); // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $confirmpassword = stripslashes($_REQUEST['confirmpass']);
        $confirmpassword = mysqli_real_escape_string($con, $confirmpassword);
        if ($confirmpassword != $password) {
            echo "<div class='form'>
                  <h3>Password did not match.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
            exit();
        }
        // Check user is exist in the database
        $query = "SELECT * FROM `userdata` WHERE username='$username'";
        $query1 = "UPDATE `userdata` SET `password` = '" . md5($password) . "' WHERE `userdata`.`username` = '$username'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);
        if ($rows >= 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            // header("Location: login.php");
            $result1 = mysqli_query($con, $query1) or die(mysqli_error($con));
            echo "<div class='form'>
            <h3>Password reset Successfully</h3><br/>
            <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
            </div>";
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
            exit();
        }
    } else { ?>
        <div class="main">
            <form method="post" class="loginform" style="height: auto;">
                <h1>Change Password</h1>
                <div class="inputContainer">
                    <input name="username" required="required" id="inputField" placeholder="Username/Email" type="text">
                    <label class="usernameLabel">Username/Email</label>
                    <svg viewBox="0 0 448 512" class="userIcon">
                        <path
                            d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z">
                        </path>
                    </svg>
                </div>
                <div class="inputContainer">
                    <input name="password" required="required" id="inputField" placeholder="New Password" type="text">
                    <label class="usernameLabel">New Password</label>
                    <svg class="userIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
                        fill="rgba(255,255,255,1)">
                        <path
                            d="M19 10H20C20.5523 10 21 10.4477 21 11V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V11C3 10.4477 3.44772 10 4 10H5V9C5 5.13401 8.13401 2 12 2C15.866 2 19 5.13401 19 9V10ZM17 10V9C17 6.23858 14.7614 4 12 4C9.23858 4 7 6.23858 7 9V10H17ZM11 14V18H13V14H11Z">
                        </path>
                    </svg>
                </div>
                <div class="inputContainer">
                    <input name="confirmpass" required="required" id="inputField" placeholder="Confirm Password"
                        type="text">
                    <label class="usernameLabel">Confirm Password</label>
                    <svg class="userIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"
                        fill="rgba(255,255,255,1)">
                        <path
                            d="M19 10H20C20.5523 10 21 10.4477 21 11V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V11C3 10.4477 3.44772 10 4 10H5V9C5 5.13401 8.13401 2 12 2C15.866 2 19 5.13401 19 9V10ZM17 10V9C17 6.23858 14.7614 4 12 4C9.23858 4 7 6.23858 7 9V10H17ZM11 14V18H13V14H11Z">
                        </path>
                    </svg>
                </div>
                <div class="loginbutton">
                    <input type="submit" value="Reset Password" style="width: 7vw;">
                </div>
                <div class="loginbottom">
                    <div class="createaccount">
                        <a href="./login.php">Login</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="background1">
        </div>
    <?php } ?>
</body>

</html>