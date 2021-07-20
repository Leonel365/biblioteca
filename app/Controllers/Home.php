<?php

namespace App\Controllers;

use App\Models\Libro;
class Home extends BaseController
{
	public function index()
	{
		$libro= new Libro();
        $datos['libros']= $libro->orderBy('id','ASC')->findAll();

        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');
		return view('libros/crear', $datos);
	}
}
