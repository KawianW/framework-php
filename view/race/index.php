<h1>Overzicht van paarden soorten</h1>

	<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Hoogte</th>
            <th>Aanpassen</th>
            <th>Verwijderen</th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($races as $race) { ?>
        <tr>
            <td><?= $race['name'] ?></td>
            <td><?= $race['height'] ?></td>
            <td><a class = "btn btn-info" href="<?=URL?>race/update/<?php echo $race['id']?>"><i class="fas fa-edit"></i></a></td>
            <td><a class = "btn btn-danger" href="<?=URL?>race/delete/<?php echo $race['id']?>"><i class="fas fa-trash"></i></a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<p class="lead text-center"><a href="<?= URL ?>race/create">+ Soort toevoegen</a></p>