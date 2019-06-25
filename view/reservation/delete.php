<h1>weet je zeker dat je <?php echo getCustomer($reservation['customer_id'])['name'];?> wilt verwijderen?</h1>

<form name="" method="post" action="<?=URL?>reservation/destroy/<?php echo $reservation['id']?>">

<input type="submit" class="btn btn-primary" value="verwijderen">
</form>