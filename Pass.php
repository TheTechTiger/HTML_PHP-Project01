<?php
session_start();
?>
<html>
    <head>
        <title>
            Login Sucessful
        </title>
        <link rel="stylesheet" type="text/css" href="css/result.css">
        <link rel="icon" href="avtar.png">
    </head>
    <body>
        <div class="result">
            <h1>
                You Have Logged In Sucessfully
                <br>
                <?php echo $_SESSION['name']; ?>
                <br>
            </h1>
            <form action="lgpg.php" method="post">
                <input type="submit" value="Logout">
                <br>
            </form>
            <center>
                <a href="movis.php">
                    click here to access the file
                </a>
            </center>
        </div>
    </body>
</html>
