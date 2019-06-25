<h1>Overzicht van reserveringen</h1>

	<table class="table">
    <thead>
        <tr>
            <th>Klant</th>
            <th>Paard</th>
            <th>Tijd</th>
            <th>Ritten</th>
            <th>Aanpassen</th>
            <th>Verwijderen</th>
           
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($reservations as $reservation) { ?>
        <tr>
            <td><?= getCustomer($reservation['customer_id'])['name'] ?></td>
            <td><?= getHorse($reservation['horse_id'])['name'] ?></td>
            <td><?= $reservation['start_time'] ?></td>
            <td><?= $reservation['rides'] ?></td>
            <td><a class = "btn btn-info" href="<?=URL?>reservation/update/<?php echo $reservation['id']?>"><i class="fas fa-edit"></i></a></td>
            <td><a class = "btn btn-danger"  href="<?=URL?>reservation/delete/<?php echo $reservation['id']?>"><i class="fas fa-trash"></i></a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

<p class="lead text-center"><a href="<?= URL ?>reservation/create">+ reservering toevoegen</a></p>