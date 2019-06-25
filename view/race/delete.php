<h1>weet je zeker dat je <?php echo $race['name'];?> wilt verwijderen?</h1>

<form name="" method="post" action="<?=URL?>race/destroy/<?php echo $race['id']?>">

<input type="submit" class="btn btn-primary" value="verwijderen">
</form>