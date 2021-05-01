<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libro;
class Libros extends Controller{
    
    public function index(){

        $libro= new Libro();
        $datos['libros']= $libro->orderBy('id','ASC')->findAll();

        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');


        return view('libros/listar',$datos);
    }

    public function crear(){

        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');

        return view('libros/crear',$datos);
    }

    public function guardar(){
        $nombre= $this->request->getVar('nombre');
        print_r($nombre);
    }

}