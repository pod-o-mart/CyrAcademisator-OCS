<?php

$text = $_POST['text'];
$eingabe = $_POST['text'];
$schriftbild = $_POST['schrift'];
//testfeld
if ($_POST['experimental'] == "1") {
}
//test ende

//Bookmarklet
if (($_POST['bookmarklet'] == "1") AND ($_POST['quelltext'] == "cu")) {
	$schriftbild = "1";
	}
//Bookmarklet Ende


if ($_POST['transliteration'] != NULL )
	{
	include ("charmaps/bereinigung.php");
	if($_POST['quelltext'] == "cu" and $_POST['zieltext'] == "isor9")
		{include ("charmaps/cu-isor9.php");}
	if($_POST['quelltext'] == "cu" and $_POST['zieltext'] == "alalc")
		{include ("charmaps/cu-alalc.php");}
	if($_POST['quelltext'] == "cu" and $_POST['zieltext'] == "ru_1700_1918")
		{include ("charmaps/cu-ru_1700_1918.php");}
	if($_POST['quelltext'] == "isor9")
		{include ("charmaps/isor9-cu.php");}
	if($_POST['quelltext'] == "alalc")
		{include ("charmaps/alalc-cu.php");}
	if($_POST['quelltext'] == "ru_1700_1918")
		{include ("charmaps/ru_1700_1918-cu.php");}
	if($_POST['quelltext'] == "hip")
		{include ("charmaps/hip-cu.php");}
	if($_POST['quelltext'] == "ucs")
		{include ("charmaps/ucs-cu.php");}

$akzente_entfernen2 = $_POST['akzente_entfernen'];
if($_POST['erw'] != "1")
	{
	$akzente_entfernen2 = "1";
	}
if (($akzente_entfernen2 != "0") AND $_POST['zieltext'] != "cu")
	{
	include ("charmaps/akzente-entfernen.php");
	}
if ($_POST['interpunktion'] == "1")
	{
	include ("charmaps/interpunktion.php");
	}
$ausgabe = $text;
}?>

<?php if (!isset($_POST['startabfrage'])) { ?>
<h3><?php echo $hinw_willkommen; ?></h3><strong>
<?php } ?>
<?php if (!isset($_POST['startabfrage'])){
echo $hinw_startabfrage;}
if ((isset($_POST['startabfrage'])) AND ($_POST['quelltext'] == $_POST['zieltext'])){
echo $hinw_gleich;}
 ?>
</strong>
<form name="languagepicker" action="" method="POST">
	<select title="Language" size="1" class="raender form-control" style="" name="language">
		<option value="da-DK" <?php if ($lang=="da-DK") {echo "selected";} ?>>Dansk</option>
		<option value="de-DE" <?php if ($lang=="de-DE") {echo "selected";} ?>>Deutsch</option>
		<option value="en-GB" <?php if (($lang=="en-GB") OR (!isset ($lang))) {echo "selected";} ?>>English</option>
		<option value="ru-RU" <?php if ($lang=="ru-RU") {echo "selected";}?>>Русский</option>
	</select>
	<input type="submit" name="sprachauswahl" class="absenden btn" style="" value=" ✔ ">
</form>
<div style="clear:both;margin-bottom:10px;"></div>
		<form name="frm" action="index.php" method="POST">
			<select class="form-control" name="quelltext" title="<?php echo $quelltext ?>" size="1" style="vertical-align:middle; max-width:calc(50% - 70px);position:relative;float:left;">
				<optgroup label="<?php echo $ausw_von; ?>">
					<option value="cu"<?php if ($_POST['quelltext'] == "cu") {echo" selected";} ?>><?php echo $ausw_cu ?></option>
					<option value="isor9"<?php if ($_POST['quelltext'] == "isor9") {echo" selected";} ?>><?php echo $ausw_isor9 ?></option>
					<option value="alalc"<?php if ($_POST['quelltext'] == "alalc") {echo" selected";} ?>><?php echo $ausw_alalc ?></option>
					<option value="hip"<?php if ($_POST['quelltext'] == "hip") {echo" selected";} ?>><?php echo $ausw_hip ?></option>
					<option value="ucs"<?php if ($_POST['quelltext'] == "ucs") {echo" selected";} ?>><?php echo $ausw_ucs ?></option>
				</optgroup>
			</select>

		<img style="float:left;margin:10px;" align='middle' title='<?php echo $hinw_ausgabe_fehlt;?>' style='vertical-align:middle' src='style/pfeil.png'>
		
			<select class="form-control" name="zieltext" title="<?php echo $zieltext ?>" size="1" style="vertical-align:middle; max-width:calc(50% - 70px);float:left;">
				<optgroup label="<?php echo $ausw_nach; ?>">
					<option value="cu"<?php if ($_POST['zieltext'] == "cu") {echo" selected";} ?>><?php echo $ausw_cu ?></option>
					<option value="ru_1700_1918"<?php if ($_POST['zieltext'] == "ru_1700_1918") {echo" selected";} ?>><?php echo $ausw_ru_1700_1918 ?></option>
					<option value="isor9"<?php if (($_POST['zieltext'] == "isor9")  OR !isset($_POST['startabfrage'])) {echo" selected";} ?>><?php echo $ausw_isor9 ?></option>
					<option value="alalc"<?php if ($_POST['zieltext'] == "alalc") {echo" selected";} ?>><?php echo $ausw_alalc ?></option>
					<option value="hip"<?php if ($_POST['zieltext'] == "hip") {echo" selected";} ?><?php if ($_POST['experimental'] != "1") {echo" disabled";} ?>><?php echo $ausw_hip ?></option>
					<option value="ucs"<?php if ($_POST['zieltext'] == "ucs") {echo" selected";} ?><?php if ($_POST['experimental'] != "1") {echo" disabled";} ?>><?php echo $ausw_ucs ?></option>
				</optgroup>
		<input class="btn" name="richtung" type="submit" style="vertical-align:bottom;margin: 2px 0 0 5px;float:left;" value="<?php if (!isset($_POST['startabfrage'])) {echo $anwenden;} else {echo$aendern;} ?>" >
		<input class="btn" style="float:left;" type="hidden" name="startabfrage" value="1">
<div style="clear:both;"></div>
<?php if ($_POST['quelltext'] != $_POST['zieltext'])
	{if ($_POST['quelltext'] == "cu")
		{
 		?>
		<input class="btn" type="button" name="beispielstext" style="text-align:left; vertical-align:bottom; float:left;" value="<?php echo $beispiel ?>" onclick="this.form.text.value='Ѹ҆зрѣ́въ же наро́ды, взы́де на горꙋ̀: и҆ сѣ́дшꙋ є҆мꙋ̀, пристꙋпи́ша къ немꙋ̀ оу҆чн҃цы̀ є҆гѡ̀.\nИ҆ ѿве́рзъ оу҆ста̀ своѧ̑, оу҆ча́ше и҆̀хъ, гл҃ѧ:\nбл҃же́ни ни́щіи дꙋ́хомъ: ꙗ҆́кѡ тѣ́хъ є҆́сть црⷭтвіе нбⷭное.\nБл҃же́ни пла́чꙋщіи: ꙗ҆́кѡ ті́и оу҆тѣ́шатсѧ.\nБл҃же́ни кро́тцыи: ꙗ҆́кѡ ті́и наслѣ́дѧтъ зе́млю.'"><?php
		}
	elseif ($_POST['quelltext'] == "hip")
		{
 		?>
		<input class="btn" type="button" name="beispielstext" style="text-align:left; vertical-align:bottom; float:left;" value="<?php echo $beispiel ?>" onclick="this.form.text.value='О_у=зрjь\'въ же наро\'ды, взы\'де на гору`: и= сjь\'дшу <е>=му`, приступи\'ша къ нему` о<у>=чн~цы` <е>=гw`.\nИ= w\\тве\'рзъ о<у>=ста` своя^, о<у>=ча\'ше и=`хъ, гл~я:\nбл~же\'ни ни\'щiи ду\'хомъ: jа=\'кw тjь\'хъ <е>=\'сть цр\\ствiе нб\\сное.\nБл~же\'ни пла\'чущiи: jа=\'кw тi\'и о<у>=тjь\'шатся.\nБл~же\'ни кро\'тцыи: jа=\'кw тi\'и наслjь\'дятъ зе\'млю.'"><?php
		}
	elseif ($_POST['quelltext'] == "isor9")
		{
 		?>
		<input class="btn" type="button" name="beispielstext" style="text-align:left; vertical-align:bottom; float:left;" value="<?php echo $beispiel ?>" onclick="this.form.text.value='Uzrě́vъ že naródy, vzýde na gorù: i sě́dšu emù, pristupíša kъ nemù oučenicỳ egồ. \nI ôtvérzъ ustà svoę, učáše ìchъ, glagólę: \nblažéni níštіi dúchomъ: jákô tě́chъ éstь cárstvіe nebésnoe. \nBlažéni pláčuštіi: jákô tі́i utě́šatsę. \nBlažéni krótcyi: jákô tі́i naslě́dętъ zémlju.'"><?php
		}
	elseif ($_POST['quelltext'] == "alalc")
		{
 		?>
		<input class="btn" type="button" name="beispielstext" style="text-align:left; vertical-align:bottom; float:left;" value="<?php echo $beispiel ?>" onclick="this.form.text.value='Uzrěvʺ zhe narodȳ, vzȳde na gorū: i sědshū emū, pristūpisha kʺ nemū uchenit͡sȳ egō. \nI ō͡tverzʺ usta svoę, uchashe ikhʺ, glagolę: \nblazheni nishtīi dūkhomʺ: i͡akō těkhʺ estʹ t͡sarstvīe nebesnoe. \nBlazheni plachūshtīi: i͡akō tīi utěshatsę. \nBlazheni krott͡sȳi: i͡akō tīi naslědętʺ zemli͡u.'"><?php
		}
	elseif ($_POST['quelltext'] == "ucs")
		{
 		?>
 			</select><div style="clear:both">
		<input class="btn" type="button" name="beispielstext" style="text-align:left; vertical-align:bottom; float:left;" value="<?php echo $beispiel ?>" onclick="this.form.text.value='Ўзрёвъ же нар0ды, взhде на горY: и3 сёдшу є3мY, при­ступи1ша къ немY ўчн7цы2 є3гw2.\nИ# t­вeрзъ ўстA сво‰, ўчa­ше и5хъ, гlz:\nбlжeни ни1щіи дyхомъ: ћкw тёхъ є4сть цр\­ст­віе нбcное.\nБlжeни плaчущіи: ћкw тjи ўтёшат­сz.\nБlжeни кр0тцыи: ћкw тjи наслёдzтъ зeмлю.'"><?php
		}
	} ?>

		<?php if ((isset($_POST['startabfrage'])) AND ($_POST['quelltext'] != $_POST['zieltext'])){ ?>
		<textarea data-disable-touch-keyboard="" id="text" name="text" class="keyboardInput" style="font-size:16px;spacing-right:4px;margin-top:10px; clear:left;<?php if (($schriftbild == "1") AND ($_POST['quelltext'] == "cu")) { ?>font-family:'Monomakh Unicode'!important; <?php } elseif ($schriftbild == "3")  { ?>font-family:'FiraSlav'!important; <?php } else { ?> font-family:'OldStandardRegular'; <?php } ?> " rows="8" value="hinweis" onFocus="if(this.value=='<?php echo $hinw_quelle_eingeben;?>') this.value=''" ><?php if ($eingabe == NULL) {echo $hinw_quelle_eingeben;} else {echo $eingabe;}?></textarea>
		<div style="text-align:right;">
<input class="btn"  name="transliteration" type="submit" value="<?php echo $transliteration;?>" ></div>
		<?php } ?>

		<?php if ((isset($_POST['startabfrage'])) AND ($_POST['quelltext'] != $_POST['zieltext'])){ ?>
		<textarea data-disable-touch-keyboard="" id="ausgabe" name="ausgabe" class="keyboardInput" style="font-size:16px;margin-top:10px;clear:left;<?php if (($schriftbild == "1") AND ($_POST['zieltext'] == "cu") OR ($eingabe == NULL) OR ($eingabe == $hinw_quelle_eingeben)) { ?>font-family:'Monomakh Unicode'!important; <?php } elseif ($schriftbild == "3")  { ?>font-family:'FiraSlav'!important; <?php } else { ?> font-family:'OldStandardRegular'; <?php } ?> " rows="8" <?php if (($ausgabe == NULL) OR ($eingabe == $hinw_quelle_eingeben)) {echo (" disabled ");} ?> ><?php if ($ausgabe == NULL) {echo $hinw_zieltext;} elseif ($eingabe == $hinw_quelle_eingeben) {echo $hinw_zieltext;} else {echo $ausgabe;}?></textarea>
		<?php } ?>


<h3><?php echo $erw_einst;?></h3>
	<h4><?php echo $erw_einst_allgemein;?></h4>
<div style="float:left;position:relative;">
	<select class="form-control" style="width: auto;" name="schrift" size="4">
		<optgroup label="<?php echo $ausw_schrift; ?>">
			<option class="ksl" value="1"<?php if (($schriftbild == "1") OR ($schriftbild == NULL)) {echo" selected";} ?>>Словѣньска аꙁъбоукꙑ</option>
			<option class="grzdk" value="2"<?php if ($schriftbild == "2") {echo" selected";} ?>>Гражданский шрифт</option>
			<option class="monospace" title="<?php echo $ausw_schrift_monospace_title; ?>" value="3"<?php if ($schriftbild == "3") {echo" selected";} ?>><?php echo $ausw_schrift_monospace; ?></option>
		</optgroup>
	</select>
</div>
<?php echo $install_font; ?>
<div style="clear:both;"></div>
<?php if (isset($_POST['startabfrage']))
	{ ?>
<input class="btn"  name="transliteration" type="submit" value="<?php echo $anwenden;?>" >
	<?php } ?>


<?php if (isset($_POST['startabfrage']))
	{ ?>


	<?php } ?>


	<?php if ((isset($_POST['startabfrage'])) AND ($_POST['quelltext'] != $_POST['zieltext']))
		{
		if($_POST['zieltext'] == "isor9")
			{
			include ("erweitert/cu-isor9_erw.php");
 			?>
			<input type="hidden" name="erw" value="1"> <?php
			}
		if($_POST['zieltext'] == "alalc")
			{		
			include ("erweitert/cu-alalc_erw.php");
 			?>
			<input type="hidden" name="erw" value="1"> <?php
			}
		if($_POST['zieltext'] == "ru_1700_1918")
			{		
			include ("erweitert/cu-ru_1700_1918_erw.php");
 			?>
			<input type="hidden" name="erw" value="1"> <?php
			}
		if(($_POST['zieltext'] == "cu") AND ($_POST['quelltext'] == "isor9"))
			{
			include ("erweitert/isor9-cu_erw.php");
 			?>
			<input type="hidden" name="erw" value="1"> <?php
			}
		if(($_POST['zieltext'] == "cu") AND ($_POST['quelltext'] == "alalc"))
			{
			include ("erweitert/alalc-cu_erw.php");
 			?>
			<input type="hidden" name="erw" value="1"> <?php
			}
		} ?>
<!--<input type="checkbox" name="experimental" value="1"<?php if ($_POST['experimental'] == "1") {echo" checked";} ?>>experimental mode</input>-->
</form>
<?php if (/*($_POST['experimental'] == "1") AND */(!isset($_POST['startabfrage']))) { 
require "examples/a.php";
 } ?>

<p><a href="changelog.html">Changelog</a></p>



<?php if ( array_key_exists('tmpl', $_GET) ){
	if ($lang == "da-DK")
	{ ?><p style="margin-top:50px;">Kilde: <a target="_top" href="https://github.com/pod-o-mart/CyrAcademisator-OCS">CyrAcademisator-OCS - Oldkirkeslavisk translitteration</a></p>
	<?php }
	elseif ($lang == "ru-RU")
	{ ?><p style="margin-top:50px;">Источник: <a target="_top" href="https://github.com/pod-o-mart/CyrAcademisator-OCS">CyrAcademisator-OCS - Инструмент для транслитерации старославянских текстов</a></p>
	<?php }
	else
	{ ?><p style="margin-top:50px;">Source: <a target="_top" href="https://github.com/pod-o-mart/CyrAcademisator-OCS">CyrAcademisator-OCS - Russian transliteration</a></p>
	<?php }
} ?>

<?php
/////////// Log ////////////////
$datum=date("d.m.Y:");
$zeit=date("H:i:s");
$ip=getenv("REMOTE_ADDR");
$site = $_SERVER['REQUEST_URI'];
$monate = array(1=>"Januar", 2=>"Februar", 3=>"Maerz", 4=>"April", 5=>"Mai", 6=>"Juni", 7=>"Juli", 8=>"August", 9=>"September", 10=>"Oktober", 11=>"November", 12=>"Dezember");
$monat = date("n");
$jahr = date("y");
$dateiname="log/log_$monate[$monat]_$jahr.txt";
if (($ip != ('194.255.31.3')) AND ($ausgabe != NULL)){
$q1 = $_POST['quelltext'];
$z1 = $_POST['zieltext'];
$eintragen="[$datum$zeit]\nInput:$q1 Output:$z1\n Quelltext:\n$eingabe\n Zieltext:\n$text\n$site\n$ip \n ------------\n\n";
$datei=fopen($dateiname,"a");
fputs($datei,"$eintragen\n");
fclose($datei);
}
/////////// Log Ende ////////////////
?>


<?php if (!isset($_POST['startabfrage']))
	{ ?>
<hr>


<?php } ?>

