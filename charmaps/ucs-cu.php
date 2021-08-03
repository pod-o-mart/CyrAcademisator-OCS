<?php
 /* to-do
 - \u-Problem beseitigen, vielleicht mit £$€?
 - diakritika und interpunktion an andere maps anpassen
*/

$ucs_cu = array(
	"!" => "\u0021",
	"#" => "\u0486",
	"\$" => "\u0486" . "\u0301",
	"%" => "\u0486" . "\u0300",
	"&" => "\u0483",
	"(" => "\u0028",
	")" => "\u0029",
	"*" => "\u002A",
	"+" => "\u2DE1", # combining BE
	"," => "\u002C",
	"-" => "\u002D",
	"." => "\u002E",
	"/" => "\u002F",
	"0" => "\u043E" . "\u0301",
	"1" => "\u0301",
	"2" => "\u0300",
	"3" => "\u0486",
	"4" => "\u0486" . "\u0301",
	"5" => "\u0486" . "\u0300",
	"6" => "\u0311", # combining inverted breve
	"7" => "\u0483", # titlo
	"8" => "\u033E", # combining vertical tilde
	"9" => "\u0436" . "\u0483", # zhe with titlo above
	":" => "\u003A",
	";" => "\u003B",
	"<" => "\u2DEF", # combining HA
	"=" => "\u2DE9", # combining EN
	">" => "\u2DEC", # combining ER
	"?" => "\u2DF1", # combining CHE
	"@" => "\u0300",
	"A" => "\u0430" . "\u0300", # latin A maps to AZ with grave accent
	"B" => "\u0463" . "\u0311", # latin B maps to Yat' with inverted breve
	"C" => "\u2DED", # combining ES
	"D" => "\u0434" . "\u2DED",
	"E" => "\u0435" . "\u0300", # latin E maps to e with grave accent
	"F" => "\u0472", # F maps to THETA
	"G" => "\u0433" . "\u0483", # G maps to ge with TITLO
	"H" => "\u0461" . "\u0301", # latin H maps to omega with acute accent
	"I" => "\u0406",
	"J" => "\u0456" . "\u0300", 
	"K" => "\uA656" . "\u0486", # YA with psili
	"L" => "\u043B" . "\u2DE3", # el with cobining de
	"M" => "\u0476", # capital IZHITSA with izhe titlo
	"N" => "\u047A" . "\u0486", # capital WIDE ON with psili
	"O" => "\u047A", # just capital WIDE ON
	"P" => "\u0470", # capital PSI
	"Q" => "\u047C", # capital omega with great apostrophe
	"R" => "\u0440" . "\u0483", # lowercase re with titlo
	"S" => "\u0467" . "\u0300", # lowercase small yus with grave
	"T" => "\u047E", # capital OT
	"U" => "\u041E" . "\u0443", # diagraph capital UK
	"V" => "\u0474", # capital IZHITSA
	"W" => "\u0460", # capital OMEGA
	"X" => "\u046E", # capital XI
	"Y" => "\uA64B" . "\u0300", # monograph uk with grave
	"Z" => "\u0466", # capital SMALL YUS
	"[" => "\u005B",
	"\\" => "\u0483", # yet another titlo 
	"]" => "\u005D",
	"^" => "\u0311", # combining inverted breve
	"_" => "\u033E", # yet another yerik
	"a" => "\u0430" . "\u0301", # latin A maps to AZ with acute accent
	"b" => "\u2DEA", # combining ON
	"c" => "\u2DED", # combining ES
	"d" => "\u2DE3", # combining DE
	"e" => "\u0435" . "\u0301", # latin E maps to e with acute accent
	"f" => "\u0473", # lowercase theta
	"g" => "\u2DE2", # combining ge
	"h" => "\u044B" . "\u0301", # ery with acute accent
	"i" => "\u0456",
	"j" => "\u0456" . "\u0301", # i with acute accent
	"k" => "\uA657" . "\u0486", # iotaed a with psili
	"l" => "\u043B" . "\u0483", # el with titlo
	"m" => "\u0477", # izhitsa with izhe titlo
	"n" => "\u047B" . "\u0486", # wide on with psili
	"o" => "\u047B", # wide on
	"p" => "\u0471", # lowercase psi
	"q" => "\u047D", # lowercase omega with great apostrophe
	"r" => "\u0440" . "\u2DED", # lowercase er with combining es
	"s" => "\u0467" . "\u0301", # lowercase small yus with acute accent
	"t" => "\u047F", # lowercase ot
	"u" => "\u043E" . "\u0443", # diagraph uk
	"v" => "\u0475", # lowercase izhitsa
	"w" => "\u0461", # lowercase omega
	"x" => "\u046F", # lowercase xi
	"y" => "\uA64B" . "\u0301", # monograph uk with acute accent
	"z" => "\u0467", # lowercase small yus
	"{" => "\uA64B" . "\u0311", # monograph uk with inverted breve
	"|" => "\u0467" . "\u0486" . "\u0300", # lowercase small yus with apostroph
	"}" => "\u0438" . "\u0483", # the numeral eight
	"~" => "\u0301", # yet another acute accent
	### SECOND HALF IS THE CYRILLIC BLOCK
	"Ђ" => "\u0475" . "\u0301", # lowercase izhitsa with acute
	"Ѓ" => "\u0410" . "\u0486" . "\u0301", # uppercase A with psili and acute
	"‚" => "\u201A",
	"ѓ" => "\u0430" . "\u0486" . "\u0301", # lowercase A with psili and acute
	"„" => "\u201E",
	"…" => "\u046F" . "\u0483", # the numberal sixty
	"†" => "\u0430" . "\u0311", # lowercase a with inverted breve
	"‡" => "\u0456" . "\u0311", # lowercase i with inverted breve
	"€" => "\u2DE5", # combining ze
	"‰" => "\u0467" . "\u0311", # lowercase small yus with inverted breve
	"Љ" => "\u0466" . "\u0486", # upercase small yus with psili
	"‹" => "\u0456" . "\u0483", # the numeral ten
	"Њ" => "\u0460" . "\u0483", # capital OMEGA with psili
	"Ќ" => "\u041E" . "\u0443" . "\u0486" . "\u0301", # diagraph uk with apostroph
	"Ћ" => "\uA656" . "\u0486" . "\u0301", # uppercase Iotated A with apostroph
	"Џ" => "\u047A" . "\u0486" . "\u0301", # uppercase Round O with apostroph
	"ђ" => "\u0475" . "\u2DE2", # lowercase izhitsa with combining ge
	"‘" => "\u2018",
	"’" => "\u2019",
	"“" => "\u201C",
 	"”" => "\u201D",
 	"•" => "\u2DE4", # combining zhe
	"–" => "\u2013",
 	"—" => "\u2014",
 	"™" => "\u0442" . "\u0483",
	"љ" => "\u0467" . "\u0486", # lowercase small yus with psili
	"›" => "\u0475" . "\u0311", # izhitsa with inverted breve
	"њ" => "\u0461" . "\u0483", # lowercase omega with psili
	"ќ" => "\u043E" . "\u0443" . "\u0486" . "\u0301", # diagraph uk with apostroph
 	"ћ" => "\uA657" . "\u0486" . "\u0301", # lowercase iotaed a with apostroph
 	"џ" => "\u047B" . "\u0486" . "\u0301", # lowercase Round O with apostroph
	"Ў" => "\u041E" . "\u0443" . "\u0486", # Capital Diagraph Uk with psili
	"ў" => "\u043E" . "\u0443" . "\u0486", # lowercase of the above
	"Ј" => "\u0406" . "\u0486" . "\u0301", # Uppercase I with apostroph
	"¤" => "\u0482", # cyrillic thousands sign
	"Ґ" => "\u0410" . "\u0486", # capital A with psili
	"¦" => "\u0445" . "\u0483", # lowercase kha with titlo
	"§" => "\u0447" . "\u0483", # the numeral ninety
	"Ё" => "\u0463" . "\u0300", # lowecase yat with grave accent
	"©" => "\u0441" . "\u0483", # the numeral two hundred
	"«" => "\u00AB", 
	"¬" => "\u00AC",
	"®" => "\u0440" . "\u2DE3", # lowercase er with dobro titlo
	"Ї" => "\u0406" . "\u0486",
	"°" => "\uA67E", # kavyka
	"±" => "\uA657" . "\u0486" . "\u0300",
	"І" => "\u0406",
	"і" => "\u0456" . "\u0308",
	"ґ" => "\u0430" . "\u0486",
	"µ" => "\u0443", # small letter u (why encoded at the micro sign?!"
	"¶" => "\u00B6", # paragraph sign
	"·" => "\u00B7", # center dot
	"ё" => "\u0463" . "\u0301", # lowercase yat with acute accent
	"№" => "\u0430" . "\u0483", # the numeral one
	"є" => "\u0454", # wide E
	"»" => "\u00BB",
	"ј" => "\u0456" . "\u0486" . "\u0301", # lowercase i with apostroph
	"Ѕ" => "\u0405",
	"ѕ" => "\u0455",
	"ї" => "\u0456" . "\u0486", # lowercase i with psili
	"А" => "\u0410",
	"Б" => "\u0411",
 	"В" => "\u0412",
	"Г" => "\u0413",
	"Д" => "\u0414",
	"Е" => "\u0415",
	"Ж" => "\u0416",
	"З" => "\u0417",
	"И" => "\u0418",
	"Й" => "\u0419",
	"К" => "\u041A",
	"Л" => "\u041B",
	"М" => "\u041C",
	"Н" => "\u041D",
	"О" => "\u041E",
	"П" => "\u041F",
 	"Р" => "\u0420",
	"С" => "\u0421",
	"Т" => "\u0422",
	"У" => "\u0423",
	"Ф" => "\u0424",
	"Х" => "\u0425",
	"Ц" => "\u0426",
	"Ч" => "\u0427",
	"Ш" => "\u0428",
	"Щ" => "\u0429",
	"Ъ" => "\u042A",
	"Ы" => "\u042B",
	"Ь" => "\u042C",
	"Э" => "\u0462", # capital yat
	"Ю" => "\u042E",
	"Я" => "\uA656", # capital Iotified A
	"а" => "\u0430",
	"б" => "\u0431",
	"в" => "\u0432",
	"г" => "\u0433",
	"д" => "\u0434",
	"е" => "\u0435",
	"ж" => "\u0436",
	"з" => "\u0437",
	"и" => "\u0438",
	"й" => "\u0439",
	"к" => "\u043A",
	"л" => "\u043B",
	"м" => "\u043C",
	"н" => "\u043D",
	"о" => "\u043E",
	"п" => "\u043F",
  	"р" => "\u0440",
	"с" => "\u0441",
	"т" => "\u0442",
	"у" => "\uA64B", # monograph Uk (why?!"
	"ф" => "\u0444",
	"х" => "\u0445",
	"ц" => "\u0446",
	"ч" => "\u0447",
	"ш" => "\u0448",
	"щ" => "\u0449",
	"ъ" => "\u044A",
	"ы" => "\u044B",
	"ь" => "\u044C",
	"э" => "\u0463", # lowercase yat
	"ю" => "\u044E",
	"я" => "\uA657" # iotaed a

);

$text = strtr($text, $ucs_cu);
$text = json_encode($text);
$text = str_replace('\\\\', '\\', $text);
$text = json_decode($text);
$text = str_replace('U', 'Ѫ', $text);
$text = str_replace('u', 'ѫ', $text);

if ($_POST['titlo'] == "2")
	{
	include ("abk_cu.php");
	}
if($_POST['zieltext'] == "isor9")
	{
	include ("cu-isor9.php");
	include ("vereinigung.php");
	}
if($_POST['zieltext'] == "alalc")
	{
	include ("cu-alalc.php");
	include ("vereinigung.php");
	}
if($_POST['zieltext'] == "ru_1700_1918")
	{
	include ("cu-ru_1700_1918.php");
	include ("vereinigung.php");
	}
?>
