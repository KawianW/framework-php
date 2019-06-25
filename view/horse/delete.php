<h1>weet je zeker dat je <?php echo $horse['name'];?> wilt verwijderen?</h1>

<form name="" method="post" action="<?=URL?>horse/destroy/<?php echo $horse['id']?>">

<input type="submit" class="btn btn-primary" value="verwijderen">
</form>