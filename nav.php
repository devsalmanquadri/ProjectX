<?php

if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="./Styles/nav.css">
</head>

<body>
    <!-- code for nav bar -->
    <div class="nav1">

        <nav>
            <div class="logo">
                <a href="index.php">ProjectX</a>
            </div>
            <ul class="navitems">
                <li><a class="navitem" href="index.php">Home</a></li>
                <li><a class="navitem" href="#">something</a></li>
                <li><a class="navitem" href="#">something</a></li>
            </ul>
            <div class="profilesection">
                <div class="profile">
                    <img src="./assets/profile.png" alt="profile">
                    <div class="usernameicon">
                        <p><?php
                        if (!isset($_SESSION['username'])) {
                            echo "Guest";
                        } else {
                            echo $_SESSION['username'];
                        }

                        ?></p>
                        <i class="ri-arrow-drop-down-line"></i>
                    </div>
                </div>
                <div class="profileitems">
                    <?php
                    if (!isset($_SESSION['username'])) {
                        echo "<a href='./login.php' class='log1'><span>Login</span></a>
                    <a href='./login.php' class='log1'><span>Sign In</span></a>";
                    } else {
                        echo "<a href='./profileform.php' class='Profile log1'>Profile</a>";
                        echo "<a href='./logout.php' class='log1'><span>Logut</span></a>";
                    }
                    ?>
                </div>
            </div>
        </nav>
    </div>
    <script>
        let profile = document.querySelector(".profile");
        let profileitems = document.querySelector(".profileitems");
        profile.addEventListener("click", function () {
            profileitems.classList.toggle("active");
        });
    </script>
</body>

</html>