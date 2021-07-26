<?php
session_start();
$email = $_SESSION['email'];
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'webDev');
$s = "SELECT * FROM login WHERE Email = '$email'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
}
else{
    header("Location: index.html");
}
?>
<html>
    <head>
        <link rel="icon" href="css/moviesLogo.jpg">
        <link rel="stylesheet" href="css/MovieCSS.css">
        <title>Web Series available for you to watch</title>
    </head>

    <body>
        <h1>Web Series<br>Click on the webseries</h1>
        <div class="usrdet">
            User: <?php echo $_SESSION['name'];?><br>
            E-mail: <?php echo $_SESSION['email'];?><br>
            Phone Number: <?php echo $_SESSION['phno'];?><br>
            <a href="lgpg.php"> <input type="button" value="Logout"></a>
        </div>
        <div class="molist">
            <a href="Wanda Vision.php"><li>Wanda Vision</li></a>
            <a href="Falcon And the winter soilder.php"><li>Falcon And the winter soilder</li></a>
            <a href="loki.php"><li>Loki</li></a>
        </div>
    </body>
</html>