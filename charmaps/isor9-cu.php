<?php
// Einzelbuchstaben nach hinten. Doppelte Buchstaben in einer Doppelgroß-Variante
$isor9_cu = array(
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
"Ž" => "Ж", 
"ž" => "ж", 
// "Z" => "Ʒ", 
// "z" => "ӡ", 
"J" => "Й",
"j" => "й",
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
"Ôt" => "Ѿ",
"ÔT" => "Ѿ",
"ôt" => "ѿ", 
"P" => "П", 
"p" => "п", 
"R" => "Р", 
"r" => "р", 
"S" => "С", 
"s" => "с", 
"T" => "Т", 
"t" => "т", 
"F" => "Ф", 
"f" => "ф", 
"X" => "Х", 
"x" => "х",
"Ch" => "Х", 
"CH" => "Х", 
"ch" => "х",
"Ô" => "Ѡ",
"ô" => "ѡ",
"W" => "Ѡ", 
"w" => "ѡ",
"C" => "Ц", 
"c" => "ц", 
"Č" => "Ч", 
"č" => "ч", 
"Š" => "Ш", 
"š" => "ш",
"ʺ" => "ъ", 
"ʹ" => "ь",
"Ŭ" => "Ъ", 
"ŭ" => "ъ", 
"Ĭ" => "Ь", 
"ĭ" => "ь",
"Ě" => "Ѣ", 
"ě" => "ѣ", 
"JĚ" => "Ꙓ", 
"Jě" => "Ꙓ", 
"jě" => "ꙓ", 
"Ė" => "Э", 
"ė" => "э", 
"JU" => "Ю",
"Ju" => "Ю", 
"ju" => "ю", 
"Ǫ" => "Ѫ", 
"ǫ" => "ѫ", 
"Jǫ" => "Ѭ", 
"JǪ" => "Ѭ", 
"jǫ" => "ѭ", 
"Ja" => "Ꙗ", 
"JA" => "Ꙗ", 
"ja" => "ꙗ", 
"Ę" => "Ѧ", 
"ę" => "ѧ", 
"Ję" => "Ѩ", 
"JĘ" => "Ѩ", 
"ję" => "ѩ", 
"Je" => "Ѥ", 
"je" => "ѥ", 
"Ḟ" => "Ѳ",
"ḟ" => "ѳ",
"Θ" => "Ѳ", 
"θ" => "ѳ",
"Th" => "Ѳ",
"TH" => "Ѳ",
"th" => "ѳ",
"Ẏ" => "Ѵ",    // oder i Mathews / ü Wiki
"ẏ" => "ѵ", 
//"Ẏ" => "Ѷ",   //unklar
//"ẏ" => "ѷ",   //unklar
//"90" => "Ҁ", 
//"90" => "ҁ", 
"Ń" => "Н҄",
"ń" => "н҄",
"Ŕ" => "Р҄",
"ŕ" => "р҄",
"Ľ" => "Л҄",
"ľ" => "л҄",
); 
$text = strtr($text, $isor9_cu);

if ($_POST['isor9_cu_ze'] == "1")
	{
	$isor9_cu_ze  = array(
	"Z" => "Ꙁ", 
	"z" => "ꙁ" );
	}
else
	{
	$isor9_cu_ze  = array(
	"Z" => "З",
	"z" => "з" );
	}
$text = strtr($text, $isor9_cu_ze);

if ($_POST['isor9_cu_omega'] == "1")
	{
	$isor9_cu_omega  = array(
	"O" => "Ѡ",
	"o" => "ѡ" );
	} 
elseif ($_POST['isor9_cu_omega'] == "2")
	{
	$isor9_cu_omega  = array(
	"O" => "Ѻ", 
	"o" => "ѻ" );
	} 
else
	{
	$isor9_cu_omega  = array(
	"O" => "О",
	"o" => "о" );
	} 
$text = strtr($text, $isor9_cu_omega);

if ($_POST['isor9_cu_e'] == "1")
	{
	$isor9_cu_e  = array(
	"E" => "Е", 
	"e" => "е"  );
	}
else
	{
	$isor9_cu_e  = array(
	"E" => "Є",
	"e" => "є"  );
	}
$text = strtr($text, $isor9_cu_e);

if ($_POST['isor9_cu_dze'] == "1")
	{
	$isor9_cu_dze  = array(
	"Dz" => "Ѕ",
	"DZ" => "Ѕ",
	"dz" => "ѕ",
	"Дз" => "Ѕ",
	"ДЗ" => "Ѕ",
	"дз" => "ѕ",
	"Дꙁ" => "Ѕ",
	"ДꙀ" => "Ѕ",
	"дꙁ" => "ѕ" );
	}
else
	{
	$isor9_cu_dze  = array(
	"Dz" => "Ꙃ",
	"DZ" => "Ꙃ",
	"dz" => "ꙃ",
	"Дꙁ" => "Ꙃ",
	"ДꙀ" => "Ꙃ",
	"дꙁ" => "ꙃ",
	"Дз" => "Ꙃ",
	"ДЗ" => "Ꙃ",
	"дз" => "ꙃ" );
	}
$text = strtr($text, $isor9_cu_dze);

if ($_POST['isor9_cu_i'] == "1")
	{
	$isor9_cu_i  = array(
	"І" => "І", 
	"і" => "і" );
	}
elseif ($_POST['isor9_cu_i'] == "2")
	{
	$isor9_cu_i  = array(
	"І" => "Ї", 
	"і" => "ї" );
	}
else
	{
	$isor9_cu_i  = array(
	"I" => "И",
	"i" => "и" );
	}
$text = strtr($text, $isor9_cu_i);

if ($_POST['isor9_cu_uk'] == "1")
	{
	$isor9_cu_uk  = array(
	"U" => "Ꙋ", 
	"u" => "ꙋ" );
	}
elseif ($_POST['isor9_cu_uk'] == "2")
	{
	$isor9_cu_uk  = array(
	"U" => "У",
	"u" => "у" );
	}
else
	{
	$isor9_cu_uk  = array(
	"U" => "Ѹ", 
	"u" => "ѹ" );
	}
$text = strtr($text, $isor9_cu_uk);


if ($_POST['isor9_cu_shch'] == "1")
	{
	$isor9_cu_shch  = array(
	"шч" => "щ", 
	"Шч" => "Щ",
	"ШЧ" => "Щ" );
	}
else
	{
	$isor9_cu_shch  = array(
	"шт" => "щ",
	"Шт" => "Щ",
	"ШТ" => "Щ"  );
	}
$text = strtr($text, $isor9_cu_shch);

if ($_POST['isor9_cu_y'] == "1")
	{
	$isor9_cu_y  = array(
	"Y" => "Ꙑ", 
	"y" => "ꙑ" );
	}
else
	{
	$isor9_cu_y  = array(
	"Y" => "Ы", 
	"y" => "ы" );
	}
$text = strtr($text, $isor9_cu_y);

if ($_POST['isor9_cu_ks'] == "1")
	{
	}
else
	{
	$isor9_cu_ks  = array(
	"Кс" => "Ѯ",
	"КС" => "Ѯ",
	"кс" => "ѯ", );
	}
$text = strtr($text, $isor9_cu_ks);

if ($_POST['isor9_cu_ps'] == "1")
	{
	}
else
	{
	$isor9_cu_ps = array(
	"Пс" => "Ѱ",
	"ПС" => "Ѱ",  
	"пс" => "ѱ", );
	}
$text = strtr($text, $isor9_cu_ps);


if ($_POST['titlo'] == "2")
	{include ("titlo2.php");}
elseif ($_POST['titlo'] == "1")
	{include ("titlo1.php");}
elseif ($_POST['titlo'] == "0")
	{include ("titlo0.php");}
if($_POST['zieltext'] == "alalc")
	{include ("cu-alalc.php");}
if($_POST['zieltext'] == "ru_1700_1918")
	{include ("cu-ru_1700_1918.php");}
?>
