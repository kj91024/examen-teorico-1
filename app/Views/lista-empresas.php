<table border="1">
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>ruc</th>
        <th>razon_social</th>
        <th>direccion</th>
        <th>created_at</th>
        <th>updated_at</th>
        <th>acciones</th>
    </tr>
    <?php foreach($lista as $item): ?>
    <tr>
        <td><?=$item->id?></td>
        <td><?=$item->nombre?></td>
        <td><?=$item->ruc?></td>
        <td><?=$item->razon_social?></td>
        <td><?=$item->direccion?></td>
        <td><?=$item->created_at?></td>
        <td><?=$item->updated_at?></td>
        <td><a href="<?=base_url("sede/asignar/{$item->id}")?>">Agregar sede</a></td>
    </tr>
    <?php endforeach; ?>
</table>