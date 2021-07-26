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
?>

<html>
<head>
	<meta charset="utf-8" />
	<title>Styled Video Player with Subtitles - Mozilla</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="css/videostyle.css" />
</head>
<body>
	<h1>Black Widow (2021) English 720p WEBRip 1GB ESub [Worldfree4u.Pink].mkv</h1>
	<figure id="videoContainer" data-fullscreen="false">
		<video id="video" controls preload="metadata">
			<source src="Videos/Black Widow (2021) English 720p WEBRip 1GB ESub [Worldfree4u.Pink].mkv" type="video/mp4">
			<track label="English" kind="subtitles" srclang="en" src="Videos/BlackWidowEnglish.vtt" default>
			<track label="Hindi" kind="subtitles" srclang="es" src="Videos/BlackWidowHindi.vtt">
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
			<br>
			<?php echo "User: ".$_SESSION["name"]?>
			<br>
			<?php echo "Email: ".$_SESSION["email"]?>
			<br>
			<?php echo "Phone Number: ".$_SESSION['phno']?>
		</figcaption>
	</figure>
	<script src="videoplayer.js"></script>
</body>
</html>