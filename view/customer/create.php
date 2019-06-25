<div class="container">
<h1>Voeg een klant toe</h1>
<form name="create" method="post" action="store">
<input type="hidden" name="id" value="<?=$customer['id'] ?>"/>

	<div class="form-group">
		<label for="name">Naam</label>
		<input type="text" name="name" class="form-control">
    </div>
	<div class="form-group">
		<label for="address">Adres</label>
		<input type="text" name="address" class="form-control">
    </div>
    <div class="form-group">
		<label for="postalcode">Postcode</label>
		<input type="text" name="postalcode" class="form-control"> 
    </div>
    <div class="form-group">
		<label for="city">Stad</label>
		<input type="text" name="city" class="form-control"> 
    </div>
    <div class="form-group">
		<label for="phone">phone</label>
		<input type="text" name="phone" class="form-control"> 
    </div>
    <div class="form-group">
		<label for="Email">Email</label>
		<input type="text" name="email" class="form-control"> 
    </div>
	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-primary">
    </div>

</form>
</div>