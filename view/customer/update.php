<div class="container">
<h1>Persoon wijzigen</h1>
	<form name="update" method="post" action="<?=URL?>customer/edit/<?php echo $customer['id']?>">
	    <!--  Bouw hier de rest van je formulier   -->
		<h1>update hier uw klant</h1>
    <div class="form-group">
        <label for="name">Naam</label>
        <input type="text" name="name" class="form-control" value="<?php echo $customer['name'];?>">
    </div>
	<div class="form-group">
		<label for="address">Adres</label>
		<input type="text" name="address" class="form-control"value="<?php echo $customer['address'];?>">
    </div>
    <div class="form-group">
		<label for="postalcode">Postcode</label>
		<input type="text" name="postalcode" class="form-control" value="<?php echo $customer['postalcode'];?>"> 
    </div>
    <div class="form-group">
		<label for="city">Stad</label>
		<input type="text" name="city" class="form-control" value="<?php echo $customer['city'];?>"> 
    </div>
    <div class="form-group">
		<label for="phone">phone</label>
		<input type="text" name="phone" class="form-control" value="<?php echo $customer['phone'];?>"> 
    </div>
    <div class="form-group">
		<label for="Email">Email</label>
		<input type="text" name="email" class="form-control" value="<?php echo $customer['email'];?>"> 
    </div>
	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-primary" value="bewerken">
    </div>

	</form>
    </div>