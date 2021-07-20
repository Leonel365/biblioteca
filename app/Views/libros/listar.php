<?=$cabecera?>
<a href="<?=base_url('crear')?>">Crear un libro</a>
        <table class="table table-light">
            <tdead class="tdead-light">
            <tr>
                <th>#</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
            </tdead>
            <tbody>
            <?php foreach($libros as $libro ): ?>
                <tr>
                    <td> <?=$libro['id']?></td>
                    <td><?=$libro['imagen']?></td>
                    <td><?=$libro['nombre']?></td>
                    <td>Editar/Borrar</td>
                </tr>

        <?php  endforeach;?>
            </tbody>
        
        </table>

        <?=$pie?>