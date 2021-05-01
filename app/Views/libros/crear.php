<?=$cabecera?>
Formulario de crear
/** se   crea el formulario para agregar unnuevo libro*/
    <div class="card">
        <div class="card-body">
        <h5 class ="card-title">Ingresar datos del libro</h5>
        <p class="card-text">

  /** En el action se especifica la ruta donde se enviará la información del formulario*/
    <form method="post" action="<?=site_url('/guardar')?>" enctype="mulpipart/form-data">
    
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input id="nombre" class="form-control" name="nombre" type="text">
    </div>

    <div class="form-group">
        <label for="imagen">Text</label>
        <input id="imagen" class="form-control" name="imagen" type="file">
    </div>
    <br>
    <button class="btn btn-success" type="submit">Guardar</button>
    </form>
        </p>
        </div>
    </div>

   

<?=$pie?>