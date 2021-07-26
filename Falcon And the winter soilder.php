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
        <title>Falcon and The Winter Soldier </title>
    </head>

    <body>
        <h1>Falcon and The Winter Soldier <br>Click on the Episode to watch</h1>
        <div class="usrdet">
            User: <?php echo $_SESSION['name'];?><br>
            E-mail: <?php echo $_SESSION['email'];?><br>
            Phone Number: <?php echo $_SESSION['phno'];?><br>
            <a href="lgpg.php"> <input type="button" value="Logout"></a>
        </div>
        <div class="molist">
            <a href="movis.php">Click here to go back to movies page</a>
            <li><a href="VideoPlayer.php?movienm=videos/WebSeries/FalconAndTheWinterSoilder/FalconAndTheWinterSoilder_S01E01">Episode 1</a></li>
            <li><a href="VideoPlayer.php?movienm=videos/WebSeries/FalconAndTheWinterSoilder/FalconAndTheWinterSoilder_S01E02">Episode 2</a></li>
            <li><a href="VideoPlayer.php?movienm=videos/WebSeries/FalconAndTheWinterSoilder/FalconAndTheWinterSoilder_S01E03">Episode 3</a></li>
            <li><a href="VideoPlayer.php?movienm=videos/WebSeries/FalconAndTheWinterSoilder/FalconAndTheWinterSoilder_S01E04">Episode 4</a></li>
            <li><a href="VideoPlayer.php?movienm=videos/WebSeries/FalconAndTheWinterSoilder/FalconAndTheWinterSoilder_S01E05">Episode 5</a></li>
            <li><a href="VideoPlayer.php?movienm=videos/WebSeries/FalconAndTheWinterSoilder/FalconAndTheWinterSoilder_S01E06">Episode 6</a></li>
        </div>
    </body>
</html>