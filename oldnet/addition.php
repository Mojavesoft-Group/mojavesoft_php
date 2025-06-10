<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
</head>
<a href="/"><img src="HOME.png"></a>
<a href="/addition">Do more math.</a></br></br>
The sum of the supplied numbers is: <?php 
 $number1 = htmlspecialchars($_GET['one']);
 $number2 = htmlspecialchars($_GET['two']);
echo $number1 + $number2; ?>