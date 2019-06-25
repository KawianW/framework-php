<div class="container">
<h1>Voeg een paard toe</h1>
<form name="create" method="post" action="store">
<input type="hidden" name="id" value="<?=$horse['id'] ?>"/>

	<div class="form-group">
		<label for="name">Naam</label>
		<input required type="text" name="name" class="form-control">
    </div>
	<div class="form-group">
        <label for='race_id'>Ras</label>
        <select class="form-control" name='race_id'>
        <option disabled selected value> -- Selecteer een ras --</option>
            <?php foreach (getAllRaces() as $race) {?>
            <option value = '<?php echo $race['id'];?>'><?php echo $race['name']; ?></option>
        <?php } ?>
        </select>
    </div>
    <div class="form-group">
		<label for="age">Leeftijd</label>
		<input type="text" name="age" class="form-control"> 
    </div>
   	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-primary">
    </div>

</form>
</div>