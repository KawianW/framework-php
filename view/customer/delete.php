<h1>weet je zeker dat je <?php echo $customer['name'];?> wilt verwijderen?</h1>

<form name="" method="post" action="<?=URL?>customer/destroy/<?php echo $customer['id']?>">

<input type="submit" class="btn btn-primary" value="verwijderen">
</form>