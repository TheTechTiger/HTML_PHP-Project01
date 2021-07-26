<?php
session_start();
?>
<html>
    <head>
        <title>
            Regestration Sucess
        </title>
        <link rel="stylesheet" type="text/css" href="css/regresult.css">
        <link rel="icon" href="avtar.png">
    </head>
    <body>
        <h1>
            Regestration Sucessful<br>
            <?php echo $_SESSION['email']; ?>
        </h1>
        <form method="post" action="lgpg.php">
            <input type="submit" value="Go Back To Login Page">
        </form>
        <a href="regformhtml.php">
            <center>
                Create A New Account
            </center>
        </a>
    </body>
</html>