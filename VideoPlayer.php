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
$s2 = "SELECT * FROM login WHERE Email = '$email'";
$result = $con->query($s2);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
      $phno = $row["Phone_Number"];
  }
}
$movie = $_GET['movienm'];
$sub_string = 'videos/';
$str = $movie;
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $str = substr($str, strlen($sub_string));
}
$displaynm = $str;

$sub_string = '.mkv';
$str = $displaynm;
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $str = substr($str, strlen($sub_string));
}
$displaynm = $str;

$sub_string = 'WebSeries/';
$str = $displaynm;
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $str = substr($str, strlen($sub_string));
}
$displaynm = $str;

$sub_string = 'FalconAndTheWinterSoilder/';
$str = $displaynm;
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $str = substr($str, strlen($sub_string));
}
$displaynm = $str;

$sub_string = 'Loki/';
$str = $displaynm;
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $str = substr($str, strlen($sub_string));
}
$displaynm = $str;

$sub_string = 'WandaVision/';
$str = $displaynm;
if (substr($str, 0, strlen($sub_string)) == $sub_string) 
{
 $str = substr($str, strlen($sub_string));
}
$displaynm = $str;
?>

<html>
<head>
	<meta charset="utf-8" />
	<title><?php echo $displaynm;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/videostyle.css" />
</head>
<body>
	<h1><?php echo $displaynm;?></h1>
	<figure id="videoContainer" data-fullscreen="false">
		<video id="video" controls preload="metadata">
			<source src="<?php echo $movie;?>" type="video/mp4">
			<track label="English" kind="subtitles" srclang="en" src="Videos/<?php echo $movie;?>.vtt" default>
		</video>
		<div id="video-controls" class="controls" data-state="hidden">
			<button id="playpause" type="button" data-state="play">Play/Pause</button>
			<button id="stop" type="button" data-state="stop">Stop</button>
			<div class="progress">
				<progress id="progress" value="0" min="0">
					<span id="progress-bar"></span>
				</progress>
			</div>
			<button id="mute" type="button" data-state="mute">Mute/Unmute</button>
			<button id="volinc" type="button" data-state="volup">Vol+</button>
			<button id="voldec" type="button" data-state="voldown">Vol-</button>
			<button id="fs" type="button" data-state="go-fullscreen">Fullscreen</button>
			<button id="subtitles" type="button" data-state="subtitles">CC</button>
		</div>
		<figcaption>
		<div class="usrdet">
        User: <?php echo $_SESSION['name'];?><br>
        E-mail: <?php echo $_SESSION['email'];?><br>
        Phone Number: <?php echo $_SESSION['phno'];?><br>
        <a href="lgpg.php"> <input type="button" value="Logout"></a>
        <br><p align="right"><a href="<?php echo $movie;?>">If not playing properly click here to download</a></p>
    	</div>
		</figcaption>
	</figure>
	<script src="videoplayer.js"></script>
</body>
</html>