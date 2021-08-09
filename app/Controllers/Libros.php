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
        return $this->response->redirect(site_url('/listar'));  
}

    public function borrar($id = null){
    $libro = new Libro();
    $datoImagen= $libro->where('id',$id)->first();

    $rutaImagen = ('../public/uploads/'.$datoImagen['imagen']);
    unlink($rutaImagen);

    $libro->where('id',$id)->delete($id);
    
    return $this->response->redirect(site_url('/listar'));  
 }

    public function editar($id = null){
     
        $libro = new Libro();

        $datos['cabecera']= view('template/cabecera');
        $datos['pie']= view('template/piepagina');

        $datos['libro'] = $libro->where('id',$id)->first();
     
        return view('libros/editar',$datos);

    }

    public function actualizar(){
        $libro = new Libro();

        $datos=['nombre'=>$this->request->getVar('nombre')];
        $id  = $this->request->getVar('id');
        
        $libro->update($id,$datos);

        $validation = $this->validate([
            'imagen' => [
                'uploaded[imagen]',
                'mime_in[imagen,image/jpg,image/jpeg,image/png]',
                'max_size[imagen,1024]',
            ]
        ]);

    }
}