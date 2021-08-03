<h4><?php echo $erw_einst_output ?>: <?php echo $ausw_cu; ?></h4>
<select class="form-control" style="width: auto;float:left;" name="alalc_cu_omega" size="2">
     	<option value="0"<?php if ($_POST['alalc_cu_omega'] == "0" OR ($_POST['alalc_cu_omega'] == NULL)) {echo" selected";} ?>>o = о</option>
     	<option value="1"<?php if ($_POST['alalc_cu_omega'] == "1") {echo" selected";} ?>>o = ѻ</option>
</select>&nbsp;
<select class="form-control" style="width: auto;float:left;" name="alalc_cu_i" size="2">
     	<option value="0"<?php if ($_POST['alalc_cu_i'] == "0" OR ($_POST['alalc_cu_i'] == NULL)) {echo" selected";} ?>>i = и</option>
     	<option value="1"<?php if ($_POST['alalc_cu_i'] == "1") {echo" selected";} ?>>i = ї</option>
</select>&nbsp;
<select class="form-control" style="width: auto;float:left;" name="alalc_cu_uk" size="2">
     	<option value="0"<?php if ($_POST['alalc_cu_uk'] == "0" OR ($_POST['alalc_cu_uk'] == NULL)) {echo" selected";} ?>>u = ѹ</option>
     	<option value="1"<?php if ($_POST['alalc_cu_uk'] == "1") {echo" selected";} ?>>u = у</option>
</select>&nbsp;
<select class="form-control" style="width: auto;float:left;" name="alalc_cu_e" size="2">
     	<option value="0"<?php if ($_POST['alalc_cu_e'] == "0" OR ($_POST['alalc_cu_e'] == NULL)) {echo" selected";} ?>>e = є</option>
	<option value="1"<?php if ($_POST['alalc_cu_e'] == "1") {echo" selected";} ?>>e = е</option>
</select>&nbsp;
<select class="form-control" style="width: auto;float:left;" name="alalc_cu_dze" size="2">
     	<option value="0"<?php if ($_POST['alalc_cu_dze'] == "0" OR ($_POST['alalc_cu_dze'] == NULL)) {echo" selected";} ?>>ż = ꙃ</option>
	<option value="1"<?php if ($_POST['alalc_cu_dze'] == "1") {echo" selected";} ?>>ż = ѕ</option>
</select>&nbsp;
<select class="form-control" style="width: auto;float:left;" name="alalc_cu_ze" size="2">
     	<option value="0"<?php if ($_POST['alalc_cu_ze'] == "0" OR ($_POST['alalc_cu_ze'] == NULL)) {echo" selected";} ?>>z = з</option>
	<option value="1"<?php if ($_POST['alalc_cu_ze'] == "1") {echo" selected";} ?>>z = ꙁ</option>
</select>&nbsp;
<select class="form-control" style="width: auto;float:left;" name="alalc_cu_shch" size="2">
     	<option value="0"<?php if ($_POST['alalc_cu_shch'] == "0" OR ($_POST['alalc_cu_shch'] == NULL)) {echo" selected";} ?>>sht = щ</option>
	<option value="1"<?php if ($_POST['alalc_cu_shch'] == "1") {echo" selected";} ?>>shch = щ</option>
</select>
<div style="clear:both;"></div>
<input class="btn" name="transliteration" type="submit" value="<?php echo $anwenden;?>" >
