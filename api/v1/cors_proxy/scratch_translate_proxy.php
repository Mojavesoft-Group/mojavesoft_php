<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require $path.'/protect_cors.php';
echo(file_get_contents("https://translate-service.scratch.mit.edu/translate?language=". rawurlencode($_GET["language"]) . '&text=' .rawurlencode($_GET["text"])));
?>
