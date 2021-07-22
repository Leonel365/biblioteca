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
        $libro = new Libro();
        $nombre= $this->request->getVar('nombre');

        if($imagen=$this->request->getFile('imagen')){
            $nuevoNombre= $imagen->getRandomName();
            $imagen->move('../public/uploads/',$nuevoNombre);

            $datos=[
                'nombre'=>$nombre,
                'imagen'=>$nuevoNombre
            ];
           
           $libro->insert($datos);
          
        }
        echo "Agregado a BD";
}

public function borrar($id = null){

    $libro = new Libro();

    $datosLibro=$libro->where('id',$id)->first();

    

    $ruta=('../public/uploads/'.$datosLibro['imagen']);

    unlink($ruta);



echo "borrar libro ".$id;

return $this->response->redirect(site_url('/listar'));

}
}