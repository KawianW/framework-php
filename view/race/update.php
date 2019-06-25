<div class="container">
<h1>Soort wijzigen</h1>
	<form name="update" method="post" action="<?=URL?>race/edit/<?php echo $race['id']?>">
	    <!--  Bouw hier de rest van je formulier   -->
		<h1>update hier uw soort</h1>
	<div class="form-group">
		<label for="name">Naam</label>
		<input type="text" name="name" class="form-control" value= "<?php echo $race['name']?>">
    </div>
    <div class="form-group">
		<label for="height">hoogte</label>
		<input type="text" name="height" class="form-control" value= "<?php echo $race['height']?>">
    </div>
	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-primary" value="bewerken">
    </div>

	</form>
    </div>