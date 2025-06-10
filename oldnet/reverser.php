<html>
<head>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<a href="/"><img src="HOME.png"></a>
<a href="/reverser">Reverse another string.</a></br></br>
The reverse of the supplied string is: <?php 
$str1 = htmlspecialchars($_GET['string']);
echo strrev($str1); ?>
</html>