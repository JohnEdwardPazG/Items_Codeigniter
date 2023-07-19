<?= $cabecera ?>
<br>
<a class="btn btn-success" href="<?= base_url('crear') ?>">Crear libro</a>
<br>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Category</th>
            <th>Cost_price</th>
            <th>Unit_price</th>
            <th>Pic_filename</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>

        <?php foreach ($items as $item) : ?>
            <tr>
                <td><?= $item['id']; ?></td>
                <td><?= $item['name']; ?></td>
                <td><?= $item['category']; ?></td>
                <td><?= $item['cost_price']; ?></td>
                <td><?= $item['unit_price']; ?></td>
                <td><?= $item['pic_filename']; ?></td>
                <td>
                    <a href="<?= base_url('editar/' . $item['id']); ?>" button class="btn btn-warning" type="button">Editar</a>
                    <a href="<?= base_url('borrar/' . $item['id']); ?>" button class="btn btn-danger" type="button">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>

    </tbody>
</table>

<?= $piepagina ?>