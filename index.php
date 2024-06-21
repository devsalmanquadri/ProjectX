<?php
//include auth_session.php file on all user panel pages
include ("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>

<body>
    <h1>Home Page</h1>
    <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
    <?php
    echo "<a href='./logout.php' class='log1'><span>Logut</span></a>";
    ?>
</body>

</html>