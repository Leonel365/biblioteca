<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Document</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
Sistema de libros 
    <div class="container">

Formulario de crear

    <div class="card">
        <div class="card-body">
        <h5 class ="card-title">Ingresar datos del libro</h5>
        <p class="card-text">

    <form method="post" action="<?=base_url('guardar')?>" enctype="mulpipart/form-data">
    
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
    
    </div>
</body>
</html>