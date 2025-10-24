<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>VideoBird: Stream chicken footage for free!</title>
<link rel="stylesheet" href="style.css">
</head>
<center>
    <h1>VideoBird Viewer</h1>
    <a href="/"><img src="/HOME.png" alt="home"></a></br>
    <hr>
    <?php
    echo '<iframe src="js/' . htmlspecialchars($_GET["video"]) . '" width="640" height="360" allowtransparency="true" frameborder="0" scrolling="no" allowfullscreen></iframe>'
    ?>
<?php
echo '</br><a href="' . htmlspecialchars($_GET["video"]) . '">View in fullscreen (restarts cartoon)</a></br></br>';
?>
<hr>
