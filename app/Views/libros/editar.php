<?=$cabecera?> 

<div class="card">
        <div class="card-body">
        <h5 class ="card-title">Ingresar datos del libro</h5>
        <p class="card-text">

    <form method="post" action="<?=site_url('/actualizar')?>" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input id="nombre" value="<?=$libro['nombre']?>" class="form-control" name="nombre" type="text">
    </div>

    <input type="hidden" name="id" value="<?=$libro['id']?>">
    <p>Imagen:</p><br>
    <img src="<?=base_url()?>/uploads/<?=$libro['imagen'];?>"  width="100" alt="portada del libro">
    <p><br></p>
    <div class="form-group">
        <label for="imagen">Seleccione una imagen:</label>
        <input id="imagen" class="form-control" name="imagen" type="file">
    </div>
    <br>
   
    <button class="btn btn-success" type="submit">Actualizar</button>
    </form>
        </p>
        </div>
    </div>


<?=$pie?>