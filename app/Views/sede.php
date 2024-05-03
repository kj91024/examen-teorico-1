<form action="<?=current_url()?>" method="POST">
    <h1>Asignar sede</h1>
    <h4>Id Empresa</h4>
    <input type="number" name="id_empresa" disabled value="<?=$id_empresa?>">
    <h4>Nombre de la sede</h4>
    <input type="text" name="nombre">
    <h4>Direccion de la sede</h4>
    <textarea name="direccion" id="" cols="30" rows="10"></textarea>
    <hr>
    <button>Enviar</button>
</form>