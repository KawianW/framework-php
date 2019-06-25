<div class="container">
<h1>Voeg een reservering toe</h1>
<form name="create" method="post" action="store">
   
    <div class="form-group">
        <label for='customer_id'>Klant</label>
            <select class="form-control" name='customer_id'>
            <option disabled selected value> -- Selecteer een klant --</option>
            <?php foreach (getAllCustomers() as $customer) {?>
            <option required value = '<?php echo $customer['id'];?>' <?php if($customer['id'] === $reservations['customer_id']){ echo "selected";} ?>><?php echo $customer["name"] ; ?></option>
        <?php } ?>
        </select>
    </div>

    <div class="form-group">
        <label for='horse_id'>Paard</label>
        <select class="form-control" name='horse_id'>
        <option disabled selected value> -- Selecteer een paard --</option>
            <?php foreach (getAllHorses() as $horse) {?>
            <option value = '<?php echo $horse['id'];?>' <?php if($horse['id'] === $reservations['horse_id']){ echo "selected";} ?>><?php echo $horse["name"] ; ?></option>
        <?php } ?>
        </select>
    </div>

    <div class="form-group">
        <label for='start_time'>Starttijd</label>
        <input type="datetime-local" class='form-control' name="start_time" value="<?php echo  $reservations['start_time']?>" required>
    </div>

    <div class="form-group">
        <label for='rides'>Ritten (Prijs is &euro;55 per rit)</label>
        <input type="number" class='form-control' name="rides" value="<?php echo $reservations['rides']?>">
    </div>

    <button type="submit" class="btn btn-primary">Toevoegen</button>
</div>
</form>