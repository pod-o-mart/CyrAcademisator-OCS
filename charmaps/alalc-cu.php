<?php

$alalc_cu = array(
"A" => "А", 
"a" => "а", 
"B" => "Б", 
"b" => "б", 
"V" => "В", 
"v" => "в", 
"G" => "Г", 
"g" => "г", 
"D" => "Д", 
"d" => "д", 
"Ë" => "Ё", 
"ë" => "ё", 
"Zh" => "Ж", 
"zh" => "ж", 
"Ĭ" => "Й", 
"ĭ" => "й",
"Ī" => "І", 
"ī" => "і", 
"Ǵ" => "ћ", 
"ǵ" => "Ћ", 
"K" => "К", 
"k" => "к", 
"L" => "Л", 
"l" => "л", 
"M" => "М", 
"m" => "м", 
"N" => "Н", 
"n" => "н", 
"ʺ" => "ъ", 
"Ō" => "Ѡ", 
"ō" => "ѡ", 
"Ō͡T" => "Ѿ", 
"ō͡t" => "ѿ", 
"P" => "П", 
"p" => "п", 
"R" => "Р", 
"r" => "р", 
"S" => "С", 
"s" => "с", 
"T" => "Т", 
"t" => "т", 
"Ū" => "Ꙋ", 
"ū" => "ꙋ", 
"F" => "Ф", 
"f" => "ф", 
"Kh" => "Х", 
"kh" => "х", 
"T͡S" => "Ц", 
"t͡s" => "ц", 
"Ch" => "Ч", 
"ch" => "ч", 
"Sh" => "Ш", 
"sh" => "ш", 
"ʹ" => "ь", 
"Ȳ" => "Ы", 
"ȳ" => "ы", 
"Y" => "Ꙑ", 
"y" => "ꙑ", 
"Ě" => "Ѣ", 
"ě" => "ѣ", 
"I͡Ě" => "Ꙓ", 
"i͡ě" => "ꙓ", 
"Ė" => "Э", 
"ė" => "э", 
"I͡U" => "Ю", 
"i͡u" => "ю", 
"Ǫ" => "Ѫ", 
"ǫ" => "ѫ", 
"I͡Ǫ" => "Ѭ", 
"i͡ǫ" => "ѭ", 
"I͡A" => "Ꙗ", 
"i͡a" => "ꙗ", 
"Ę" => "Ѧ", 
"ę" => "ѧ", 
"I͡Ę" => "Ѩ", 
"i͡ę" => "ѩ", 
"I͡E" => "Ѥ", 
"i͡e" => "ѥ", 
"K͡S" => "Ѯ", 
"k͡s" => "ѯ", 
"P͡S" => "Ѱ", 
"p͡s" => "ѱ", 
"I͡A" => "Я", 
"i͡a" => "я", 
"Ḟ" => "Ѳ",
"ḟ" => "ѳ",
"Θ" => "Ѳ", 
"θ" => "ѳ",
"Th" => "Ѳ",
"th" => "ѳ",
"" => "Ѵ", 
"" => "ѵ", 
"Ẏ" => "Ѷ", 
"ẏ" => "ѷ", 
//"90" => "Ҁ", 
//"90" => "ҁ", 
"Nʹ" => "Н҄",
"Rʹ" => "Р҄",
"Lʹ" => "Л҄",
"nʹ" => "н҄",
"rʹ" => "р҄ ",
"lʹ" => "л҄",
);
$text = strtr($text, $alalc_cu);


if ($_POST['alalc_cu_e'] == "1")
	{
	$alalc_cu_e  = array(
	"E" => "Е", 
	"e" => "е"  );
	}
else
	{
	$alalc_cu_e  = array(
	"E" => "Є",
	"e" => "є"  );
	}
$text = strtr($text, $alalc_cu_e);

if ($_POST['alalc_cu_ze'] == "1")
	{
	$alalc_cu_ze  = array(
	"Z" => "Ꙁ", 
	"z" => "ꙁ" );
	}
else
	{
	$alalc_cu_ze  = array(
	"Z" => "З",
	"z" => "з" );
	}
$text = strtr($text, $alalc_cu_ze);

if ($_POST['alalc_cu_shch'] == "1")
	{
	$alalc_cu_shch  = array(
	"шч" => "щ", 
	"Шч" => "Щ",
	"ШЧ" => "Щ" );
	}
else
	{
	$alalc_cu_shch  = array(
	"шт" => "щ",
	"Шт" => "Щ",
	"ШТ" => "Щ"  );
	}
$text = strtr($text, $alalc_cu_shch);

if ($_POST['alalc_cu_omega'] == "1")
	{
	$alalc_cu_omega  = array(
	"O" => "Ѻ", 
	"o" => "ѻ" );
	} 
else
	{
	$alalc_cu_omega  = array(
	"O" => "О",
	"o" => "о" );
	} 
$text = strtr($text, $alalc_cu_omega);

if ($_POST['alalc_cu_uk'] == "1")
	{
	$alalc_cu_uk  = array(
	"U" => "У",
	"u" => "у" );
	}
else
	{
	$alalc_cu_uk  = array(
	"U" => "Ѹ", 
	"u" => "ѹ" );
	}
$text = strtr($text, $alalc_cu_uk);

if ($_POST['alalc_cu_dze'] == "1")
	{
	$alalc_cu_dze  = array(
	"Ż" => "Ѕ",
	"ż" => "ѕ" );
	}
else
	{
	$alalc_cu_dze  = array(
	"Ż" => "Ꙃ", 
	"ż" => "ꙃ" );
	}
$text = strtr($text, $alalc_cu_dze);

if ($_POST['alalc_cu_i'] == "1")
	{
	$alalc_cu_i  = array(
	"I" => "Ї", 
	"i" => "ї" );
	}
else
	{
	$alalc_cu_i  = array(
	"I" => "И",
	"i" => "и" );
	}
$text = strtr($text, $alalc_cu_i);

$text = preg_replace('{Ъ$|Ъ\s}',' ', $text);
$text = preg_replace('{ъ$|ъ\s}',' ', $text);

if ($_POST['titlo'] == "2")
	{include ("titlo2.php");}
elseif ($_POST['titlo'] == "1")
	{include ("titlo1.php");}
elseif ($_POST['titlo'] == "0")
	{include ("titlo0.php");}
if($_POST['zieltext'] == "isor9")
	{include ("cu-isor9.php");}
if($_POST['zieltext'] == "ru_1700_1918")
	{include ("cu-ru_1700_1918.php");}
?>
