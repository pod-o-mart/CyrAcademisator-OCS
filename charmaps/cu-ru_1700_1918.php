<?php

if ($_POST['titlo'] == "1")
	{include ("titlo1.php");}
elseif ($_POST['titlo'] == "2")
	{include ("titlo2.php");}
if ($_POST['akzente_entfernen'] == "1" OR $_POST['akzente_entfernen'] == "2")
	{include ("titlo0.php");}
include ("vereinigung.php");

$cu_ru_1700_1918 = array(
"Ѕ" => "З", 
"ѕ" => "з", 
"Ꙃ" => "З", 
"ꙃ" => "з", 
"Ʒ" => "З", 
"ӡ" => "з", 
"Ꙁ" => "З", 
"ꙁ" => "з", 
"є" => "е", 
"Є" => "Е", 
"Ї" => "І", 
"ї" => "і", 
"ћ" => "Г", 
"Ћ" => "г", 
"Ѡ" => "О", 
"ѡ" => "о", 
"Ѿ" => "От", 
"ѿ" => "от", 
"Ѻ" => "О", 
"ѻ" => "о", 
"Ꙋ" => "У", 
"ꙋ" => "у", 
"Ѹ" => "У", 
"ѹ" => "у", 
"Ꙑ" => "Ы", 
"ꙑ" => "ы", 
"Ꙓ" => "Ѣ", 
"ꙓ" => "ѣ", 
"Ѫ" => "У", 
"ѫ" => "у", 
"Ѭ" => "Ю", 
"ѭ" => "ю", 
"Ꙗ" => "Я", 
"ꙗ" => "я", 
"Ѧ" => "Я", 
"ѧ" => "я", 
"Ѩ" => "Я", 
"ѩ" => "я", 
"Ѥ" => "Е",  //
"ѥ" => "е",  //
"Ѯ" => "Кс", 
"ѯ" => "кс", 
"Ѱ" => "Пс", 
"ѱ" => "пс", 
"Ѷ" => "Ѵ", 
"ѷ" => "ѵ", 
"Ҁ" => "90", 
"ҁ" => "90", 
"Њ" => "Н",   //unklar
"њ" => "н",   //unklar
"Љ" => "Л",   //unklar
"љ" => "л",  //unklar
"Н҄" => "Нь",  //unklar
"Р҄" => "Рь",  //unklar
"Л҄" => "Ль",  //unklar
"н҄" => "нь",  //unklar
"р҄ " => "рь",  //unklar
"л҄" => "ль",  //unklar
  );


$ou = array(
"оу" => "у", 
"Оу" => "У", 
"ОУ" => "У", );

$ikratkoe = array(
"Й" => "Й", 
"й" => "й", );

$text = strtr($text, $cu_ru_1700_1918);
if ($_POST['ou'] == "2")
	{
	$text = strtr($text, $ou);
	}
if ($_POST['ikratkoe'] == "0")
	{
	$text = strtr($text, $ikratkoe);
	}

?>