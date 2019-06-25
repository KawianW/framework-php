<div class="container">
<h1>Voeg een soort toe</h1>
<form name="create" method="post" action="store">
<input type="hidden" name="id" value="<?=$race['id'] ?>"/>

	<div class="form-group">
		<label for="name">Naam</label>
		<input required type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
		<label for="height">hoogte</label>
		<input type="text" name="height" class="form-control"> 
    </div>
   	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-primary">
    </div>

</form>
</div>