<?=$cabecera?>
<p><br></p>
<a href="<?=base_url('crear')?>" class="btn btn-success">Nuevo libro</a>
<p><br><br></p>
        <table class="table table-light">
            <tdead class="tdead-light">
            <tr>
                <th>#</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th><div class="text-center"> Acciones</div></th>
            </tr>
            </tdead>
            <tbody>
            <?php $cont = 0;foreach($libros as $libro ): ?>
                <tr>
                    <td> <?php echo ++$cont;?></td>
                   <td><img src="<?=base_url()?>/uploads/<?=$libro['imagen'];?>"  width="100" alt="portada del libro"></td>
                    <td><?=$libro['nombre']?></td>
                    <td>
                        <div class="text-center">
                        <a href= "<?=base_url('editar/'.$libro['id']);?>" class ="btn btn-info" style="color:white" type ="button">Editar</a>
                         <a href= "<?=base_url('borrar/'.$libro['id']);?>" class ="btn btn-danger" type ="button">Borrar</a>     
                        </div>
                    </td>
                </tr>
                  
        <?php  endforeach;?>
            </tbody>
        
        </table>
        
        <?=$pie?>