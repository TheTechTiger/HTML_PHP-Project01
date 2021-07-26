<?php
session_destroy();
unset($_SESSION['email']);
unset($_SESSION['name']);
unset($_SESSION['phno']);

echo "redirecting you to the login page";
header ("Location: index.html");
?>
<html>
    <head>
        <title>
            Redirecting
        </title>
    </head>
    <body>
        Redirecting you to the login page<br>
        <a href="index.html">Click here if you are not redirected</a>
    </body>
</html>