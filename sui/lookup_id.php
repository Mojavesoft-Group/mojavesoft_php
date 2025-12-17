<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta name="description" content="A cool website where we do stuff and bypass parental controls.">
  <meta charset="UTF-8">
<title>Scratch User ID Lookup</title>
<link rel="icon" type="image/x-icon" href="ICON.png">
<link rel="stylesheet" href="/common/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<center>
<h1>Scratch User ID Lookup</h1>
<a href="/"><img src="/common/HOME.png"></a></br>
<marquee direction="right"><big><b>More outdated every day!</b></big></marquee>
<hr>
<h2>Query Results</h2>
<?php
/*
error_reporting(E_ALL);
ini_set('display_errors', '1');
*/
ini_set('memory_limit','390M');

$start=time();
$json = file_get_contents('id_data/' . $_GET["id"][0] . '.json'); 

if (!$json) {
    die('Query failed: no data.');
}

$json_data = json_decode($json, true); 

if (!$json_data) {
    die('Query failed: bad data.');
}

echo 'User ID: ' . $_GET["id"] . '<br>';

if (isset($json_data[$_GET["id"]])) {
  echo 'Username: ' . $json_data[$_GET["id"]] . '<br>';
}

else {
  echo 'No username information found.<br>';
}

echo 'Took ' . microtime(true) - $_SERVER['REQUEST_TIME'] . " seconds.";

echo '<hr><h2>Appendix</h2>';
echo '<a download class="default-size" href="id_data/' . htmlspecialchars($_GET["id"][0]) . '.json">Relevant data dump (JSON)</a>';
?>
<br><a href="." class="default-size">Try another user ID</a>


</center>

</body>
</html>
