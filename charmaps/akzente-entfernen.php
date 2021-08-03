<?php
$text = json_encode($text);
$text = str_replace('\ua67d', '', $text);
$text = str_replace('\ua67c', '', $text);
$text = str_replace('\ua66f', '', $text);
$text = str_replace('\u0483', '', $text);
$text = str_replace('\u0485', '', $text);
$text = str_replace('\u0486', '', $text);
$text = str_replace('\u0487', '', $text);
$text = str_replace('\u0484', '', $text);  //kamora indicates palatalisation
$text = str_replace('\u0306', '', $text);
$text = str_replace('\u02D8', '', $text);
$text = str_replace('\u0308', '', $text);
$text = str_replace('\u2609', '', $text);
$text = str_replace('\u0311', '', $text);
$text = str_replace('\u0304', '', $text);
$text = str_replace('\u0340', '', $text);
$text = str_replace('\u0341', '', $text);
$text = str_replace('\uA67E', '', $text);
$text = str_replace('\u033E', '', $text);
$text = str_replace('\u2E2F', '', $text);
$text = str_replace('\uA67F', '', $text);
$text = str_replace('\u0307', '', $text);
$text = str_replace('\u1dc1', '', $text);
$text = str_replace('\u1dc0', '', $text);
$text = str_replace('\u030b', '', $text);
$text = str_replace('\u030f', '', $text);
$text = str_replace('\u0302', '', $text);
$text = str_replace('\u1dc3', '', $text);
$text = str_replace('\u033f', '', $text);
$text = str_replace('\u035e', '', $text);
$text = str_replace('\u0360', '', $text);
$text = str_replace('\u1FFE', '', $text);

 if ($akzente_entfernen2 == "1")
	{
	$text = str_replace('\u0301', '', $text);
	$text = str_replace('\u02CA', '', $text);
	$text = str_replace('\u00b4', '', $text);
	$text = str_replace('\u0300', '', $text);
	$text = str_replace('\u0060', '', $text);
	} 

 if ($akzente_entfernen2 == "2" AND $_POST['zieltext'] == "ru_1700_1918")
	{

	$text = str_replace('\u0300', '\u0301', $text);
	$text = str_replace('\u0060', '\u0301', $text);
	} 
$text = json_decode($text);

$text = str_replace('῾', '', $text);
$text = str_replace('   ', ' ', $text);
$text = str_replace('  ', ' ', $text);
?>
