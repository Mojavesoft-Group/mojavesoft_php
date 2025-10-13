<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”robots” content=”noai, noimageai”>
<title>AudioBird Streamer</title>
<link rel="stylesheet" href="/common/css/style.css">
</head>
<body>
<center>
    <h1>AudioBird Streamer</h1>
    <a href="/"><img src="/HOME.png" alt="home"></a></br>
    <hr>
    <audio controls>
    <?php
    echo '<source src="audio/' . htmlspecialchars($_GET["audio"]) . '" type="audio/flac"/>';
    ?>

<p>
    Your browser doesn't support HTML5 audio. Try downloading from the link below.
</p>
</audio>
<?php
echo '</br><a class="sans-serif" href="audio/' . htmlspecialchars($_GET["audio"]) . '" download>Download this audio file to play offline</a>';
echo '</br><a class="sans-serif" href="audio/' . htmlspecialchars($_GET["audio"]) . '">View in seperate tab (may download FLAC in some browsers)</a></br></br>';
?>
</body>
</html>