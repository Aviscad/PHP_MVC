<h1>Categorias</h1>
<a href="<?= BASE_URL ?>categoria/create">Nueva Categoria</a>

<table>
    <tr>
        <th>Codigo</th>
        <th>Categoria</th>
        <th>Acciones</th>
    </tr>

    <?php while ($c = $categorias->fetch_object()) : ?>
        <tr>
            <td><?= $c->codcate; ?></td>
            <td><?= $c->categoria; ?></td>
            <td>
                <a href="<?= BASE_URL ?>categoria/edit&id=<?= $c->codcate ?>">Editar</a>
                <a href="<?= BASE_URL ?>categoria/delete&id=<?= $c->codcate ?>">Eliminar</a>
            </td>
        </tr>
    <?php endwhile; ?>

</table>