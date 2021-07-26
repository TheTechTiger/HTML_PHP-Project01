<?php
session_start();
?>
<html>

<head>
    <link rel="icon" href="css/moviesLogo.jpg">
    <link rel="stylesheet" href="css/MovieCSS.css">
    <title>Movies available for you to watch</title>
</head>

<body>
    <h1>Movies<br>Select a movie using the radio button on the left side of the movie name,<br>and then click on watch</h1>
    <div class="usrdet">
        User: <?php echo $_SESSION['name'];?><br>
        E-mail: <?php echo $_SESSION['email'];?><br>
        Phone Number: <?php echo $_SESSION['phno'];?><br>
        <a href="lgpg.php"> <input type="button" value="Logout"></a>
    </div>
    <div class="molist">
        <a href="webseries.php">WebSeries</a>
        <form action="VideoPlayer.php" method="get">
            <a href="VideoPlayer.php?movienm=videos/Ant-Man (2015) 720p BluRay Dual Audio [Hindi-English] ESub.mkv">Ant-Man (2015) 720p BluRay Dual Audio [Hindi-English] ESub</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Ant-Man and the Wasp (2018) 1080p BluRay x264 ESubs AC3 Dual Audio [Hindi BD5.1 + English DD5.1].mkv">Ant-Man and the Wasp (2018) 1080p BluRay x264 ESubs AC3 Dual Audio [Hindi BD5.1 + English DD5.1]</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Avengers Infinity War 720P Dual Audio.mkv">Avengers Infinity War 720P Dual Audio</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Avengers.Age.of.Ultron.2015.720p.Hindi.English.MoviesVerse.in.mkv">Avengers.Age.of.Ultron.2015.720p.Hindi.English.MoviesVerse.in</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Avengers.Endgame.2019.1080p.HEVC.Hindi.English.MoviesVerse.in.mkv">Avengers.Endgame.2019.1080p.HEVC.Hindi.English.MoviesVerse.in</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Black Panther Duad Audio 720p.mkv">Black Panther Duad Audio 720p</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Black Widow (2021) English 720p WEBRip 1GB ESub [Worldfree4u.Pink].mkv">Black Widow (2021) English 720p WEBRip 1GB ESub [Worldfree4u.Pink]</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Black_Widow_Hindi.mkv">Black_Widow_Hindi</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Captain Marvel 2019 1080p Dual Audio.mkv">Captain Marvel 2019 1080p Dual Audio</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Captain.America.Civil.War.2016.720p.Hindi.English.MoviesFlixPro.in.mkv">Captain.America.Civil.War.2016.720p.Hindi.English.MoviesFlixPro.in</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Captain.America.First.Avenger.2011.1080p.Hindi.English.MoviesFlixPro.in.mkv">Captain.America.First.Avenger.2011.1080p.Hindi.English.MoviesFlixPro.in</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Captain.America.Winter.Soldier.2014.1080p.Hindi.English - MoviesFlix.Net.in.mkv">Captain.America.Winter.Soldier.2014.1080p.Hindi.English - MoviesFlix.Net.in</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Doctor Strange 1080p Dual Audio.mkv">Doctor Strange 1080p Dual Audio</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Guardians.of.the.Galaxy.2014.720p.Hindi.English.MoviesFlixPro.in.mkv">Guardians.of.the.Galaxy.2014.720p.Hindi.English.MoviesFlixPro.in</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Guardians.of.the.Galaxy.Vol.2.2017.720p.Hindi.English.MoviesFlixPro.in.mkv">Guardians.of.the.Galaxy.Vol.2.2017.720p.Hindi.English.MoviesFlixPro.in</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Iron Man 1 Hindi Dubbed in 720p.mkv">Iron Man 1 Hindi Dubbed in 720p</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Iron Man 2 Hindi Dubbed in 720p.mkv">Iron Man 2 Hindi Dubbed in 720p</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Iron Man 3 Hindi Dubbed in 720p.mkv">Iron Man 3 Hindi Dubbed in 720p</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Spider-Man.Far.from.Home.2019.720p.BluRay.Hindi.English.MoviesFlix.Cc.mkv">Spider-Man.Far.from.Home.2019.720p.BluRay.Hindi.English.MoviesFlix.Cc</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/SpiderMan.Homecoming.(2017)1080p.Dual.Audio.(Hin-Eng).[MoviesFlix.NeT].mkv">SpiderMan.Homecoming.(2017)1080p.Dual.Audio.(Hin-Eng).[MoviesFlix.NeT]</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/The.Avengers.(2012).720p.Hindi.English.MoviesVerse.in.mkv">The.Avengers.(2012).720p.Hindi.English.MoviesVerse.in</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/The.Incredible.Hulk.(2008).1080p.Dual.Audio.(Hin-Eng).[MoviesFlixPro.in].mkv">The.Incredible.Hulk.(2008).1080p.Dual.Audio.(Hin-Eng).[MoviesFlixPro.in]</a><br>
            
            <a href="VideoPlayer.php?movienm=videos/Thor (2011) 1080p Dual Audio (Hin-Eng) [AllMoviesHhub.in].mkv">Thor (2011) 1080p Dual Audio (Hin-Eng) [AllMoviesHhub.in]</a><br>

            <a href="VideoPlayer.php?movienm=videos/Thor Ragnarok 2017 Dual Audio ORG Hindi [mkvmoviespoint.in] 720p BluRay.mkv">Thor Ragnarok 2017 Dual Audio ORG Hindi [mkvmoviespoint.in] 720p BluRay</a><br>

            <a href="VideoPlayer.php?movienm=videos/Thor The Dark World (2013) 1080p Dual Audio (Hin-Eng).mkv">Thor The Dark World (2013) 1080p Dual Audio (Hin-Eng)</a><br>
        </form>
    </div>
</body>

</html>