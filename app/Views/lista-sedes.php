<table border="1">
    <tr>
        <th>id</th>
        <th>id_empresa</th>
        <th>nombre</th>
        <th>direccion</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    <?php foreach($lista as $item): ?>
        <tr>
            <td><?=$item->id?></td>
            <td><?=$item->id_empresa?></td>
            <td><?=$item->nombre?></td>
            <td><?=$item->direccion?></td>
            <td><?=$item->created_at?></td>
            <td><?=$item->updated_at?></td>
            <!--<td><a href="<?=base_url("sede/asignar/{$item->id}")?>">Agregar trabaj</a></td>-->
        </tr>
    <?php endforeach; ?>
</table>