<?php

if ($_POST['titlo'] == "1")
	{include ("titlo1.php");}
elseif ($_POST['titlo'] == "2")
	{include ("titlo2.php");}
if ($_POST['akzente_entfernen'] == "1" OR $_POST['akzente_entfernen'] == "2")
	{include ("titlo0.php");}
include ("vereinigung.php");

$ou = array(
"оу" => "у", 
"Оу" => "У", 
"ОУ" => "У", );
if ($_POST['ou'] == "2")
	{
	$text = strtr($text, $ou);
	}

$cu_isor9 = array(
"А" => "A", 
"а" => "a", 
"Б" => "B", 
"б" => "b", 
"В" => "V", 
"в" => "v", 
"Г" => "G", 
"г" => "g", 
"Д" => "D", 
"д" => "d", 
"Е" => "E", 
"е" => "e", 
"Є" => "E", 
"є" => "e", 
"Ё" => "Ë", 
"ё" => "ë", 
"Ж" => "Ž", 
"ж" => "ž", 
"Ѕ" => "Dz", 
"ѕ" => "dz", 
"Ꙃ" => "Dz", 
"ꙃ" => "dz", 
"З" => "Z", 
"з" => "z", 
"Ʒ" => "Z", 
"ӡ" => "z", 
"Ꙁ" => "Z", 
"ꙁ" => "z", 
"И" => "I", 
"и" => "i", 
"Й" => "J", 
"й" => "j", 
"І" => "І", 
"і" => "і", 
"і" => "і", 
"Ї" => "І", 
"ї" => "і", 
"ћ" => "Ǵ", 
"Ћ" => "ǵ", 
"К" => "K", 
"к" => "k", 
"Л" => "L", 
"л" => "l", 
"М" => "M", 
"м" => "m", 
"Н" => "N", 
"н" => "n", 
"О" => "O", 
"о" => "o", 
"Ѿ" => "Ôt", 
"ѿ" => "ôt", 
"Ѻ" => "O", 
"ѻ" => "o", 
"П" => "P", 
"п" => "p", 
"Р" => "R", 
"р" => "r", 
"С" => "S", 
"с" => "s", 
"Т" => "T", 
"т" => "t", 
"У" => "U", 
"у" => "u", 
"Ꙋ" => "U", 
"ꙋ" => "u", 
"Ѹ" => "U", 
"ѹ" => "u", 
"Ф" => "F", 
"ф" => "f", 
"Ц" => "C", 
"ц" => "c", 
"Ч" => "Č", 
"ч" => "č", 
"Ш" => "Š", 
"ш" => "š", 
"Ы" => "Y", 
"ы" => "y", 
"Ꙑ" => "Y", 
"ꙑ" => "y", 
"Ѣ" => "Ě", 
"ѣ" => "ě", 
"Ꙓ" => "Ě", 
"ꙓ" => "ě", 
"Э" => "Ė", 
"э" => "ė", 
"Ю" => "Ju", 
"ю" => "ju", 
"Ѫ" => "Ǫ", 
"ѫ" => "ǫ", 
"Ѭ" => "Jǫ", 
"ѭ" => "jǫ", 
"Ꙗ" => "Ja", 
"ꙗ" => "ja", 
"Ѧ" => "Ę", 
"ѧ" => "ę", 
"Ѩ" => "Ję", 
"ѩ" => "ję", 
"Ѥ" => "Je", 
"ѥ" => "je", 
"Ѯ" => "Ks", 
"ѯ" => "ks", 
"Ѱ" => "Ps", 
"ѱ" => "ps", 
"Я" => "Ja", 
"я" => "ja", 
"Ѵ" => "Ẏ",    // oder i Mathews / ü Wiki
"ѵ" => "ẏ", 
"Ѷ" => "Ẏ",   //unklar
"ѷ" => "ẏ",   //unklar
"Ҁ" => "90", 
"ҁ" => "90", 
"Њ" => "Ń", 
"њ" => "ń", 
"Љ" => "Ľ", 
"љ" => "ľ",
"Н҄" => "Ń",
"н҄" => "ń",
"Р҄" => "Ŕ",
"р҄ " => "ŕ",
"Л҄" => "Ľ",
"л҄" => "ľ",

); 
$text = strtr($text, $cu_isor9);

$ikratkoe = array(
"J" => "Ĭ", 
"j" => "ĭ", );

if ($_POST['ikratkoe'] == "0")
	{
	$text = strtr($text, $ikratkoe);
	}

$cu_isor9_jer2  = array(
"Ъ" => "ʺ", 
"ъ" => "ʺ", 
"Ь" => "ʹ", 
"ь" => "ʹ" );
$cu_isor9_jer3  = array(
"Ъ" => "Ŭ", 
"ъ" => "ŭ", 
"Ь" => "Ĭ", 
"ь" => "ĭ" );
if ($_POST['cu_isor9_jer'] == "2")
	{
	$text = strtr($text, $cu_isor9_jer2);
	}
elseif ($_POST['cu_isor9_jer'] == "3")
	{
	$text = strtr($text, $cu_isor9_jer3);
	}

$cu_isor9_omega1  = array(
"Ѡ" => "Ô", 
"ѡ" => "ô" );
$cu_isor9_omega2  = array(
"Ѡ" => "O", 
"ѡ" => "o" );
$cu_isor9_omega3  = array(
"Ѡ" => "W", 
"ѡ" => "w" );
$cu_isor9_x0  = array(
"Х" => "X", 
"х" => "x" );
if ($_POST['cu_isor9_omega'] == "2")
	{
	$text = strtr($text, $cu_isor9_omega2);
	}
elseif ($_POST['cu_isor9_omega'] == "3")
	{
	$text = strtr($text, $cu_isor9_omega3);
	}
else
	{
	$text = strtr($text, $cu_isor9_omega1);
	}

$cu_isor9_x1  = array(
"Х" => "Ch", 
"х" => "ch" ); 
if ($_POST['cu_isor9_x'] == "1")
	{
	$text = strtr($text, $cu_isor9_x1);
	}
else
	{
	$text = strtr($text, $cu_isor9_x0);
	}

$theta1  = array(
"Ѳ" => "Ḟ",
"ѳ" => "ḟ", );
$theta2  = array(
"Ѳ" => "Θ", 
"ѳ" => "θ",  );
$theta3  = array(
"Ѳ" => "Th", 
"ѳ" => "th",  );
$theta4  = array(
"Ѳ" => "T", 
"ѳ" => "t",  );
if ($_POST['theta'] == "2")
	{
	$text = strtr($text, $theta2);
	}
elseif ($_POST['theta'] == "3")
	{
	$text = strtr($text, $theta3);
	}
elseif ($_POST['theta'] == "4")
	{
	$text = strtr($text, $theta4);
	}
else
	{
	$text = strtr($text, $theta1);
	}

$cu_isor9_shch  = array(
"щ" => "št", 
"Щ" => "Št", );
$cu_isor9_sht  = array(
"щ" => "šč", 
"Щ" => "Šč", );
if ($_POST['schtsch'] == "1")
	{
	$text = strtr($text, $cu_isor9_shch);
	}
else
	{
	$text = strtr($text, $cu_isor9_sht);
	}




?>
