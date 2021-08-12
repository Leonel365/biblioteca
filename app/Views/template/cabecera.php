<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Bliblioteca</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-primary"> 
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BIBLIOTECA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link"  href="<?=base_url('/')?>">Inicio</a>
        </li>
        <li class="nav-item d-flex">
          <a class="nav-link" href="<?=base_url('crear')?>">Nuevo libro</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


    <div class="container">

    <?php 
   if(session('mensaje')){
       ?>

        <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '¡Todos los campos son obligatorios!',
            footer: '<b>Nota</b>: El titulo del libro debe contener como minimo 04 caracteres'
            })
        </script>

<?php
   }
   ?>