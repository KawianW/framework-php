<?php var_dump($reservations['start_time']); ?>
<div class="container">
<h1>reservering wijzigen </h1>
<form name="update" method="post" action="<?php echo URL ?>reservation/edit/<?= $reservations['id']?>">
    <div class="form-group">
        <label for='customer_id'>Klant</label>
            <select class="form-control" name='customer_id'>
            <?php foreach ($customers as $customer) {?>
            <option value = '<?php echo $customer['id'];?>' <?php if($customer['id'] === $reservations['customer_id']){ echo "selected";} ?>><?php echo $customer["name"] ; ?></option>
        <?php } ?>
        </select>
    </div>

    <div class="form-group">
        <label for='horse_id'>Paard</label>
        <select class="form-control" name='horse_id'>
            <?php foreach ($horses as $horse) {?>
            <option value = '<?php echo $horse['id'];?>' <?php if($horse['id'] === $reservations['horse_id']){ echo "selected";} ?>><?php echo $horse["name"] ; ?></option>
        <?php } ?>
        </select>
    </div>

    <div class="form-group">
            <label class="lead" for="">Startdatum en tijd</label>
            <input class="form-control" type="datetime-local" name="start_time" value="<?php echo $reservations['start_time']; ?>">
        </div>

    <div class="form-group">
        <label for='rides'>Ritten (Prijs is &euro;55 per rit)</label>
        <input type="number" class='form-control' name="rides" value="<?php echo $reservations['rides']?>"> 
    </div>

    <button type="submit" class="btn btn-primary">bewerken</button>
</div>
</form>