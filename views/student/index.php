<table class="table table-hover" >
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Age</td>
    </tr>
    <?php
        foreach ($data['students'] as $s)
            ?>
                <tr>
                    <td><?= $s->id ?></td>
                    <td><?= $s->name ?></td>
                    <td><?= $s->age ?></td>
                </tr>
    <?php endforeach; ?>

</table>