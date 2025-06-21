<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta name="description" content="A cool website where we do stuff.">
  <meta charset="UTF-8">
<title>BirdMenu Live</title>
<link rel="stylesheet" href="/common/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<center>
<h1>BirdMenu Live</h1>
<a href="/"><img src="/common/HOME.png"></a></br>
<hr>
<?php
$slime = json_decode(file_get_contents("slime.json"), true);
$food = json_decode(file_get_contents("food.json"), true);
$dessert = json_decode(file_get_contents("dessert.json"), true);

echo '<p>Wacky food item: ' . $slime[array_rand($slime)] . ' ' . $food[array_rand($food)] . ', dessert is ' . $dessert[array_rand($dessert)] . '</p>';
?>
<a href="."><button>Try again!</button></a>
</center>

</body>
</html>