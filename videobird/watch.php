<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”robots” content=”noai, noimageai”>
<title>VideoBird: Stream chicken footage for free!</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
    <h1>VideoBird Viewer</h1>
    <a href="/"><img src="/HOME.png" alt="home"></a></br>
    <hr>
    <video controls playsinline disablepictureinpicture width=40%>
    <?php
    header("");
    echo '<source src="video/' . htmlspecialchars($_GET["video"]) . '" type="video/mp4"/>';
    ?>

<p>
    Your browser doesn't support HTML5 video. Try downloading from the link below.
</p>
</video>

<?php
echo '</br><a href="video/' . htmlspecialchars($_GET["video"]) . '" download>Download this video to play offline</a>';
echo '</br><a href="video/' . htmlspecialchars($_GET["video"]) . '">View in fullscreen (may download MP4 in older browsers)</a></br></br>';

if (file_exists("video/sig/" . $_GET["video"] . ".sig")) {
    echo '<details><summary>This video is PGP-signed (click to inspect signatures)</summary>';
    echo '<p>This video has been signed by the owners of Mojavesoft.</br>The signature can be used to verify that your video download has not been tampered with.</p>';
    echo '<a download href="' . 'video/sig/' . htmlspecialchars($_GET["video"]) . '.sig' . '">Download PGP signature for this video</a></br>';
    echo '<a download href="video/sig/pppdud.asc">Download PGP public key for Mojavesoft</a></br></details>';
}


if (isset($_GET["lowspeed"])) {
    echo '</br>';
    echo '<details><summary>This video works well in low-speed connections (click for more info)</summary>';
    echo '<p>This video has a bitrate of ~5000 kbps (5 mbps) or less, with a resolution of up to 720p. It is easily playable via low-speed networks (usually between 10-50 mbps).';
    echo '</br>Videos with this certification may have low quality on some scenes.</p></details>';
}
?>
</body>
</html>
