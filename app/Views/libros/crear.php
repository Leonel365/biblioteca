<?=$cabecera?>

Formulario de crear

    <div class="card">
        <div class="card-body">
        <h5 class ="card-title">Ingresar datos del libro</h5>
        <p class="card-text">

    <form method="post" action="<?=site_url('guardar')?>" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input id="nombre" value ="<?=old('nombre')?>" class="form-control" name="nombre" type="text">
    </div>

    <div class="form-group">
        <label for="imagen">Seleccione una imagen:</label>
        <input id="imagen" class="form-control" name="imagen" type="file">
    </div>
    <br>
    <button class="btn btn-success" type="submit">Guardar</button>
    <a  href="<?=base_url('listar');?>" class="btn btn-info" style="color:white">Cancelar</a>
    </form>
        </p>
        </div>
    </div>
    
    </div>
</body>
</html>