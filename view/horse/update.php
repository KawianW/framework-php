<div class="container">
<h1>Paard wijzigen</h1>
	<form name="update" method="post" action="<?=URL?>horse/edit/<?php echo $horse['id']?>">
	    <!--  Bouw hier de rest van je formulier   -->
		  <h1>update hier uw paart</h1>
    <div class="form-group">
		  <label for="race_id">Race_id</label>
		  <input type="text" name="race_id" class="form-control" value= "<?php echo $horse['race_id']?>">
    </div>
	<div class="form-group">
		<label for="name">Naam</label>
		<input type="text" name="name" class="form-control" value= "<?php echo $horse['name']?>">
    </div>
	<div class="form-group">
        <label for='race_id'>Ras</label>
        <select class="form-control" name='race_id'>
            <?php foreach (getAllRaces() as $race) {?>
            <option value = '<?php echo $race['id'];?>'><?php echo $race['name']; ?></option>
        <?php } ?>
        </select>
    </div>
    <div class="form-group">
		<label for="age">Leeftijd</label>
		<input type="text" name="age" class="form-control" value= "<?php echo $horse['age']?>">
    </div>
	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-primary" value="bewerken">
    </div>

	</form>
    </div>