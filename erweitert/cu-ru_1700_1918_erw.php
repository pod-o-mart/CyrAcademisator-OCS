
<h4><?php echo $erw_einst_output ?>: <?php echo $ausw_ru_1700_1918; ?></h4>
<?php if (($_POST['quelltext'] != "isor9") AND ($_POST['quelltext'] != "alalc")) { ?>
<select class="form-control" style="width: auto;float:left;" name="titlo" size="4">
	<optgroup label="<?php echo $titlo;?>">
     		<option value="2"<?php if ($_POST['titlo'] == "2" OR ($_POST['titlo'] == NULL)) {echo" selected";} ?>><?php echo $titlo_2;?> </option>
		<option value="1"<?php if ($_POST['titlo'] == "1") {echo" selected";} ?>><?php echo $titlo_1;?> </option>
     		<option value="0"<?php if ($_POST['titlo'] == "0") {echo" selected";} ?>><?php echo $titlo_0;?> </option>
	</optgroup>
</select>&nbsp;
<select class="form-control" style="width: auto;float:left;" name="akzente_entfernen" size="4">
	<optgroup label="<?php echo $diakritika;?>">
     		<option value="1"<?php if ($_POST['akzente_entfernen'] == "1" OR $akzente_entfernen2 == "1" OR ($_POST['akzente_entfernen'] == NULL)) {echo" selected";} ?>><?php echo $diakritika_1;?> </option>
		<option value="2"<?php if ($_POST['akzente_entfernen'] == "2" OR $akzente_entfernen2 == "2") {echo" selected";} ?>><?php echo $diakritika_2;?> </option>
     		<option value="0"<?php if ($_POST['akzente_entfernen'] == "0") {echo" selected";} ?>><?php echo $diakritika_0;?> </option>
	</optgroup>
</select>&nbsp;
<select class="form-control" style="width: auto;float:left;" name="interpunktion" size="3">
	<optgroup label="<?php echo $interpunktion;?>">
		<option value="1"<?php if (($_POST['interpunktion'] == "1")  OR ($_POST['interpunktion'] == NULL)) {echo" selected";} ?>><?php echo $interpunktion_1;?> </option>
		<option value="0"<?php if ($_POST['interpunktion'] == "0") {echo" selected";} ?>><?php echo $interpunktion_0;?> </option>
	</optgroup>
</select><div style="clear:both;"></div>
<select class="form-control" style="width: auto;float:left;" name="ou" size="2">
	<option value="2"<?php if ($_POST['ou'] == "2" OR ($_POST['ou'] == NULL)) {echo" selected";} ?>>"о-у" & ѹ = u</option>
	<option value="1"<?php if (($_POST['ou'] == "1")) {echo" selected";} ?>>"о-у"= ou / ѹ = u</option>
</select>&nbsp; 
<select class="form-control" style="width: auto;float:left;" name="ikratkoe" size="2">
	<option value="1"<?php if ($_POST['ikratkoe'] == "1" OR ($_POST['ikratkoe'] == NULL)) {echo" selected";} ?>>й = и краткое</option>
	<option value="0"<?php if (($_POST['ikratkoe'] == "0")) {echo" selected";} ?>>й = и +&nbsp;&nbsp; ̆</option>
</select>
 <?php } ?>
<?php if (($_POST['quelltext'] == "isor9") OR ($_POST['quelltext'] == "alalc")) { ?>
<select class="form-control" style="width: auto;float:left;" name="akzente_entfernen" size="3">
	<optgroup label="<?php echo $betonung;?>">
		<option value="1"<?php if (($_POST['akzente_entfernen'] == "1")  OR ($_POST['akzente_entfernen'] == NULL)) {echo" selected";} ?>><?php echo $betonung_1;?> </option>
		<option value="2"<?php if ($_POST['akzente_entfernen'] == "2") {echo" selected";} ?>><?php echo $betonung_2;?> </option>
	</optgroup>
</select>
 <?php } ?>
<div style="clear:both;"></div>
<input class="btn" name="transliteration" type="submit" value="<?php echo $anwenden;?>" >
