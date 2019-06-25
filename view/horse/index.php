<h1>Overzicht van paarden</h1>

	<table class="table">
    <thead>
        <tr>
            <th>Naam</th>
            <th>Ras</th>
            <th>Hoogte</th>
            <th>Leeftijd</th>
            <th>Aanpassen</th>
            <th>Verwijderen</th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($horses as $horse) { ?>
        <tr>
            <td><?= $horse['name'] ?></td>
            <td><?= getRace( $horse['race_id'])['name']; ?></td>
            <td><?= getRace( $horse['race_id'])['height']; ?></td>
            <td><?= $horse['age'] ?></td>
            <td><a class = "btn btn-info" href="<?=URL?>horse/update/<?php echo $horse['id']?>"><i class="fas fa-edit"></i></a></td>
            <td><a class = "btn btn-danger" href="<?=URL?>horse/delete/<?php echo $horse['id']?>"><i class="fas fa-trash"></i></a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<p class="lead text-center"><a href="<?= URL ?>horse/create">+ Purd toevoegen</a></p>