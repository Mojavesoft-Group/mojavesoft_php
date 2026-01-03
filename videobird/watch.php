<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>VideoBird</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<center>
    <h1>VideoBird Viewer</h1>
    <a href="/"><img src="/HOME.png" alt="home"></a></br>
    <hr>
    <video controls playsinline disablepictureinpicture width=40%>
    <?php
    echo '<source src="video/' . htmlspecialchars($_GET["video"]) . '.mp4" type="video/mp4"/>';
        if (file_exists("video/fallback/" . $_GET["video"] . ".webm")) {
        echo '<source src="video/fallback/' . htmlspecialchars($_GET["video"]) . '.webm"' . '" type="video/webm; codecs=\'vp9, vorbis\'" />';
    }
    ?>

<p>
    Your browser doesn't support HTML5 video. Try downloading from the link below.
</p>
</video>

<?php
/*include "addview.php";
if ($updatedCount>=0){
    echo '</br><i>This video has ' . $updatedCount . ' views.</i>';
}
*/
echo '</br><a href="video/' . htmlspecialchars($_GET["video"]) . '.mp4" download>Download this video to play offline</a>';

if (file_exists("video/sig/" . $_GET["video"] . ".sig")) {
    echo '<details><summary>This video is PGP-signed (click to inspect signatures)</summary>';
    echo '<p>This video has been signed by the owners of Mojavesoft.</br>The signature can be used to verify that your video download has not been tampered with.</p>';
    echo '<a download href="' . 'video/sig/' . htmlspecialchars($_GET["video"]) . '.mp4.sig' . '">Download PGP signature for this video</a></br>';
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
