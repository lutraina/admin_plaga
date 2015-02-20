

<select name="data[Business][categories_id]" class="type" id="BusinessType">
	<?php foreach($categories as $key=>$categorie): ?>
	
	<option value="<?= $key ?>"><?= $categorie ?></option>
	<?php endforeach; ?>
</select>