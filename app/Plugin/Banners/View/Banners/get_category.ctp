<select name="data[Banner][local]" class="type span4" id="BusinessType">
	<?php foreach($categories as $key=>$categorie): ?>
	<option value="<?= $key ?>"><?= $categorie ?></option>
	<?php endforeach; ?>
</select> 