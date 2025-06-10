<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
</head>
<a href="/"><img src="HOME.png"></a>
<a href="/hello">Make another catchphrase.</a></br></br>
Hi <?php echo htmlspecialchars($_GET['name']); ?>.
Your catchphrase is "<?php echo htmlspecialchars($_GET['cphrase']); ?>".</br>
The length of your catchphrase is <?php echo strlen(htmlspecialchars($_GET['cphrase']))?>.</br>
There are <?php echo str_word_count(htmlspecialchars($_GET['cphrase']));?> words in your catchphrase.